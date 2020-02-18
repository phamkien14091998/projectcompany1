<?php namespace App\Http\Controllers;

use App\Helpers\Common;
use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

    public function index(Request $request)
    {
        $client_cd = Auth::user()->client_cd;
        $search_type = $request->search_type;
        $chk_zaiseki = $request->chk_zaiseki;
        $girl_name = $request->input('girl_name');
        $array = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH,
            'search_type' => $search_type,
            'chk_zaiseki' => $chk_zaiseki,
            'girl_name' => $girl_name
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        //pagination with data
        if (isset($api_result['item']['girl_cd'])){
            $data_get = $api_result;
            $total_page=1;
        }elseif($api_result !=[]) {
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
        return view('pages.girl.girl')->with(['r' => $request, 'data' => $data_get, 'total_page' => $total_page]);
    }

    public function add(){
        return view('pages.girl.girl_add');
    }

    public function delete(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $girl_cd = $request->id;
        $array = [
            'client_cd' => $client_cd,
            'girl_cd' => $girl_cd
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_DELETE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/');
    }

    public function addGirl(Request $r){
        $api = new apiControllers();
        $array = [
            'client_cd' => Auth::user()->client_cd,
            'girl_name' => $r->input('name'),
            'girl_tel' => $r->input('tel'),
            'girl_mail' => $r->input('mail'),
            'age' => $r->input('age'),
            'girl_height' => $r->input('height'),
            'girl_hip' => $r->input('girl_hip'),
            'girl_cup' => $r->bust_cup,
            'girl_west' => $r->input('girl_west'),
            'girl_bust' => $r->input('girl_bust'),
            'girl_address' => '',
            'girl_join_date' => $r->input('join_date'),
            'girl_memo1' => $r->girl_memo1,
            'girl_memo2' => $r->girl_memo2,
            'girl_memo4' => $r->input('girl_memo4'),

            'girl_memo7' => $r->input('girl_memo7'),
            'girl_memo9' => $r->girl_memo9,
            'girl_memo10' => $r->girl_memo10,
            'girl_memo11' => 0,
            'girl_memo12' => $r->girl_memo12,
            'girl_memo13' => $r->girl_memo13,
            'girl_memo14' => 0,
            'girl_memo15' => $r->girl_memo15,
            'girl_memo16' => 0,
            'girl_memo17' => $r->girl_memo17,
            'girl_memo18' => $r->girl_memo18,

            'girl_memo20' => $r->girl_memo20,
            'girl_memo21' => $r->girl_memo21,
            'girl_memo22' => $r->girl_memo22,
            'girl_memo23' => $r->girl_memo23,
            'girl_memo24' => $r->girl_memo24,
            'girl_memo25' => $r->girl_memo25,
            'girl_memo26' => $r->girl_memo26,
            'girl_memo27' => $r->girl_memo27,
            'girl_memo28' => $r->girl_memo28,
            'girl_memo29' => $r->girl_memo29,
            'girl_memo30' => $r->girl_memo30,
            'girl_memo31' => $r->girl_memo31,
            'girl_memo32' => $r->girl_memo32,

            'girl_memo34' => $r->input('girl_memo34'),
            'girl_memo40' => $r->input('girl_memo40'),
            'girl_memo41' => $r->input('girl_memo41'),
            'girl_memo42' => $r->input('girl_memo42'),
            'girl_memo43' => $r->input('girl_memo43'),
            'girl_memo44' => $r->input('girl_memo44'),
            'girl_memo45' => $r->input('girl_memo45'),
            'girl_memo46' => $r->input('girl_memo46'),
            'girl_memo47' => $r->input('girl_memo47'),
            'girl_memo48' => $r->input('girl_memo48'),
//                'girl_memo49' => $girl_memo49,

            'girl_memo50' => $r->girl_memo50,
            'girl_memo51' => $r->girl_memo51,
            'girl_memo52' => $r->girl_memo52,
            'girl_memo53' => $r->girl_memo53,
            'girl_memo54' => $r->girl_memo54,
            'girl_memo55' => $r->girl_memo55,
            'girl_memo56' => $r->girl_memo56,
            'girl_memo57' => $r->girl_memo57,
            'girl_memo58' => $r->girl_memo58,
            'girl_memo59' => $r->girl_memo59,

            'girl_memo60' => $r->input('girl_memo60'),
            'girl_memo61' => $r->input('girl_memo61'),
            'girl_memo62' => $r->input('girl_memo62'),
            'girl_memo63' => $r->input('girl_memo63'),
            'girl_memo64' => $r->input('girl_memo64'),

            'new_flg' => $r->input('new_flg'),
            'quit_flg' => $r->input('quit_flg'),
//                'girl_flg' => ,
            'img_path' => ConstantHelper::$IMG_PATH,
//                'client_folder' => ,

            'girl_memo19' => $r->girl_memo19,
            'girl_memo70' => $r->girl_memo70,
            'girl_memo71' => $r->girl_memo71,
            'girl_memo72' => 0,
            'girl_memo73' => $r->girl_memo73,
//                'girl_memo74' => ,
            'girl_memo75' => $r->girl_memo75,
//                'girl_memo65' => ,
            'girl_memo66' => $r->girl_memo66,
            'girl_memo67' => $r->girl_memo67,

            'girl_memo68' => $r->girl_memo68,
            'girl_memo69' => $r->girl_memo69,
            'girl_memo37' => $r->girl_memo37,
            'girl_memo36' => $r->input('girl_memo36'),

            'rireki_flg' => 0,
            'rireki_title' => '',
            'rireki_detail' => '',
        ];
        $array_check_name = [
            'checkAjax' => 1,
            'name' => $r->input('name'),
        ];
        $pathGirlLogin = ConstantHelper::$DOMAIN_GIRL.ConstantHelper::$CHECK_NAME_GIRL;
        $result = $api->checkNameGirl($pathGirlLogin, $array_check_name);
        $result = substr($result,15, 1);
        if ($result == 0) {
            $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_INSERT;
            $api->getListUser($pathHpLogin, $array);
            $r->session()->flash('success', '追加できました。');
        }else{
            $r->session()->flash('fail', 'その名前は使われています。');
            return redirect('home/add');
        }
        return redirect('/');
    }

    public function detailGirl(Request $request){
        $girl_cd = $request->id;

        $array = [
            'girl_cd' => $girl_cd,
            'client_cd' => Auth::user()->client_cd,
            'img_path' => ConstantHelper::$IMG_PATH
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_DETAIL;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.girl.girl_detail')->with(['r' => $request, 'data' => $api_result]);
    }

    public function update1(Request $request){
        $client_cd = Auth::user()->client_cd;
        $girl_cd = $request->input('girl_cd');
        $girl_name = $request->input('name');
        $girl_mail = $request->input('mail');
        $age = $request->input('age');
        $height = $request->input('height');
        $girl_bust = $request->input('girl_bust');
        $girl_cup = $request->input('girl_cup');
        $girl_west = $request->input('girl_west');
        $girl_hip = $request->input('girl_hip');
        $girl_join_date = $request->input('join_date');
        $girl_memo5 = $request->input('quit_date');
        $girl_memo4 = $request->girl_memo4;
        $girl_memo34 = $request->girl_memo34;
        $girl_memo1 = $request->input('girl_memo1');
        $girl_memo2 = $request->input('girl_memo2');
        $girl_memo9 = $request->input('girl_memo9');
        $girl_memo7 = $request->girl_memo7;
        $girl_memo37 = $request->girl_memo37;
        $array = [
            'girl_cd' => $girl_cd,
            'client_cd' => $client_cd,
            'girl_name' => $girl_name,
            'girl_tel' => $request->input('tel_girl'),
            'girl_mail' => $girl_mail,
            'age' => $age,
            'girl_height' => $height,
            'girl_bust' => $girl_bust,
            'girl_cup' => $girl_cup,
            'girl_west' => $girl_west,
            'girl_hip' => $girl_hip,
            'girl_join_date' => $girl_join_date,
            'girl_memo1' => $girl_memo1,
            'girl_memo2' => $girl_memo2,
            'girl_memo4' => $girl_memo4,
            'girl_memo5' => $girl_memo5,
            'girl_memo7' => $girl_memo7,
            'girl_memo9' => $girl_memo9,
            'girl_memo34' => $girl_memo34,
            'girl_memo37' => $girl_memo37,
        ];
        $array_check_name = [
            'checkAjax' => 1,
            'name' => $girl_name
        ];
        $api = new apiControllers();
        $pathGirlLogin = ConstantHelper::$DOMAIN_GIRL.ConstantHelper::$CHECK_NAME_GIRL;
        $result = $api->checkNameGirl($pathGirlLogin, $array_check_name);
        $result = substr($result,15, 1);
        if ($result == 0) {
            $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_UPDATE;
            $api->getListUser($pathHpLogin, $array);

        }else{
            $request->session()->flash('fail', 'その名前は使われています。');
            return redirect('home/detail/'.$girl_cd);
        }
        return redirect('home/detail/'.$girl_cd);
    }



    public function updateArea(Request $request){
        $client_cd = Auth::user()->client_cd;
        $girl_cd = $request->input('girl_cd');
        $girl_memo60 = $request->input('girl_memo60');
        $girl_memo61 = $request->input('girl_memo61');
        $girl_memo62 = $request->input('girl_memo62');
        $girl_memo63 = $request->input('girl_memo63');
        $girl_memo64 = $request->input('girl_memo64');
        $array = [
            'girl_cd' => $girl_cd,
            'client_cd' => $client_cd,
            'girl_memo60' => $girl_memo60,
            'girl_memo61' => $girl_memo61,
            'girl_memo62' => $girl_memo62,
            'girl_memo63' => $girl_memo63,
            'girl_memo64' => $girl_memo64,
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_UPDATE_AREA;
        $api->getListUser($pathHpLogin, $array);
        return redirect('home/detail/' . $girl_cd);
    }

    public function update2(Request $request){
        $client_cd = Auth::user()->client_cd;
        $girl_cd = $request->input('girl_cd');
        $girl_memo60 = $request->input('girl_memo60');
        $girl_memo61 = $request->input('girl_memo61');
        $girl_memo62 = $request->input('girl_memo62');
        $girl_memo63 = $request->input('girl_memo63');
        $girl_memo64 = $request->input('girl_memo64');
        $array = [
            'girl_cd' => $girl_cd,
            'client_cd' => $client_cd,
            'girl_memo60' => $girl_memo60,
            'girl_memo61' => $girl_memo61,
            'girl_memo62' => $girl_memo62,
            'girl_memo63' => $girl_memo63,
            'girl_memo64' => $girl_memo64,
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_UPDATE2;
        $api->getListUser($pathHpLogin, $array);
        return redirect('home/detail/' . $girl_cd);
    }

    public function update4(Request $request){
        $client_cd = Auth::user()->client_cd;
        $girl_cd = $request->input('girl_cd');
        $girl_memo40 = $request->input('girl_memo40');
        $girl_memo41 = $request->input('girl_memo41');
        $girl_memo42 = $request->input('girl_memo42');
        $girl_memo43 = $request->input('girl_memo43');
        $girl_memo44 = $request->input('girl_memo44');
        $girl_memo45 = $request->input('girl_memo45');
        $girl_memo46 = $request->input('girl_memo46');
        $girl_memo47 = $request->input('girl_memo47');
        $girl_memo48 = $request->input('girl_memo48');
        $girl_memo49 = $request->input('girl_memo49');
        $array = [
            'girl_cd' => $girl_cd,
            'client_cd' => $client_cd,
            'girl_memo40' => $girl_memo40,
            'girl_memo41' => $girl_memo41,
            'girl_memo42' => $girl_memo42,
            'girl_memo43' => $girl_memo43,
            'girl_memo44' => $girl_memo44,
            'girl_memo45' => $girl_memo45,
            'girl_memo46' => $girl_memo46,
            'girl_memo47' => $girl_memo47,
            'girl_memo48' => $girl_memo48,
            'girl_memo49' => $girl_memo49
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_UPDATE4;
        $api->getListUser($pathHpLogin, $array);
        return redirect('home/detail/' . $girl_cd);
    }

    public function update5(Request $request){
        $client_cd = Auth::user()->client_cd;
        $girl_cd = $request->input('girl_cd');
        $girl_memo50 = $request->input('girl_memo50');
        $girl_memo51 = $request->input('girl_memo51');
        $girl_memo52 = $request->input('girl_memo52');
        $girl_memo53 = $request->input('girl_memo53');
        $girl_memo54 = $request->input('girl_memo54');
        $girl_memo55 = $request->input('girl_memo55');
        $girl_memo56 = $request->input('girl_memo56');
        $girl_memo57 = $request->input('girl_memo57');
        $girl_memo58 = $request->input('girl_memo58');
        $girl_memo59 = $request->input('girl_memo59');
        $array = [
            'girl_cd' => $girl_cd,
            'client_cd' => $client_cd,
            'girl_memo50' => $girl_memo50,
            'girl_memo51' => $girl_memo51,
            'girl_memo52' => $girl_memo52,
            'girl_memo53' => $girl_memo53,
            'girl_memo54' => $girl_memo54,
            'girl_memo55' => $girl_memo55,
            'girl_memo56' => $girl_memo56,
            'girl_memo57' => $girl_memo57,
            'girl_memo58' => $girl_memo58,
            'girl_memo59' => $girl_memo59
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_UPDATE5;
        $api->getListUser($pathHpLogin, $array);
        return redirect('home/detail/' . $girl_cd);
    }

    public function update3(Request $request){
        $client_cd = Auth::user()->client_cd;
        $girl_cd = $request->input('girl_cd');
        $girl_memo20 = $request->input('girl_memo20');
        $girl_memo21 = $request->input('girl_memo21');
        $girl_memo22 = $request->input('girl_memo22');
        $girl_memo23 = $request->input('girl_memo23');
        $girl_memo24 = $request->input('girl_memo24');
        $girl_memo25 = $request->input('girl_memo25');
        $girl_memo26 = $request->input('girl_memo26');
        $girl_memo27 = $request->input('girl_memo27');
        $girl_memo28 = $request->input('girl_memo28');
        $girl_memo29 = $request->input('girl_memo29');
        $array = [
            'girl_cd' => $girl_cd,
            'client_cd' => $client_cd,
            'girl_memo50' => $girl_memo20,
            'girl_memo51' => $girl_memo21,
            'girl_memo52' => $girl_memo22,
            'girl_memo53' => $girl_memo23,
            'girl_memo54' => $girl_memo24,
            'girl_memo55' => $girl_memo25,
            'girl_memo56' => $girl_memo26,
            'girl_memo57' => $girl_memo27,
            'girl_memo58' => $girl_memo28,
            'girl_memo59' => $girl_memo29
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_UPDATE3;
        $api->getListUser($pathHpLogin, $array);
        return redirect('home/detail/' . $girl_cd);
    }

    public function girlImg(Request $request)
    {
        $api = new apiControllers();
        $girl_cd = $request->id;
        $array = [
            'img_path' => ConstantHelper::$IMG_PATH,
            'girl_cd' => $girl_cd
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SHOW_PIC;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.girl.girl_img')->with(['r' => $request, 'data' => $api_result]);
    }

    public function uploadImg(Request $request)
    {
        $api = new apiControllers();
        $girl_cd = $request->input('girl_cd');
        for ($i = 1; $i <= 5; $i++) {
            if (!empty($_FILES['upload_img_'.$i]) && $_FILES['upload_img_'.$i]['tmp_name'] != null)  {
                if (!file_exists("./img/img_girl/{$girl_cd}")) {
                    mkdir("./img/img_girl/{$girl_cd}", 0777, true);
                }
                $picture_name = $i.".jpg";
                move_uploaded_file($_FILES['upload_img_' . $i]['tmp_name'], "./img/img_girl/{$girl_cd}/{$picture_name}");
                $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_UPLOAD_PIC;
                $directory_img="img_girl";
                $array = [
                    'pic_no' => $i,
                    'girl_cd' => $girl_cd
                ];
                $api->callApiFile($pathHpLogin,$array,$picture_name,$directory_img, $girl_cd);
            }
        }
        return redirect('/home/girl_img/' . $girl_cd);
    }

    public function deleteImg(Request $request){
        $picture_no = $_GET['pic_no'];
        $girl_cd = $request->id;
        $array = [
            'pic_no' => $picture_no,
            'girl_cd' => $girl_cd
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_DELETE_PIC;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/home/girl_img/' . $girl_cd);
    }

    public function girlDiary(Request $request)
    {
        $api = new apiControllers();
        $girl_cd = $request->id;
        $client_cd = Auth::user()->client_cd;
        $array = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH,
            'diary_text3' => $girl_cd
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_DIARY;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.girl.girl_diary')->with(['r' => $request, 'data' => $api_result]);
    }

    public function girlDiaryContents(Request $request)
    {
        $api = new apiControllers();
        $girl_cd = $_REQUEST['id'];
        $client_cd = Auth::user()->client_cd;
        $array = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH,
            'diary_text3' => $girl_cd
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_DIARY;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.girl.girl_diary_contents')->with(['r' => $request, 'data' => $api_result]);
    }

    public function girlDiaryUpdate(Request $request)
    {
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $girl_cd = $request->input('girl_cd');
        $diary_cd = $request->input('diary_cd');
        $diary_text2 = $request->diary_text2;
        $array = [
            'client_cd' => $client_cd,
            'diary_text2' => $diary_text2,
            'diary_text3' => $girl_cd,
            'diary_cd' => $diary_cd
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_DIARY_UPDATE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/home/girl_diary/' . $girl_cd);
    }

    public function girlShowImg(Request $request)
    {
        $api = new apiControllers();
        $girl_cd = $_REQUEST['id'];
        $client_cd = Auth::user()->client_cd;
        $array = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH,
            'diary_text3' => $girl_cd
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_DIARY;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.girl.girl_show_img')->with(['r' => $request, 'data' => $api_result]);
    }

    public function girlYusen(Request $request)
    {
        $girl_cd = $request->id;
        $array = [
            'girl_cd' => $girl_cd,
            'client_cd' => Auth::user()->client_cd,
            'img_path' => ConstantHelper::$IMG_PATH
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_DETAIL;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.girl.girl_yusen')->with(['r' => $request, 'data' => $api_result]);
    }

    public function girlYusenUpdate(Request $request)
    {
        $girl_cd = $request->input('girl_cd');
        $girl_memo78 = $request->girl_memo78;
        $array = [
            'client_cd' => Auth::user()->client_cd,
            'girl_cd' => $girl_cd,
            'girl_memo78' => $girl_memo78
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_YUSEN_UPDATE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/home/girlYusen/' . $girl_cd);
    }

    public function girlSite(Request $request)
    {
        $girl_cd = $request->id;
        $array = [
            'GIRL_CD' => $girl_cd
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SITE;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.girl.girl_site')->with(['r' => $request, 'data' => $api_result]);
    }

    public function girlSiteUpdate(Request $request)
    {
        $girl_cd = $request->input('girl_cd');
        $subject = $request->subject;
        $email = $request->email;
        $array = [
            'siteid' => $request->input('siteid'),
            'girl_cd' => $girl_cd,
            'subject' => $subject,
            'email' => $email
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SITE_UPDATE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/home/girlSite/'. $girl_cd);
    }
    public function girlSiteDelete(Request $request)
    {
        $girl_cd = $request->girl_cd;
        $girl_memo78 = $request->girl_memo78;
        $array = [
            'client_cd' => Auth::user()->client_cd,
            'girl_cd' => $girl_cd,
            'girl_memo78' => $girl_memo78
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SITE_DELETE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/home/girlSite/'. $girl_cd);
    }

    public function girlSiteInfo(Request $request)
    {
        $girl_cd = $request->girl_cd;
        $client_cd = Auth::user()->client_cd;
        $array = [
            'GIRL_CD' => $girl_cd,
            'client_cd' => $client_cd
        ];
        $api = new apiControllers();
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SITE;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.girl.girl_site_info')->with(['r' => $request, 'data' => $api_result]);
    }

}
