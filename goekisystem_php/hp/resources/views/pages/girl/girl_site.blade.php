<?php
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <style>
        .selected {
            background-color:#58FAAC !important;
        }
    </style>
    <section class="content-header">
        <h1>日記同時送信管理</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/')}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>日記同時送信管理へ戻る</span>
                </span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix"></div>
            <table>
                <th style="width: 60%;">
                    <div class="box-body">
                        <div class="table-responsive" style="max-height: 700px">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 35%;">媒体名</th>
                                    <th>宛先(To)</th>
                                    <th>件名(Title)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($data['item']) && $data['item'])
                                    @foreach($data['item'] as $item)
                                        <tr class="pick-girl" id-girl="{{$item['id']}}" girl_cd="{{$r->id}}" id="info-girl{{$item['id']}}" style="cursor: pointer;">
                                            <td class="text-left">{{!empty($item['name']) ? $item['name'] : ''}}</td>
                                            <td class="text-left">{{!empty($item['email']) ? $item['email'] : ''}}</td>
                                            <td class="text-left">
                                            @if(isset($item['subject'][0]))
                                            {{!empty($item['subject'][0]) ? $item['subject'][0] : ' '}}
                                            @else
                                            {{!empty($item['subject']) ? $item['subject'] : ' '}}
                                            @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </th>
                <th style="width: 40%;">
                    <form method="post" action="{{url('home/girlSiteUpdate')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="info-girl"></div>
                    </form>
                </th>
            </table>
        </div>
    </section>
    @include('messages.error_form')
@endsection
