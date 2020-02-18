<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ログイン | 改札劇場 EX管理画面</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- ホーム画面に追加でiosステータスバーを消す -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- favicon系 -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="192x192" href="{{asset('img/touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/touch-icon.png')}}">
    <!-- common.css -->
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 3 -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

</head>
<body class="hold-transition login-page">
<div class="login-wrap">
    <div class="login-logo">
        <h1>改札劇場 EX管理画面</h1>
    </div>
    <div class="login-box-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="text" name="client_tel" value="{{old('client_tel')}}" class="form-control input-lg" placeholder="ログインID">
                <span class="fa fa-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control input-lg" name="client_user_pass" placeholder="パスワード">
                <span class="fa fa-lock form-control-feedback"></span>
            </div>
            <div class="text-center">
                <div class="btn-material">
                    <button type="submit" class="btn btn-lg bg-black">ログイン</button>
                </div>
            </div>
        </form>
    </div>
    @yield('content')
</div>
</body>

</html>
