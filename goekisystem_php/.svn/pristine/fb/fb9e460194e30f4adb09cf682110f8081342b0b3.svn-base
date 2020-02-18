<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */
$hp = $imgArea = $syukin_week = $new_info = $mobile_pickup = $manage_voice = $ranking = $option = '';
if(Request::is('home/*') || Request::is('home') || Request::is('/*')) {
    $hp = 'active';
}elseif(Request::is('imgArea/*') || Request::is('imgArea')){
    $message = 'active';
}elseif(Request::is('syukinWeek/*') || Request::is('syukinWeek')){
    $syukin_week = 'active';
}elseif(Request::is('newInfo/*') || Request::is('newInfo')){
    $new_info = 'active';
}elseif(Request::is('mobilePickup/*') || Request::is('mobilePickup')){
    $mobile_pickup = 'active';
}elseif(Request::is('manageVoice/*') || Request::is('manageVoice')){
    $manage_voice = 'active';
}elseif(Request::is('ranking/*') || Request::is('ranking')){
    $ranking = 'active';
}elseif(Request::is('option/*') || Request::is('option')){
    $option = 'active';
}
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{$hp}}"><a href="{{url('/')}}"><i class="fa fa-home fa-fw"></i> <span>在籍女性</span></a></li>
            <li class="{{$imgArea}}">
                <a href="{{url('/imgArea')}}">
                    <i class="fa fa-cny fa-fw"></i> <span>在籍女性MINI</span>
                </a>
            </li>
            <li class="{{$syukin_week}}">
                <a href="{{url('/syukinWeek')}}"><i class="fa fa-venus fa-fw"></i> <span>出勤情報</span></a>
            </li>
            <li class="{{$new_info}}">
                <a href="{{url('/newInfo')}}"><i class="fa fa-info fa-fw"></i> <span>最新情報</span></a>
            </li>
            <li class="{{$mobile_pickup}}">
                <a href="{{url('/mobilePickup')}}"><i class="fa fa-calendar-plus-o fa-fw"></i> <span>ピックアップ</span></a>
            </li>
            <li class="{{$manage_voice}}">
                <a href="{{url('/manageVoice')}}"><i class="fa fa-calendar-plus-o fa-fw"></i> <span>お客様の声</span></a>
            </li>
            <li class="{{$ranking}}">
                <a href="{{url('/ranking')}}"><i class="fa fa-calendar-plus-o fa-fw"></i> <span>ランキング</span></a>
            </li>
            <li class="{{$option}}">
                <a href="{{url('/option')}}"><i class="fa fa-calendar-plus-o fa-fw"></i> <span>項目設定</span></a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>