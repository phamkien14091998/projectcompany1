<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 10/13/2018
 * Time: 10:54 AM
 */
?>
@extends('layouts.index_login')

@section('contents')
    <div class="login-logo">
        <h1>MY ADMIN</h1>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback" style="margin-left: 13px!important;margin-right: 13px!important;">
                <input type="text" name="client_id" value="{{old('client_id')}}" class="form-control input-lg" placeholder="ログインID">
                <span class="fa fa-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback" style="margin-left: 13px!important;margin-right: 13px!important;">
                <input type="password" class="form-control input-lg" name="client_pass" placeholder="パスワード">
                <span class="fa fa-lock form-control-feedback"></span>
            </div>
            <div class="text-center">
                <div class="btn-material">
                    <button type="submit" class="btn btn-lg bg-black" style="background: #04f1ae">ログイン</button>
                </div>
            </div>
        </form>
        <!-- /.login-box-body -->
    </div>
    @include('messages.error_form')
    <!-- /.login-box -->
@endsection

