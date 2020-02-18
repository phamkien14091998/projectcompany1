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
        <h1>お客様の声</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/manageVoice')}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>お客様の声へ戻る</span>
                </span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>
            <form method="post" action="{{url('manageVoice/add_girl')}}">
                <div class="box-body">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <label class="control-label" style="padding-left: 15px;">時間:</label><br>
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
                        <label class="control-label">エリア</label>
                        <select name="client_cd" class="form-control input-lg">
                            <option value="1">西東京</option>
                            <option value="7">東京23区</option>
                            <option value="5">千葉</option>
                            <option value="6">埼玉</option>
                            <option value="8">神奈川</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-12" id="list_girl_name">
                        <label class="control-label">女の子</label>
                        <select name="girl_cd" class="form-control input-lg">
                            @foreach($data_name['item'] as $row)
                                <option value="{{$row['girl_cd']}}">{{$row['girl_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="control-label">タイトル</label>
                        <input type="text" class="form-control input-lg" name="voice_text1">
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="control-label">お客様の名前</label>
                        <input type="text" class="form-control input-lg" name="voice_text4">
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="control-label">本文</label>
                        <textarea type="text" style="height: 200px" class="form-control input-lg" name="voice_text2"></textarea>
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
