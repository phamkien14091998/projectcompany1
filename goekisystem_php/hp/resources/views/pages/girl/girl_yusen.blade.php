<?php
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <section class="content-header">
        <h1>優先順位</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/')}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>在籍女性へ戻る</span>
                </span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>
            <form method="post" action="{{url('home/girlYusenUpdate')}}">
                <div class="box-body">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="girl_cd" value="{{$r->id}}">
                    <div class="form-group col-xs-12">
                        <label for="inputPas" class="control-label">{{!empty($data['item']['girl_name']) ? $data['item']['girl_name'] : ''}}の優先順位のレベルは、
                            <select name="girl_memo78" style="width: 250px!important; height: 30px;">
                                <option value="" {{$data['item']['girl_memo78'] == '' ? 'selected' : ''}}>設定しない</option>
                                @for($i = 1; $i<=20; $i++)
                                    @if($i < 10)
                                    <option value="{{$i}}" {{$data['item']['girl_memo78'] == $i ? 'selected' : ''}} >00{{$i}}</option>
                                    @else
                                    <option value="{{$i}}" {{$data['item']['girl_memo78'] == $i ? 'selected' : ''}} >0{{$i}}</option>
                                    @endif
                                @endfor
                            </select>
                            です。（レベル20が最優先表示です。)
                        </label>
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