<?php
//print_r($data_name);die();
$day = date('Y-m-d H:i:s');
$year = substr($day, 0, 4);
$month = substr($day, 5, 2);
$date = substr($day, 8, 2);
$hour = substr($day, 11, 2);
$minute = substr($day, 14, 2);
$second = substr($day, 17, 2);
?>
@extends('layouts.index')
@section('contents')
    <style>
        .name_girl{
            width: 70px;
        }
    </style>
    <section class="content-header">
        <h1>更新</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/newInfo')}}" class="btn-material">
						<span class="btn btn-sm bg-teal">
							<span>最新情報へ戻る</span>
						</span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>
            <form method="post" action="{{url('newInfo/add_new')}}">
                <div class="box-body">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="girl_cd" value="{{$data['item']['0']['girl_cd']}}">

                    <label class="control-label">時間:</label><br>
                    <div class="form-group col-xs-12" style="display: flex; padding-top: 20px;">
                        <input type="text" class="name_girl" name="year" value="{{$year}}">
                        <label class="control-label">年</label>
                        <input type="text" class="name_girl" name="month" value="{{$month}}">
                        <label class="control-label">月</label>
                        <input type="text" class="name_girl" name="date" value="{{$date}}">
                        <label class="control-label">日</label>
                        <input type="text" class="name_girl" name="hour" value="{{$hour}}">
                        <label class="control-label">時</label>
                        <input type="text" class="name_girl" name="minute" value="{{$minute}}">
                        <label class="control-label">分</label>
                        <input type="text" class="name_girl" name="second" value="{{$second}}">
                        <label class="control-label">秒</label>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="control-label">タイトル</label>
                        <input type="text" class="form-control input-lg" name="title">
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="control-label">本文</label>
                        <textarea type="text" style="height: 200px" class="form-control input-lg" name="detail"></textarea>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="control-label" style="padding-right: 20px">女の子の画像表示:</label>
                        <input type="hidden" name="status" value="0">
                        <input type="checkbox" id="status_flg" name="status" value="1" checked>画像表示ON/OFF
                    </div>
                    <div class="form-group col-xs-12" id="list_girl_name" style="display: block">
                        <select name="girl_cd" class="form-control input-lg">
                            @foreach($data['item'] as $row)
                                <option value="{{$row['girl_cd']}}">{{$row['girl_name']}}</option>
                            @endforeach
                        </select>
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
