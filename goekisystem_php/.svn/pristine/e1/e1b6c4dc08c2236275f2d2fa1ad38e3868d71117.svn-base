<?php
//print_r($data);die();
//print_r($data_name);die();
?>
@extends('layouts.index')
@section('contents')
    <section class="content-header">
        <h1>新規作成</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/girl')}}" class="btn-material">
						<span class="btn btn-sm bg-teal">
							<span>面接担当官オススメへ戻る</span>
						</span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>

            <form method="post" action="{{url('girl/add_girl')}}">
                <div class="box-body">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">日付</label>
                        <input type="text" class="form-control input-lg datepicker" style="position: unset" id="date" name="showdate" >
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">エリア</label>
                        <br>
                        <br>
                        <label>
                            <input type="hidden" name="area_1" value="0">
                            <input type="checkbox" name="area_1" value="1"> 西東京
                        </label>
                        <label>
                            <input type="hidden" name="area_2" value="0">
                            <input type="checkbox" name="area_2" value="1"> 東京23区
                        </label>
                        <label>
                            <input type="hidden" name="area_3" value="0">
                            <input type="checkbox" name="area_3" value="1"> 千葉
                        </label>
                        <label>
                            <input type="hidden" name="area_4" value="0">
                            <input type="checkbox" name="area_4" value="1"> 埼玉
                        </label>
                        <label>
                            <input type="hidden" name="area_5" value="0">
                            <input type="checkbox" name="area_5" value="1"> 神奈川
                        </label>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">女性</label>
                        <select class="form-control input-lg list-girl" name="girl_cd" style="padding-bottom: 0px !important;">
                            @if(isset($data['item']) && $data['item'])
                                @foreach($data['item'] as $value)
                                    <option id="girl-name" value="{{$value['girl_cd']}}">{{$value['girl_name']}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputMsg" class="control-label">コメント</label>
                        <textarea class="form-control input-lg" id="msg" name="msg" style="height: 200px"></textarea>
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
    <style>
        .selected {
            background-color:#FA5858 !important;
        }
    </style>
    @include('messages.error_form')
@endsection
