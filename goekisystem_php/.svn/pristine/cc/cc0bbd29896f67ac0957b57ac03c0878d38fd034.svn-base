<?php
//print_r($data);die();
header("Content-type: text/html;charset=Shift-JIS");
echo <<<HTML
<style>
@media (max-width: 997px) {
.navbar-custom-menu{
display: none !important;
}
.main-header{
height: 50px !important;
}
}
</style>
HTML;
?>
@extends('layouts.index')
@section('contents')
    <section class="content-header">
        <h1>スタッフ編集</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/')}}" class="btn-material">
						<span class="btn btn-sm bg-teal">
							<span>My改札会員一覧へ戻る</span>
						</span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>
            @if(isset($data) && $data)
                {!! $data !!}
            @endif
        </div>
    </section>
    @include('messages.error_form')
@endsection

