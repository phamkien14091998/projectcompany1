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
        <h1>写メ日記</h1>
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
            <table style="width: 100%">
                <th style="width: 30%;">
                    <div class="box-body">
                        <div class="table-responsive" style="max-height: 700px">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>日付</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!isset($data['item']['diary_cd']))
                                    @if(isset($data['item']) && $data['item'])
                                        @foreach($data['item'] as $item)
                                            <tr class="pick-user" data-user="{{!empty($item['diary_cd']) ? $item['diary_cd'] : ''}}" girl_cd="{{$r->id}}" id="diary-girl{{!empty($item['diary_cd']) ? $item['diary_cd'] : ''}}" style="cursor: pointer;">
                                                <td class="text-left">{{!empty($item['diary_date']) ? $item['diary_date'] : ''}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @else
                                    <tr class="pick-user" data-user="{{!empty($data['item']['diary_cd']) ? $data['item']['diary_cd'] : ''}}" girl_cd="{{$r->id}}" id="diary-girl{{!empty($data['item']['diary_cd']) ? $data['item']['diary_cd'] : ''}}" style="cursor: pointer;">
                                        <td class="text-left">{{!empty($data['item']['diary_date']) ? $data['item']['diary_date'] : ''}}</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </th>
                <th style="width: 40%;">
                    <div class="box-body">
                        <form method="POST" action="{{url('home/girl_diary_update')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group col-xs-12 contents-girl"></div>
                        </form>
                    </div>
                </th>
                <th style="width: 30%;">
                    <div class="box-body">
                        <div class="form-group col-xs-12 img-girl"></div>
                    </div>
                </th>
            </table>
        </div>
    </section>
    @include('messages.error_form')
@endsection
