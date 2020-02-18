<?php
//print_r($data_name);die();
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
            @if(isset($data['item']) && $data['item'])
                @foreach($data['item'] as $item)
                    @if($r->id == $item['newinfo_cd'])
                        <form method="post" action="{{url('newInfo/update')}}">
                            <div class="box-body">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="newinfo_cd" value="{{$item['newinfo_cd']}}">
                                <input type="hidden" name="girl_cd" value="{{$data_name['item']['0']['girl_cd']}}">

                                <label class="control-label" style="padding-left: 15px;">時間:</label><br>
                                <div class="form-group col-xs-12" style="display: flex; padding-top: 20px;">
                                    <input type="text" class="name_girl" name="year" value="{{substr($item['newinfo_date'],0,4)}}">
                                    <label class="control-label">年</label>
                                    <input type="text" class="name_girl" name="month" value="{{substr($item['newinfo_date'],5,2)}}">
                                    <label class="control-label">月</label>
                                    <input type="text" class="name_girl" name="date" value="{{substr($item['newinfo_date'],8,2)}}">
                                    <label class="control-label">日</label>
                                    <input type="text" class="name_girl" name="hour" value="{{substr($item['newinfo_date'],11,2)}}">
                                    <label class="control-label">時</label>
                                    <input type="text" class="name_girl" name="minute" value="{{substr($item['newinfo_date'],14,2)}}">
                                    <label class="control-label">分</label>
                                    <input type="text" class="name_girl" name="second" value="{{substr($item['newinfo_date'],17,2)}}">
                                    <label class="control-label">秒</label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">タイトル</label>
                                    <input type="text" class="form-control input-lg" name="title" value="{{!empty($item['newinfo_title']) ? $item['newinfo_title'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">本文</label>
                                    <textarea type="text" style="height: 200px" class="form-control input-lg" name="detail">{{!empty($item['newinfo_detail']) ? $item['newinfo_detail'] : ''}}</textarea>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label" style="padding-right: 20px">女の子の画像表示:</label>
                                    <input type="hidden" name="status" value="0">
                                    <input type="checkbox" id="status_flg" name="status" value="{{$item['newinfo_flg']}}" {{$item['newinfo_flg'] == 1 ? 'checked' : ''}}>画像表示ON/OFF
                                </div>
                                @if($item['newinfo_flg'] == 1)
                                <div class="form-group col-xs-12" id="list_girl_name">
                                    <select name="girl_cd" class="form-control input-lg">
                                        @foreach($data_name['item'] as $row)
                                        <option value="{{$row['girl_cd']}}" {{$row['girl_cd'] == $item['girl_cd'] ? 'selected' : ''}}>{{$row['girl_name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @else
                                <div class="form-group col-xs-12" id="list_girl_name" style="display: none">
                                    <select name="girl_cd" class="form-control input-lg">
                                        @foreach($data_name['item'] as $row)
                                            <option value="{{$row['girl_cd']}}" {{$row['girl_cd'] == $item['girl_cd'] ? 'selected' : ''}}>{{$row['girl_name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif
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
        </div>
    </section>
    @include('messages.error_form')
@endsection
