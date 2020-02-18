<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
					<img src="{{url('img/logo-mini.png')}}">
				</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
					<img src="{{url('img/logo.png')}}">
					<span class="logo-badge">金澤FC No.001</span>
				</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="hidden-xs">MENU</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="current-time">
                    <i class="fa fa-clock-o fa-fw"></i> 15:19
                </li>
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <span class="thumbnail-circle user-image">
									<img src="{{url('dist/img/user2-160x160.jpg')}}" alt="User Image">
								</span>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">改札太郎</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <div class="thumbnail-circle">
                                <img src="{{url('dist/img/user2-160x160.jpg')}}" alt="User Image">
                            </div>
                            <p>改札太郎</p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="user-profile.html" class="btn btn-default">プロフィール</a>
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
