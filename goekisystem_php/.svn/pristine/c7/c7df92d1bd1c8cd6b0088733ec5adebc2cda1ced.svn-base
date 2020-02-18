<?php
namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SyukinWeekController extends Controller
{
    public function index(Request $request)
    {
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $img_path = ConstantHelper::$IMG_PATH;
        $search_name = $request->search_name;
        $array = [
            'client_cd' => $client_cd,
            'img_path' => $img_path,
            'search_name' => $search_name
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$SYUKIN_WEEK_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.syukin_week.syukin_week')->with(['r' => $request, 'data' => $api_result]);
    }

    public function detailArea(Request $request){
        $client_cd = Auth::user()->client_cd;;
        $img_path = 'http://img.eki-go.com/img_girl/';
        $array = [
            'img_path' => $img_path,
            'client_cd' => $client_cd
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$SYUKIN_WEEK_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.syukin_week.syukin_week_detail')->with(['r' => $request,'data' => $api_result]);
    }

    public function updateSyukin(Request $request){
        $girl_cd = $request->input('girl_cd');

        $syukin_date1 = $request->input('syukin_date');
        $syukin_date2 = $request->input('syukin_date2');
        $syukin_date3 = $request->input('syukin_date3');
        $syukin_date4 = $request->input('syukin_date4');
        $syukin_date5 = $request->input('syukin_date5');
        $syukin_date6 = $request->input('syukin_date6');
        $syukin_date7 = $request->input('syukin_date7');

        $syukin_flg = $request->input('syukin_flg');
        $syukin_flg2 = $request->input('syukin_flg2');
        $syukin_flg3 = $request->input('syukin_flg3');
        $syukin_flg4 = $request->input('syukin_flg4');
        $syukin_flg5 = $request->input('syukin_flg5');
        $syukin_flg6 = $request->input('syukin_flg6');
        $syukin_flg7 = $request->input('syukin_flg7');

        $date_start1 = $request->input('date_start');
        $date_start2 = $request->input('date_start2');
        $date_start3 = $request->input('date_start3');
        $date_start4 = $request->input('date_start4');
        $date_start5 = $request->input('date_start5');
        $date_start6 = $request->input('date_start6');
        $date_start7 = $request->input('date_start7');

        $date_end1 = $request->input('date_end');
        $date_end2 = $request->input('date_end2');
        $date_end3 = $request->input('date_end3');
        $date_end4 = $request->input('date_end4');
        $date_end5 = $request->input('date_end5');
        $date_end6 = $request->input('date_end6');
        $date_end7 = $request->input('date_end7');

        if($syukin_flg == 1 && ($date_end1 == '00:00' || $date_start1 == $date_end1)){
            $request->session()->flash('fail', '時間帯が重複しています。別の時間帯を選択してください。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }elseif($syukin_flg == 1 && (((strtotime($syukin_date1. ' ' .$date_end1) - strtotime($syukin_date1. ' ' .$date_start1)) / 60) <= 120)){
            $request->session()->flash('fail', '2時間以上の登録をお願いします。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }
        if($syukin_flg2 == 1 && ($date_end2 == '00:00' || $date_start2 == $date_end2)){
            $request->session()->flash('fail', '時間帯が重複しています。別の時間帯を選択してください。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }elseif ($syukin_flg2 == 1 && (((strtotime($syukin_date2. ' ' .$date_end2) - strtotime($syukin_date2. ' ' .$date_start2)) / 60) <= 120)){
            $request->session()->flash('fail', '2時間以上の登録をお願いします。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }
        if($syukin_flg3 == 1 && ($date_end3 == '00:00' || $date_start3 == $date_end3)){
            $request->session()->flash('fail', '時間帯が重複しています。別の時間帯を選択してください。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }elseif($syukin_flg3 == 1 && (((strtotime($syukin_date3. ' ' .$date_end3) - strtotime($syukin_date3. ' ' .$date_start3)) / 60) <= 120)){
            $request->session()->flash('fail', '2時間以上の登録をお願いします。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }
        if($syukin_flg4 == 1 && ($date_start4 == $date_end4 || $date_end4 == '00:00')){
            $request->session()->flash('fail', '時間帯が重複しています。別の時間帯を選択してください。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }elseif($syukin_flg4 == 1 && (((strtotime($syukin_date4. ' ' .$date_end4) - strtotime($syukin_date4. ' ' .$date_start4)) / 60) <= 120)){
            $request->session()->flash('fail', '2時間以上の登録をお願いします。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }
        if ($syukin_flg5 == 1 && ($date_start5 == $date_end5 || $date_end5 == '00:00')){
            $request->session()->flash('fail', '時間帯が重複しています。別の時間帯を選択してください。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }elseif($syukin_flg5 == 1 && (((strtotime($syukin_date5. ' ' .$date_end5) - strtotime($syukin_date5. ' ' .$date_start5)) / 60) <= 120)){
            $request->session()->flash('fail', '2時間以上の登録をお願いします。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }
        if($syukin_flg6 == 1 && ($date_start6 == $date_end6 || $date_end6 == '00:00')){
            $request->session()->flash('fail', '時間帯が重複しています。別の時間帯を選択してください。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }elseif($syukin_flg6 == 1 && (((strtotime($syukin_date6. ' ' .$date_end6) - strtotime($syukin_date6. ' ' .$date_start6)) / 60) <= 120)){
            $request->session()->flash('fail', '2時間以上の登録をお願いします。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }
        if ($syukin_flg7 == 1 && ($date_start7 == $date_end7 || $date_end7 == '00:00')){
            $request->session()->flash('fail', '時間帯が重複しています。別の時間帯を選択してください。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }elseif($syukin_flg7 == 1 && (((strtotime($syukin_date7. ' ' .$date_end7) - strtotime($syukin_date7. ' ' .$date_start7)) / 60) <= 120)){
            $request->session()->flash('fail', '2時間以上の登録をお願いします。');
            return redirect('syukinWeek/detail/'.$girl_cd);
        }

        $array = [
            'girl_cd' => $girl_cd,

            'syukin_date' => $request->input('syukin_date'),
            'syukin_date2' => $request->input('syukin_date2'),
            'syukin_date3' => $request->input('syukin_date3'),
            'syukin_date4' => $request->input('syukin_date4'),
            'syukin_date5' => $request->input('syukin_date5'),
            'syukin_date6' => $request->input('syukin_date6'),
            'syukin_date7' => $request->input('syukin_date7'),

            'date_start' => $request->input('date_start'),
            'date_start2' => $request->input('date_start2'),
            'date_start3' => $request->input('date_start3'),
            'date_start4' => $request->input('date_start4'),
            'date_start5' => $request->input('date_start5'),
            'date_start6' => $request->input('date_start6'),
            'date_start7' => $request->input('date_start7'),

            'date_end' => $request->input('date_end'),
            'date_end2' => $request->input('date_end2'),
            'date_end3' => $request->input('date_end3'),
            'date_end4' => $request->input('date_end4'),
            'date_end5' => $request->input('date_end5'),
            'date_end6' => $request->input('date_end6'),
            'date_end7' => $request->input('date_end7'),

            'syukin_flg' => $syukin_flg,
            'syukin_flg2' => $syukin_flg2,
            'syukin_flg3' => $syukin_flg3,
            'syukin_flg4' => $syukin_flg4,
            'syukin_flg5' => $syukin_flg5,
            'syukin_flg6' => $syukin_flg6,
            'syukin_flg7' => $syukin_flg7,

            'tomari_flg' => $request->input('tomari_flg'),
            'tomari_flg2' => $request->input('tomari_flg2'),
            'tomari_flg3' => $request->input('tomari_flg3'),
            'tomari_flg4' => $request->input('tomari_flg4'),
            'tomari_flg5' => $request->input('tomari_flg5'),
            'tomari_flg6' => $request->input('tomari_flg6'),
            'tomari_flg7' => $request->input('tomari_flg7'),

            'premie_flg' => $request->input('premie_flg'),
            'premie_flg2' => $request->input('premie_flg2'),
            'premie_flg3' => $request->input('premie_flg3'),
            'premie_flg4' => $request->input('premie_flg4'),
            'premie_flg5' => $request->input('premie_flg5'),
            'premie_flg6' => $request->input('premie_flg6'),
            'premie_flg7' => $request->input('premie_flg7'),

            'client_cd' => Auth::user()->client_cd
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$SYUKIN_WEEK_UPDATE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/syukinWeek/detail/'. $girl_cd);
    }

    public function deleteSyukin(Request $r){
        $api = new apiControllers();
        $girl_cd = $r->id;
        $syukin_date = $_GET['syukin_date'];
        $syukin_date7 = $_GET['syukin_date7'];
        $array = [
            'girl_cd' => $girl_cd,
            'syukin_date' => $syukin_date,
            'syukin_date7' => $syukin_date7
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$SYUKIN_WEEK_DELETE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/syukinWeek');
    }

}