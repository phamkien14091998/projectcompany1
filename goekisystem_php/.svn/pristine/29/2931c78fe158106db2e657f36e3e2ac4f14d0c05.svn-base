<?php
//print_r($data);die();
//print_r($data_name);die();
?>
@extends('layouts.index')
@section('contents')
    <section class="content-header">
        <h1>更新</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/recommend')}}" class="btn-material">
						<span class="btn btn-sm bg-teal">
							<span>面接担当官のオススメ一覧へ戻る</span>
						</span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>
            @if(!isset($data['item']['serialno']))
                @if(isset($data['item']) && $data['item'])
                    @foreach($data['item'] as $item)
                        @if($r->id == $item['serialno'])
                            <form method="post" action="{{url('girl/update_girl')}}">
                                <div class="box-body">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" name="serialno" value="{{$item['serialno']}}">

                                    <div class="form-group col-xs-12">
                                        <label for="inputName" class="control-label">日付</label>
                                        <input type="text" class="form-control input-lg datepicker" style="position: unset" id="date" name="showdate" value="{{!empty($item['regdate']) ? $item['regdate'] : ''}}" >
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="inputName" class="control-label">エリア</label>
                                        <br>
                                        <br>
                                        <label>
                                            <input type="hidden" name="area_1" value="0">
                                            <input type="checkbox" name="area_1" value="1" {{$item['area_1'] == 'ON' ? 'checked' : ''}}> 西東京
                                        </label>
                                        <label>
                                            <input type="hidden" name="area_2" value="0">
                                            <input type="checkbox" name="area_2" value="1" {{$item['area_2'] == 'ON' ? 'checked' : ''}}> 東京23区
                                        </label>
                                        <label>
                                            <input type="hidden" name="area_3" value="0">
                                            <input type="checkbox" name="area_3" value="1" {{$item['area_3'] == 'ON' ? 'checked' : ''}}> 千葉
                                        </label>
                                        <label>
                                            <input type="hidden" name="area_4" value="0">
                                            <input type="checkbox" name="area_4" value="1" {{$item['area_4'] == 'ON' ? 'checked' : ''}}> 埼玉
                                        </label>
                                        <label>
                                            <input type="hidden" name="area_5" value="0">
                                            <input type="checkbox" name="area_5" value="1" {{$item['area_5'] == 'ON' ? 'checked' : ''}}> 神奈川
                                        </label>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="inputName" class="control-label">女性</label>
                                        <select class="form-control input-lg list-girl" name="girl_cd" style="padding-bottom: 0px !important;">
                                            @if(isset($data_name) && $data_name)
                                                @foreach($data_name['item'] as $value)
                                                    <option id="girl-name" value="{{$value['girl_cd']}}" {{$value['girl_cd'] == $r->girl_cd ? 'selected' : ''}}>{{$value['girl_name']}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="inputMsg" class="control-label">コメント</label>
                                        <textarea class="form-control input-lg" id="msg" name="msg" style="height: 200px">{{!empty($item['memo']) ? $item['memo'] : ''}}</textarea>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix" style="float: right">
                                    <label class="btn-material">
                                        <input type="submit" value="保存する" class="btn btn-lg bg-aqua">
                                    </label>
                                </div>
                            </form>
                        @endif
                    @endforeach
                @endif
                @else
                    @if($r->id == $data['item']['serialno'])
                        <form method="post" action="{{url('girl/update_girl')}}">
                            <div class="box-body">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="serialno" value="{{$data['item']['serialno']}}">

                                <div class="form-group col-xs-12">
                                    <label for="inputName" class="control-label">日付</label>
                                    <input type="text" class="form-control input-lg datepicker" style="position: unset" id="date" name="showdate" value="{{!empty($data['item']['regdate']) ? $data['item']['regdate'] : ''}}" >
                                </div>
                                <div class="form-group col-xs-12">
                                    <label for="inputName" class="control-label">エリア</label>
                                    <br>
                                    <br>
                                    <label>
                                        <input type="hidden" name="area_1" value="0">
                                        <input type="checkbox" name="area_1" value="1" {{$data['item']['area_1'] == 'ON' ? 'checked' : ''}}> 西東京
                                    </label>
                                    <label>
                                        <input type="hidden" name="area_2" value="0">
                                        <input type="checkbox" name="area_2" value="1" {{$data['item']['area_2'] == 'ON' ? 'checked' : ''}}> 東京23区
                                    </label>
                                    <label>
                                        <input type="hidden" name="area_3" value="0">
                                        <input type="checkbox" name="area_3" value="1" {{$data['item']['area_3'] == 'ON' ? 'checked' : ''}}> 千葉
                                    </label>
                                    <label>
                                        <input type="hidden" name="area_4" value="0">
                                        <input type="checkbox" name="area_4" value="1" {{$data['item']['area_4'] == 'ON' ? 'checked' : ''}}> 埼玉
                                    </label>
                                    <label>
                                        <input type="hidden" name="area_5" value="0">
                                        <input type="checkbox" name="area_5" value="1" {{$data['item']['area_5'] == 'ON' ? 'checked' : ''}}> 神奈川
                                    </label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label for="inputName" class="control-label">女性</label>
                                    <select class="form-control input-lg list-girl" name="girl_cd">
                                        @if(isset($data_name) && $data_name)
                                            @foreach($data_name['item'] as $value)
                                                <option id="girl-name" value="{{$value['girl_cd']}}" {{$value['girl_cd'] == $r->girl_cd ? 'selected' : ''}}>{{$value['girl_name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label for="inputMsg" class="control-label">コメント</label>
                                    <textarea class="form-control input-lg" id="msg" name="msg" style="height: 200px">{{!empty($data['item']['memo']) ? $data['item']['memo'] : ''}}</textarea>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix" style="float: right">
                                <label class="btn-material">
                                    <input type="submit" value="保存する" class="btn btn-lg bg-aqua">
                                </label>
                            </div>
                        </form>
                    @endif
                @endif
        </div>
    </section>
    <style>
        .selected {
            background-color:#FA5858 !important;
        }
    </style>
    @include('messages.error_form')
@endsection
