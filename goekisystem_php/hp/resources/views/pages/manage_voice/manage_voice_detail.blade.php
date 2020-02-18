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
            @if(isset($data['item']) && $data['item'])
                @foreach($data['item'] as $item)
                    @if($r->id == $item['girl_cd'] && $_GET['girl_name'] = $item['girl_name'] && $_GET['user_name'] == $item['voice_text4'] && $_GET['voice_date'] == $item['voice_date'])
                        <form method="post" action="{{url('manageVoice/update')}}">
                            <div class="box-body">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="original_girl_cd" value="{{$item['girl_cd']}}">
                                <input type="hidden" name="original_client_cd" value="{{$_GET['client_cd']}}">
                                <input type="hidden" name="original_voice_date" value="{{$item['voice_date']}}">

                                <label class="control-label">時間:</label><br>
                                <div class="form-group col-xs-12" style="display: flex; padding-top: 20px;">
                                    <input type="text" class="name_girl" name="year" value="{{substr($item['voice_date'],0,4)}}">
                                    <label class="control-label">年</label>
                                    <input type="text" class="name_girl" name="month" value="{{substr($item['voice_date'],5,2)}}">
                                    <label class="control-label">月</label>
                                    <input type="text" class="name_girl" name="date" value="{{substr($item['voice_date'],8,2)}}">
                                    <label class="control-label">日</label>
                                    <input type="text" class="name_girl" name="hour" value="{{substr($item['voice_date'],11,2)}}">
                                    <label class="control-label">時</label>
                                    <input type="text" class="name_girl" name="minute" value="{{substr($item['voice_date'],14,2)}}">
                                    <label class="control-label">分</label>
                                    <input type="text" class="name_girl" name="second" value="{{substr($item['voice_date'],17,2)}}">
                                    <label class="control-label">秒</label>
                                </div>
                                <div class="form-group col-xs-12" id="list_girl_name">
                                    <label class="control-label">女の子</label>
                                    <select name="girl_cd" class="form-control input-lg">
                                        @foreach($data_name['item'] as $row)
                                            <option value="{{$row['girl_cd']}}" {{$row['girl_cd'] == $item['girl_cd'] ? 'selected' : ''}}>{{$row['girl_name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">タイトル</label>
                                    <input type="text" class="form-control input-lg" name="voice_text1" value="{{!empty($item['voice_text1']) ? $item['voice_text1'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">お客様の名前</label>
                                    <input type="text" class="form-control input-lg" name="voice_text4" value="{{!empty($item['voice_text4']) ? $item['voice_text4'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">本文</label>
                                    <textarea type="text" style="height: 200px" class="form-control input-lg" name="voice_text2">{{!empty($item['voice_text2']) ? $item['voice_text2'] : ''}}</textarea>
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
        </div>
    </section>
    @include('messages.error_form')
@endsection
