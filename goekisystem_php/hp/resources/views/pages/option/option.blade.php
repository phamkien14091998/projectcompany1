<?php
//print_r($data);die();
//print_r($data_name);die();

?>
@extends('layouts.index')
@section('contents')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>コンシェルジュ設定</h1>
    </section>
    <section class="content container-fluid">
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-users"></i></div>
            <div class="box-header">
            </div>
            <div style="display: flex">
                <div style="width: 60%;float: left">
                    <div style="width: 100%; padding: 10px 0 0 10px;">
                        <a data-toggle="modal" data-target="#optionAdd" class="btn-material option-add">
                                <span class="btn btn-white btn-circle">
                                    <i class="fa fa-plus fa-fw"></i>
                                </span>
                            <span>新規作成</span>
                        </a>
                    </div>
                    <br>
                    <div class="box-body">
                        <label style="font-size: 20px;">女性項目</label>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    @if(isset($data['item']) && $data['item'])
                                        @foreach($data['item'] as $key => $item)
                                            <tr class="pick-staff" style="cursor: pointer">
                                                <td class="text-left">{{!empty($item['option_name']) ? $item['option_name'] : ''}}</td>
                                                <td class="text-center" style="width: 30%">
                                                    <a data-toggle="modal" data-target="#optionDetail" class="btn-material margin-r-5 option_detail" data_id="{{$item['option_cd']}}">
                                                        <span class="btn bg-navy btn-circle" style="height: 47px;"><i class="fa fa-pencil fa-fw"></i></span>
                                                    </a>
                                                    <a class="btn-material" href="{{url('option/delete/'. $item['option_cd'])}}" onclick="return confirm('削除します。宜しいですか？')">
                                                        <span class="btn bg-red btn-circle" style="height: 47px;">
                                                            <i class="fa fa-trash fa-fw"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div style="width: 40%; float: right">
                    <div style="width: 100%; padding: 10px 0 0 10px;">
                        <a data-toggle="modal" data-target="#optionAddName" class="btn-material option-add-name">
                                <span class="btn btn-white btn-circle">
                                    <i class="fa fa-plus fa-fw"></i>
                                </span>
                            <span>新規作成</span>
                        </a>
                    </div>
                    <br>
                    <div class="box-body">
                        <label style="font-size: 20px;">基本サービス</label>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    @if(isset($data_name['item']) && $data_name['item'])
                                        @foreach($data_name['item'] as $row)
                                            <tr class="pick-staff" style="cursor: pointer">
                                                <td class="text-left">{{!empty($row['option_name']) ? $row['option_name'] : ''}}</td>
                                                <td class="text-center" style="width: 35%">
                                                    <a data-toggle="modal" data-target="#optionNameDetail" class="btn-material margin-r-5 option_name_detail" data-id-name="{{$row['option_cd']}}">
                                                        <span class="btn bg-navy btn-circle" style="height: 47px;"><i class="fa fa-pencil fa-fw"></i></span>
                                                    </a>
                                                    <a class="btn-material" href="{{url('option/deleteName/'. $row['option_cd'])}}" onclick="return confirm('削除します。宜しいですか？')">
                                                        <span class="btn bg-red btn-circle" style="height: 47px;">
                                                            <i class="fa fa-trash fa-fw"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('messages.error_form')
@endsection
<div class="row text-center">
    <div class="modal fade" id="optionDetail" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md"  style="padding-top: 100px">
            <div class="modal-content" style="background: white">

                <!-- Modal body -->
                <div class="modal-body">
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row text-center">
    <div class="modal fade" id="optionNameDetail" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md" style="padding-top: 100px">
            <div class="modal-content" style="background: white">

                <!-- Modal body -->
                <div class="modal-body">
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row text-center">
    <div class="modal fade" id="optionAdd" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md" style="padding-top: 100px">
            <div class="modal-content" style="background: white">

                <!-- Modal body -->
                <div class="modal-body">
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row text-center">
    <div class="modal fade" id="optionAddName" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md" style="padding-top: 100px">
            <div class="modal-content" style="background: white">

                <!-- Modal body -->
                <div class="modal-body">
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>