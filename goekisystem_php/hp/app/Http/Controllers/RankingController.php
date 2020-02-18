<?php
namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RankingController extends Controller
{
    public function index(Request $request){
        $api = new apiControllers();
        $client_cd = $request->client_cd;
        if (empty($client_cd)){
            $client_cd = 1;
        }
        $array = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH_MINI
        ];
        $array_data = [
            'client_cd' => $client_cd
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$RANKING_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        //pagination with data
        if($api_result !=[]) {
            $num_per_page = 32;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            if (floor(count($api_result['item']) / $num_per_page) == count($api_result['item']) / $num_per_page) {
                $total_page = floor(count($api_result['item']) / $num_per_page);
            } else {
                $total_page = floor(count($api_result['item']) / $num_per_page) + 1;
            }
            $start_data = ($page - 1) * $num_per_page;
            $end_data = $start_data + $num_per_page;
            $count = 0;
            $data_get['item'] = [];
            if (!isset($data['item']['girl_cd'])) {
                foreach ($api_result['item'] as $row) {
                    $count++;
                    if ($count > $start_data && $count <= $end_data) {
//                $data_get['item']['test'] = array_merge($data_get['item']['test'], $row);
                        array_push($data_get['item'], $row);
                    }
                }
            } else {
                $data_get = $api_result;
            }
        }
        else{
            $data_get=$api_result;
            $total_page=1;
        }
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$RANKING_SELECT_DATA;
        $api_result_data = $api->getListUser($pathHpLogin, $array_data);
        $count_data = 0;
        foreach ($api_result_data['item'] as $item) {
            $count_data++;
        }
        return view('pages.ranking.ranking')->with(['r' => $request, 'data_img' => $data_get, 'total_page' => $total_page, 'data' => $api_result_data, 'count' => $count_data]);
    }

    public function update(Request $request){
        $api = new apiControllers();
        $array = [
            'client_cd' => $request->input('client_cd'),
            'girl_cd' => $request->input('girl_cd'),
            'ranking_flg1' => $request->input('ranking_flg1'),
            'ranking_text1' => $request->input('ranking_text1')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$RANKING_UPDATE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/ranking');
    }

}