<?php
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <section class="content-header">
        <h1>更新</h1>
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
            <form method="post" action="{{url('home/updateUser')}}">
                <div class="box-body">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="user_cd" value="{{$r->id}}">
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">会員番号</label>
                        <label class="form-control input-lg" id="inputTel">{{$r->tel}}</label>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">新しい会員番号</label>
                        <input type="number" class="form-control input-lg" id="inputTel" name="inputTelCof">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputPas" class="control-label">パスワード</label>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="6文字以上の半角英数字記号"><i class="fa fa-question-circle-o"></i>
                        </a>
                        <label class="form-control input-lg" id="inputPas">{{$r->pass}}</label>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputPas" class="control-label">新しいパスワード</label>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="6文字以上の半角英数字記号"><i class="fa fa-question-circle-o"></i>
                        </a>
                        <input type="text" class="form-control input-lg" id="inputPas" name="inputPassCof">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix" style="float: right">
                    <label class="btn-material">
                        <input type="submit" value="保存する" class="btn btn-lg bg-aqua">
                    </label>
                </div>
            </form>
        </div>
    </section>
    @include('messages.error_form')
@endsection
