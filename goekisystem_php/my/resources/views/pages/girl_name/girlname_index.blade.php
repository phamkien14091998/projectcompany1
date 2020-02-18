<?php
//print_r($data);die();
if (empty($_GET['page'])){
    $_GET['page'] = 1;
}
?>
@extends('layouts.index')
@section('contents')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>面接担当官オススメ</h1>
    </section>
    <section class="content container-fluid">
        <div class="row margin-bottom">
            <div class="col-md-8" style="width: 30%;">
                <a href="{{url('girl/add')}}" class="btn-material">
							<span class="btn btn-white btn-circle">
							<i class="fa fa-plus fa-fw"></i>
							</span>
                    <span>新規作成</span>
                </a>
            </div>
        </div>

        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-users"></i></div>
            <div class="box-header">
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="width: 180px;">日付</th>
                            <th style="width: 115px;">オススメ女性</th>
                            <th>コメント</th>
                            <th>23区 </th>
                            <th>西東京</th>
                            <th>千葉</th>
                            <th>埼玉 </th>
                            <th>神奈川</th>
                            <th style="width:150px">アクション</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!isset($data['item']['serialno']))
                            @if(isset($data['item']) && $data['item'])
                                @foreach($data['item'] as $key => $item)
                                    <tr>
                                        <td class="text-left">{{!empty($item['showdate']) ? $item['showdate'] : ''}}</td>
                                        <td class="text-left">{{!empty($item['girl_name']) ? $item['girl_name'] : ''}}</td>
                                        <td class="text-left">{{!empty($item['memo']) ? $item['memo'] : ''}}</td>
                                        <td class="text-left">{{!empty($item['area_1']) ? $item['area_1'] : ''}}</td>
                                        <td class="text-left">{{!empty($item['area_2']) ? $item['area_2'] : ''}}</td>
                                        <td class="text-left">{{!empty($item['area_3']) ? $item['area_3'] : ''}}</td>
                                        <td class="text-left">{{!empty($item['area_4']) ? $item['area_4'] : ''}}</td>
                                        <td class="text-left">{{!empty($item['area_5']) ? $item['area_5'] : ''}}</td>
                                        <td class="text-center">
                                            <a href="{{url('girl/detail/'. $item['serialno'] . '/?page=' . $_GET['page'] . '&girl_cd=' . $item['girl_cd'] )}}" class="btn-material margin-r-5">
                                                <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                            </a>
                                            <a class="btn-material" href="{{url('girl/delete/'. $data['item']['serialno'])}}" onclick="return confirm('削除します。宜しいですか？')">
                                                <span class="btn bg-red btn-circle">
                                                    <i class="fa fa-trash fa-fw"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            @else
                                <tr>
                                    <td class="text-left">{{!empty($data['item']['showdate']) ? $data['item']['showdate'] : ''}}</td>
                                    <td class="text-left">{{!empty($data['item']['girl_name']) ? $data['item']['girl_name'] : ''}}</td>
                                    <td class="text-left">{{!empty($data['item']['memo']) ? $data['item']['memo'] : ''}}</td>
                                    <td class="text-left">{{!empty($data['item']['area_1']) ? $data['item']['area_1'] : ''}}</td>
                                    <td class="text-left">{{!empty($data['item']['area_2']) ? $data['item']['area_2'] : ''}}</td>
                                    <td class="text-left">{{!empty($data['item']['area_3']) ? $data['item']['area_3'] : ''}}</td>
                                    <td class="text-left">{{!empty($data['item']['area_4']) ? $data['item']['area_4'] : ''}}</td>
                                    <td class="text-left">{{!empty($data['item']['area_5']) ? $data['item']['area_5'] : ''}}</td>
                                    <td class="text-center">
                                        <a href="{{url('girl/detail/'. $data['item']['serialno'] . '/?page=' . $_GET['page'] . '&girl_cd=' . $data['item']['girl_cd'] )}}" class="btn-material margin-r-5">
                                            <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                        </a>
                                        <a class="btn-material" href="{{url('girl/delete/'. $data['item']['serialno'])}}" onclick="return confirm('削除します。宜しいですか？')">
                                            <span class="btn bg-red btn-circle">
                                                <i class="fa fa-trash fa-fw"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                    <div class="box-footer text-center">
                        <ul class="pagination text-center">
                            @if (isset($data) && $data['pagecnt'] > 1)
                                @if($_GET['page'] != 1 && $data['pagecnt'] >= 5)
                                    <li>
                                        <a href="{{url('/girl/?page=1') }}" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                @endif
                                @if($_GET['page'] != 1)
                                    <li>
                                        <a href="{{url('/girl/?page='.$_GET['page']-1) }}" aria-label="Previous" class="previous">
                                            <span aria-hidden="true">‹</span>
                                        </a>
                                    </li>
                                @endif
                                @for($i = max($_GET['page']-2, 1); $i <= min(max($_GET['page']-2, 1)+4,$data['pagecnt']); $i++)
                                    @if($_GET['page'] == $i)
                                        <li class="active">
                                    @else
                                        <li>
                                            @endif
                                            <a href="{{url('/girl/?page='.$i)}}">{{ $i }}</a>
                                        </li>
                                        @endfor
                                        @if ($_GET['page'] != $data['pagecnt'])
                                            <li>
                                                <a href="{{url('/girl/?page='.($_GET['page']+1))}}" aria-label="Next" class="next">
                                                    <span aria-hidden="true"> › </span>
                                                </a>
                                            </li>
                                        @endif
                                        @if ($_GET['page'] != $data['pagecnt'] && $data['pagecnt'] >= 5)
                                            <li>
                                                <a href="{{url('/girl/?page='.$data['pagecnt'])}}" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        @endif
                                    @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('messages.error_form')
@endsection