<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    @include('layouts.head')
    @yield('additional')
</head>
<body class="hold-transition sidebar-mini fixed">

<div class="wrapper">
    <!-- Main Header -->
    @include('layouts.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.sidebar')

    @yield('modal')
    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
</body>

</html>
@include('layouts.footer')