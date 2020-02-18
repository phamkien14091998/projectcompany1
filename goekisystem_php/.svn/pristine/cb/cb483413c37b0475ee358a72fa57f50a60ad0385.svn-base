<?php namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImgAreaController extends Controller
{
    public function index(Request $request)
    {
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;;
        $array = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH_MINI
        ];
        $pathMyLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SELECT;
        $api_result = $api->getListUser($pathMyLogin, $array);
        //pagination with data
        if($api_result !=[]) {
            $num_per_page = 54;
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
        return view('pages.img.img_area')->with(['r' => $request, 'data' => $data_get, 'total_page' => $total_page]);
    }

    public function detailArea(Request $request)
    {
        $girl_cd = $request->id;
        $img_path = 'http://img.eki-go.com/img_girl_mini/';
        $array = [
            'girl_cd' => $girl_cd,
            'img_path' => $img_path
        ];
        $api = new apiControllers();
        $pathMyLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SHOW_PIC_MINI;
        $api_result = $api->getListUser($pathMyLogin, $array);
        return view('pages.img.img_area_detail')->with(['r' => $request, 'data' => $api_result]);
    }

    public function updateImgArea(Request $request){
        $api = new apiControllers();
        $picture_no = $request->input('picture_no');
        $girl_cd = $request->input('girl_cd');
        $picture_name = $girl_cd . '_' . $picture_no.".jpg";
        if (!empty($_FILES['upload_img_area'])) {
            if (!file_exists("./img/img_girl/" . $girl_cd)) {
                mkdir("./img/img_girl/" . $girl_cd, 0777, true);
            }
            move_uploaded_file($_FILES['upload_img_area']['tmp_name'], "./img/img_girl_mini/{$picture_name}");
        }
        $pathMyLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_UPLOAD_PIC_MINI;
        $directory_img="img_girl_mini";
        $array = [
            'pic_no' => $picture_no,
            'girl_cd' => $girl_cd
        ];
        $api->callApiFileArea($pathMyLogin,$array,$picture_name,$directory_img);
        return redirect('/imgArea/detail/' . $girl_cd);
    }
}