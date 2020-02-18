<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HP - クリポー</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- ホーム画面に追加でiosステータスバーを消す -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    @include('layouts.head')
    @yield('css')
    <script type="text/javascript">
        var laravel_token = "{{csrf_token()}}";
    </script>
</head>

<body class="hold-transition sidebar-mini fixed">
@yield('modal')
<div class="wrapper">
    <!-- Main Header -->
@include('layouts.header')
<!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('messages.error_form')
        @include('messages.message_alert')
        @yield('contents')
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
@include('layouts.footer')
<script src="{{asset('js/app.js?time='.time())}}"></script>
</body>

</html>
