<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */

$user = \Illuminate\Support\Facades\Auth::user();
$tree_home = $tree_member = $tree_noti = $tree_user = $report = $noti_expiredate = $convert = $report_regularly = '';
$member_cre = $member_list  = $noti_list = $noti_cre = $user_list = $user_cre = $page_report = $job_report = $delivery_report = $emergency = $emergency_create ='';
if(Request::is('franchise/*') || Request::is('franchise')) {
    $tree_member = 'active';
    if(Request::is('franchise/create')) {
        $member_cre = 'active';
    }
    else {
        $member_list = 'active';
    }
}
else if(Request::is('notify/*') || Request::is('notify')) {
    $tree_noti = 'active';
    if(Request::is('notify/create')) {
        $noti_cre = 'active';
    }
    else if(Request::is('notify/emergency')){
        $emergency = 'active';
    }
    else if(Request::is('notify/create-emergency')){
        $emergency_create = 'active';
    }
    else {
        $noti_list = 'active';
    }
}
else if((Request::is('user/*') || Request::is('user'))&& (!Request::is('user/top-15'))) {
    if(Request::is('user/create')) {
        $user_cre = 'active';
        $tree_user = 'active';
    }
    else if (Request::is('user/convert')) {
        $convert = 'active';
    }
    else {
        $tree_user = 'active';
        $user_list = 'active';
    }
}
else if(Request::is('user/top-15')){
    $top15 = 'active';
}
else if(Request::is('report/send_noti')) {
    $noti_expiredate = 'active';
}
else if((Request::is('report/*') || Request::is('report')) && !Request::is('report/reportRegularly')) {
    $report = 'active';
    if(Request::is('report/job/*') || Request::is('report/job')) {
        $job_report = 'active';
    }
    else if(Request::is('report/delivery/*') || Request::is('report/delivery')){
        $delivery_report = 'active';
    }
    else {
        $page_report = 'active';
    }
}
else if (Request::is('report/reportRegularly')) {
    $report_regularly = 'active';
}
else {
    $tree_home = 'active';
}
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image thumbnail-circle thumbnail-circle-sm">
                <img src="{{asset('upload/'.$user->image_name)}}" alt="{{$user->client_name}}">
            </div>
            <div class="pull-left info">
                <p>{{$user->client_name}}</p>
            </div>
        </div>
        <!-- search form (Optional) -->
        {{--<form action="{{url('user')}}" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="text" name="key" value="{{Request::has('key') ? Request::get('key'):''}}" class="form-control" placeholder="検索...">
                <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
            </div>
        </form>--}}

        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{$tree_home}}"><a href="{{url('home/')}}"><i class="fa fa-home fa-fw"></i> <span>ホーム</span></a></li>
            <li class="treeview {{$top15}}">
                <a href="#">
                     <span>オフィシャル関連</span>
                    <span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$top15}}"><a href="{{url('user/top-15')}}"><i class="fa"></i>神TOP15</a></li>
                </ul>
            </li>
            <li class="treeview {{$tree_member}}">
                <a href="#">
                    <i class="fa fa-sitemap fa-fw"></i> <span>パートナー</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$member_list}}"><a href="{{url('franchise/')}}"><i class="fa"></i>パートナー覧</a></li>
                    <li class="{{$member_cre}}"><a href="{{url('franchise/create')}}"><i class="fa"></i>パートナー登録 </a></li>

                </ul>
            </li>
            <li class="treeview {{$tree_noti}}">
                <a href="#">
                    <i class="fa fa-info fa-fw"></i> <span>本部からのお知らせ</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$noti_list}}"><a href="{{url('notify')}}"><i class="fa"></i>本部からのお知らせ一覧</a></li>
                    <li class="{{$noti_cre}}"><a href="{{url('notify/create')}}"><i class="fa"></i>本部からのお知らせ作成</a></li>
                    <li class="{{$emergency}}"><a href="{{url('notify/emergency')}}"><i class="fa"></i>本部からのトラブル報告一覧</a></li>
                    <li class="{{$emergency_create}}"><a href="{{url('notify/create-emergency')}}"><i class="fa"></i>本部からのトラブル報告一覧</a></li>
                </ul>
            </li>
            @if($user->client_level == 1)
            <li class="treeview {{$tree_user}}">
                <a href="#">
                    <i class="fa fa-users fa-fw"></i> <span>スタッフアカウント</span>
                    <span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$user_list}}"><a href="{{url('user')}}"><i class="fa"></i>スタッフアカウント一覧</a></li>
                    <li class="{{$user_cre}}"><a href="{{url('user/create')}}"><i class="fa"></i>スタッフアカウント作成</a></li>
                </ul>
            </li>
            @endif
            <?php /*<li class="{{$noti_expiredate}}">
                <a href="{{url('report/send_noti')}}">
                    <i class="fa fa-home fa-fw"></i>
                    <span>お知らせメール（期限切れ）</span>
                </a>
            </li> */ ?>
            <li class="treeview {{$report}}">
                <a href="#">
                    <i class="fa fa-sitemap fa-fw"></i> <span>女性：レポート
</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$page_report}}"><a href="{{url('report/')}}"><i class="fa"></i>登録レポート </a></li>
                    <li class="{{$job_report}}"><a href="{{url('report/job')}}"><i class="fa"></i>お仕事レポート</a></li>
                    <li class="{{$delivery_report}}"><a href="{{url('report/delivery')}}"><i class="fa"></i>お客様レポート</a></li>
                </ul>
            </li>
            <li class="{{$convert}}">
                <a href="{{url('user/convert')}}">
                    在籍移動
                </a>
            </li>
            <li>
                <a href="{{url('home/ngkeywork')}}">
                    NGワード
                </a>
            </li>
            <li class="{{$report_regularly}}">
                <a href="{{url('report/reportRegularly')}}">
                    定例報告
                </a>
            </li>
        </ul>
    </section>
</aside>
