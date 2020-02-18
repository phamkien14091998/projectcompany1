<?php
// print_r($data_tel);die();
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
							<span>コンシェルジュのイチオシへ戻る</span>
						</span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>
            <table>
                <th style="width: 50%;float: left">
                    @if((isset($_GET['regdate']) && isset($_GET['name']) && isset($_GET['user_tel'])) || isset($data['item']['serialno']))
                        <form method="post" action="{{url('recommend/update')}}">
                            <div class="box-body">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="serialno" value="{{$r->id}}">

                                <div class="form-group col-xs-12">
                                    <label for="inputName" class="control-label">日付</label>
                                    <input type="text" class="form-control input-lg datepicker" style="position: unset" id="date" name="showdate" value="{{$r->regdate}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label for="inputName" class="control-label">エリア</label>
                                    <select class="form-control input-lg area-girl" name="area" style="padding-bottom: 0px !important;">
                                        <option value="1" {{$r->client_cd == 1 ? 'selected' : ''}}>西東京</option>
                                        <option value="7" {{$r->client_cd == 7 ? 'selected' : ''}}>東京23区</option>
                                        <option value="5" {{$r->client_cd == 5 ? 'selected' : ''}}>千葉</option>
                                        <option value="6" {{$r->client_cd == 6 ? 'selected' : ''}}>埼玉</option>
                                        <option value="8" {{$r->client_cd == 8 ? 'selected' : ''}}>神奈川</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label for="inputName" class="control-label">女性</label>
                                    <select class="form-control input-lg list-girl" name="girl_cd" style="padding-bottom: 0px !important;">
                                        @foreach($data_name['item'] as $value)
                                            <option id="girl-name" value="{{$value['girl_cd']}}" {{$r->girl_name == $value['girl_name'] ? 'selected' : ''}} >{{$value['girl_name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label for="inputName" class="control-label">ユーザー情報</label>
                                    <label class="form-control input-lg data-user" id="name">{{$r->name . ' - ' . $r->user_tel}}</label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label for="inputMsg" class="control-label">コメント</label>
                                    <textarea class="form-control input-lg" id="msg" name="msg" style="height: 200px">{{isset($_GET['memo']) ? $_GET['memo'] : ''}}</textarea>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix" style="float: right">
                                <label class="btn-material">
                                    <input type="submit" value="保存する" class="btn btn-lg bg-aqua">
                                </label>
                            </div>
                        </form>
                    @elseif(isset($data['item']) && $data['item'])
                        @foreach($data['item'] as $item)
                            @if($r->id == $item['serialno'])
                                <form method="post" action="{{url('recommend/update')}}">
                                    <div class="box-body">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="serialno" value="{{$item['serialno']}}">

                                        <div class="form-group col-xs-12">
                                            <label for="inputName" class="control-label">日付</label>
                                            <input type="text" class="form-control input-lg datepicker" style="position: unset" id="date" name="showdate" value="{{$item['regdate']}}">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="inputName" class="control-label">エリア</label>
                                            <select class="form-control input-lg area-girl" style="padding-bottom: 0px !important;">
                                                <option id="area_girl" data-val="1" name="area" value="1" {{$item['client_cd'] == 1 ? 'selected' : ''}}>西東京</option>
                                                <option id="area_girl" data-val="7" name="area" value="7" {{$item['client_cd'] == 7 ? 'selected' : ''}}>東京23区</option>
                                                <option id="area_girl" data-val="5" name="area" value="5" {{$item['client_cd'] == 5 ? 'selected' : ''}}>千葉</option>
                                                <option id="area_girl" data-val="6" name="area" value="6" {{$item['client_cd'] == 6 ? 'selected' : ''}}>埼玉</option>
                                                <option id="area_girl" data-val="8" name="area" value="8" {{$item['client_cd'] == 8 ? 'selected' : ''}}>神奈川</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="inputName" class="control-label">女性</label>
                                            <select class="form-control input-lg list-girl" name="girl_cd" style="padding-bottom: 0px !important;">
                                                @foreach($data_name['item'] as $value)
                                                    <option id="girl-name" value="{{$value['girl_cd']}}" {{$item['girl_name'] == $value['girl_name'] ? 'selected' : ''}} >{{$value['girl_name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="inputName" class="control-label">ユーザー情報</label>
                                            <label class="form-control input-lg data-user" id="name">{{$item['name'] . ' - ' . $item['user_tel']}}</label>
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
                </th>
                <th style="width: 50%; float: right">
                    <div class="col-md-4" style="text-align: center">
                        <form action="{{url('recommend/detail/'. $r->id . '/' . $r->client_cd)}}" method="get">
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
                                @if(isset($data_tel) && $data_tel && !isset($data_tel['item']['tel']))
                                    @foreach($data_tel['item'] as $item)
                                        <tr class="pick-user" data-user="{{$item['user_cd']}}" tel-user="{{$item['tel']}}" id="info-user{{$item['user_cd']}}" style="cursor: pointer;">
                                            <td class="text-left">{{!empty($item['registdate']) ? substr($item['registdate'],0,10) : ''}}</td>
                                            <td class="text-left">{{!empty($item['name']) ? $item['name'] : ''}}</td>
                                            <td class="text-left">{{!empty($item['tel']) ? $item['tel'] : ''}}</td>
                                            <td class="text-left">{{!empty($item['starlevel']) ? $item['starlevel'] : '0'}}</td>
                                        </tr>
                                    @endforeach
                                @elseif(isset($data_tel['item']['tel']))
                                    <tr class="pick-user" data-user="{{$data_tel['item']['user_cd']}}" tel-user="{{$data_tel['item']['tel']}}" id="info-user{{$data_tel['item']['user_cd']}}" style="cursor: pointer;">
                                        <td class="text-left">{{!empty($data_tel['item']['registdate']) ? substr($data_tel['item']['registdate'],0,10) : ''}}</td>
                                        <td class="text-left">{{!empty($data_tel['item']['name']) ? $data_tel['item']['name'] : ''}}</td>
                                        <td class="text-left">{{!empty($data_tel['item']['tel']) ? $data_tel['item']['tel'] : ''}}</td>
                                        <td class="text-left">{{!empty($data_tel['item']['starlevel']) ? $data_tel['item']['starlevel'] : '0'}}</td>
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
