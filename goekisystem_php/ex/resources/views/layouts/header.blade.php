<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */
//$user = \Illuminate\Support\Facades\Auth::user();
?>
<header class="main-header">

    <a href="index.html" class="logo">
        <span class="logo-mini">
            <img src="{{asset('img/logo-mini.png')}}">
        </span>
        <span class="logo-lg">
            <img src="{{asset('img/logo.png')}}">
            <span class="logo-badge">EX</span>
        </span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="hidden-xs">MENU</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="current-time">
                    <i class="fa fa-clock-o fa-fw"></i>
{{--                    {{substr($user->last_login, 11, 5)}}--}}
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="thumbnail-circle user-image">
                            <img src="{{asset('upload/'.$user->image_name)}}" alt="{{$user->client_name}}">
                        </span>
{{--                        <span class="hidden-xs">{{$user->client_name}}</span>--}}
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <div class="thumbnail-circle">
{{--                                <img src="{{asset('upload/'.$user->image_name)}}" alt="{{$user->client_name}}">--}}
                            </div>
{{--                            <p>{{$user->client_name}}</p>--}}
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{url('user/profile')}}" class="btn btn-default">プロフィール</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{url('/logout')}}" class="btn btn-default">ログアウト</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="http://www.go-eki.com/top.php" class="bg-teal" target="_blank">
                        <i class="fa fa-sign-in fa-fw"></i>サイト
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
