<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */

$user = \Illuminate\Support\Facades\Auth::user();
  $tree_home = $revenue = $daily_statistic = $employee_manage= $account_manage = $fetiminity ='';

if(Request::is('revenue/*') || Request::is('revenue')) {
    $revenue = 'active';
}
elseif(Request::is('daily_statistic/*') || Request::is('daily_statistic')) {
    $daily_statistic = 'active';
}
elseif(Request::is('employee_manage/*') || Request::is('employee_manage')) {
    $employee_manage = 'active';
}
elseif(Request::is('account_manage/*') || Request::is('account_manage')) {
    $account_manage = 'active';
}
elseif(Request::is('fetiminity/*') || Request::is('fetiminity')) {
    $fetiminity = 'active';
}

else {
    $tree_home = 'active';
}
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image thumbnail-circle thumbnail-circle-sm">
{{--                <img src="{{asset('upload/'.$user->image_name)}}" alt="{{$user->client_name}}">--}}
            </div>
            <div class="pull-left info">
{{--                <p>{{$user->client_name}}</p>--}}
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
            <li class="{{$revenue}}"><a href="{{url('revenue/')}}"><span>売上表</span></a></li>
            <li class="{{$daily_statistic}}"><a href="{{url('daily_statistic/')}}"><span>日別売上表</span></a></li>
            <li class="{{$employee_manage}}"><a href="{{url('employee_manage/')}}"><span>スタッフカウント管理</span></a></li>
            <li class="{{$fetiminity}}"><a href="{{url('fetiminity/')}}"><span>フェチミニティ</span></a></li>
            <li class="{{$account_manage}}"><a href="{{url('account_manage/')}}"><span>店舗アカウント管理</span></a></li>

        </ul>
    </section>
</aside>
