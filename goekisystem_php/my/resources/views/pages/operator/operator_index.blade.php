<?php
//print_r($data);die();
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
            <table>
                <th style="width: 65%;float: left">
            <div class="box-body">
                <div class="table-responsive" style="max-height: 700px">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>コンシェルジュID </th>
                            <th style="width: 145px;">コンシェルジュ名  </th>
                            <th style="width: 10%;">ニックネーム </th>
                            <th style="width: 320px;">更新日付 </th>
                            <th>ビューID  </th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(isset($data['item']) && $data['item'])
                                @foreach($data['item'] as $item)
                                    <tr class="pick-staff" operator_id="{{$item['id']}}" style="cursor: pointer">
                                        <td class="text-left">{{!empty($item['operator_cd']) ? $item['operator_cd'] : ''}}</td>
                                        <td class="text-left">{{!empty($item['name']) ? $item['name'] : ''}}</td>
                                        <td class="text-left">{{is_array($item['memo']) ? '' : '0'}}</td>
                                        <td class="text-left">{{!empty($item['regdate']) ? $item['regdate'] : ''}}</td>
                                        <td class="text-left"></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
                </th>
                <th style="width: 35%; float: right">
                    <div class="box-body">
                        <div class="table-responsive" style="max-height: 700px">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>日付</th>
                                    <th>ニックネーム</th>
                                    <th>会員番号</th>
                                </tr>
                                </thead>
                                <tbody class="list-user" id="user-list"></tbody>
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