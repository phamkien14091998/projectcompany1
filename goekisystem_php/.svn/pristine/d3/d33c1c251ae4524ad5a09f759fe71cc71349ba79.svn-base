<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */
$my = $message = $recommend = $operator = $name_girl = '';
if(Request::is('/*') || Request::is('/') ) {
    $my = 'active';
}elseif(Request::is('message/*') || Request::is('message')){
    $message = 'active';
}elseif(Request::is('recommend/*') || Request::is('recommend')){
    $recommend = 'active';
}elseif(Request::is('operator/*') || Request::is('operator')){
    $operator = 'active';
}elseif(Request::is('girl/*') || Request::is('girl')){
    $name_girl = 'active';
}
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{$my}}"><a href="{{url('/')}}"><i class="fa fa-home fa-fw"></i> <span>My改札会員一覧</span></a></li>
            <li class="{{$message}}">
                <a href="{{url('/message')}}">
                    <i class="fa fa-cny fa-fw"></i> <span>赤い系オファー一覧</span>
                </a>
            </li>
            <li class="{{$name_girl}}">
                <a href="{{url('/girl')}}"><i class="fa fa-venus fa-fw"></i> <span>面接担当官オススメ</span></a>
            </li>
            <li class="{{$recommend}}">
                <a href="{{url('/recommend')}}"><i class="fa fa-calendar-plus-o fa-fw"></i> <span>コンシェルジュのイチオシ</span></a>
            </li>
            <li class="{{$operator}}">
                <a href="{{url('/operator')}}"><i class="fa fa-calendar-plus-o fa-fw"></i> <span>コンシェルジュ設定</span></a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>