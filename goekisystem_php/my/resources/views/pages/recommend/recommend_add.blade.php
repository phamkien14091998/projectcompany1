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
            <a href="{{url('/recommend')}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>コンシェルジュのイチオシへ戻る</span>
                </span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix"></div>
            <table>
                <th style="width: 50%;float: left">
                    <form method="post" action="{{url('recommend/add_User')}}">
                        <div class="box-body">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group col-xs-12">
                                <label for="inputName" class="control-label">日付</label>
                                <input type="text" class="form-control input-lg datepicker" style="position: unset" id="date" name="showdate" >
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="inputName" class="control-label">エリア</label>
                                <select class="form-control input-lg area-girl" name="area" style="padding-bottom: 0px !important;">
                                    <option id="area_girl" value="1">西東京</option>
                                    <option id="area_girl" value="7">東京23区</option>
                                    <option id="area_girl" value="5">千葉</option>
                                    <option id="area_girl" value="6">埼玉</option>
                                    <option id="area_girl" value="8">神奈川</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="inputName" class="control-label">女性</label>
                                <select class="form-control input-lg list-girl" name="girl_cd" style="padding-bottom: 0px !important;">
                                    @if(isset($data_name['item']) && $data_name['item'])
                                        @foreach($data_name['item'] as $value)
                                            <option id="girl-name" value="{{$value['girl_cd']}}" selected >{{$value['girl_name']}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="inputName" class="control-label">ユーザー情報</label>
                                <label class="form-control input-lg data-user" id="data-user"></label>
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
                </th>
                <th style="width: 50%; float: right">
                    <div class="col-md-4" style="text-align: center">
                        <form action="{{url('recommend/add')}}" method="get">
                            <div class="input-group input-group-md">
                                <input type="text" name="tel" value="{{$r->tel}}" class="form-control pull-right" placeholder="フリーワードで検索" style="width:200px">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" style="height: 35px"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <br>
                    <div class="box-body">
                        <div class="table-responsive" style="max-height: 700px">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>日付</th>
                                    <th>ニックネーム</th>
                                    <th>会員番号</th>
                                    <th>紹介ポイント</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data['item']) && $data['item'] && !isset($data['item']['tel']))
                                    @foreach($data['item'] as $item)
                                        <tr class="pick-user" data-user="{{$item['user_cd']}}" tel-user="{{$item['tel']}}" id="info-user{{$item['user_cd']}}" style="cursor: pointer;">
                                            <td class="text-left">{{!empty($item['registdate']) ? substr($item['registdate'],0,10) : ''}}</td>
                                            <td class="text-left">{{!empty($item['name']) ? $item['name'] : ''}}</td>
                                            <td class="text-left">{{!empty($item['tel']) ? $item['tel'] : ''}}</td>
                                            <td class="text-left">{{!empty($item['starlevel']) ? $item['starlevel'] : '0'}}</td>
                                        </tr>
                                    @endforeach
                                @elseif(isset($data['item']['tel']))
                                    <tr class="pick-user" data-user="{{$data['item']['user_cd']}}" tel-user="{{$data['item']['tel']}}" id="info-user{{$data['item']['user_cd']}}" style="cursor: pointer;">
                                        <td class="text-left">{{!empty($data['item']['registdate']) ? substr($data['item']['registdate'],0,10) : ''}}</td>
                                        <td class="text-left">{{!empty($data['item']['name']) ? $data['item']['name'] : ''}}</td>
                                        <td class="text-left">{{!empty($data['item']['tel']) ? $data['item']['tel'] : ''}}</td>
                                        <td class="text-left">{{!empty($data['item']['starlevel']) ? $data['item']['starlevel'] : '0'}}</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </th>
            </table>
        </div>
    </section>
    <style>
        .selected {
            background-color:#FA5858 !important;
        }
    </style>
    @include('messages.error_form')
@endsection
