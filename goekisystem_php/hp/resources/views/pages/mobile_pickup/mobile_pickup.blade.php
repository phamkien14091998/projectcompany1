<?php
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <section class="content-header">
        <h1>ピックアップ</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix"></div>

            <label class="control-label" style="padding: 20px">Mobile Pickup</label>

            <form method="post" action="{{url('mobilePickup/update')}}">
                <div class="box-body">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group col-xs-12" id="list_girl_name">
                        <label class="control-label">1番目:</label>
                        <select name="ranking1" class="form-control input-lg">
                            @foreach($data_name['item'] as $row)
                                <option value="{{$row['girl_cd']}}">{{$row['girl_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-xs-12" id="list_girl_name">
                        <label class="control-label">2番目:</label>
                        <select name="ranking2" class="form-control input-lg">
                            @foreach($data_name['item'] as $row)
                                <option value="{{$row['girl_cd']}}">{{$row['girl_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-xs-12" id="list_girl_name">
                        <label class="control-label">3番目:</label>
                        <select name="ranking3" class="form-control input-lg">
                            @foreach($data_name['item'] as $row)
                                <option value="{{$row['girl_cd']}}">{{$row['girl_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-xs-12" id="list_girl_name">
                        <label class="control-label">4番目:</label>
                        <select name="ranking4" class="form-control input-lg">
                            @foreach($data_name['item'] as $row)
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
