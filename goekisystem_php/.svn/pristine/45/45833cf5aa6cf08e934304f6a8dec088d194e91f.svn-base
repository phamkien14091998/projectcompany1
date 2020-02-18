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
        <h1>コンシェルジュのイチオシ</h1>
    </section>
    <section class="content container-fluid">
        <div class="row margin-bottom">
            <div class="col-md-8 add-user">
                <a href="{{url('recommend/add')}}" class="btn-material">
							<span class="btn btn-white btn-circle">
							<i class="fa fa-plus fa-fw"></i>
							</span>
                    <span>新規作成</span>
                </a>
            </div>
            <div class="col-md-4 ipad-setting" style="width: 87%; padding-top: 20px;">
                <form action="{{url('recommend/')}}" method="get">
                    <div style="float: left; padding-right: 15px">
                        <input type="number" name="user_tel" value="{{$r->user_tel}}" class="form-control pull-right" placeholder="会員番号 " style="width:150px">
                    </div>
                    <div class="col-lg-4" style="width: 25% !important;">
                        <input type="text" name="user_name" value="{{$r->user_name}}" class="form-control pull-right" placeholder="お客様名" style="width:150px">
                    </div>
                    <div class="col-lg-4" style="width: 25% !important;">
                        <input type="text" name="girl_name" value="{{$r->girl_name}}" class="form-control pull-right" placeholder="オススメ女性" style="width:150px">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default" style="height: 35px"><i class="fa fa-search fa-fw"></i></button>
                    </div>
                </form>
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
                            <th style="width: 18%;">日付</th>
                            <th style="width: 12%;">会員番号 </th>
                            <th>お客様名</th>
                            <th>オススメ女性</th>
                            <th>コメント</th>
                            <th style="width:150px">アクション</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($data['item']) && $data['item'] && !isset($data['item']['serialno']))
                            @foreach($data['item'] as $item)
                                <tr>
                                    <td class="text-left">{{!empty($item['showdate']) ? $item['showdate'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['user_tel']) ? $item['user_tel'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['name']) ? $item['name'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['girl_name']) ? $item['girl_name'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['memo']) ? $item['memo'] : ''}}</td>
                                    <td class="text-center">
                                        @if((isset($_GET['tel']) || isset($_GET['user_name']) || isset($_GET['girl_name'])) && !isset($data['item']['serialno']))
                                        <a href="{{url('recommend/detail/'. $item['serialno'] . '/' . $item['client_cd'] . '/?page=' . $_GET['page'] . '&regdate=' . $item['regdate'] . '&name=' . $item['name'] . '&user_tel=' . $item['user_tel']  . '&girl_name=' . $item['girl_name'] . '&memo=' . $item['memo'])}}" class="btn-material margin-r-5">
                                            <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                        </a>
                                        @else
                                        <a href="{{url('recommend/detail/'. $item['serialno'] . '/' . $item['client_cd'] . '/?page=' . $_GET['page'])}}" class="btn-material margin-r-5">
                                            <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                        </a>
                                        @endif
                                        <a class="btn-material" href="{{url('recommend/delete/'. $item['serialno'])}}" onclick="return confirm('削除します。宜しいですか？')">
                                            <span class="btn bg-red btn-circle">
                                                <i class="fa fa-trash fa-fw"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @elseif(isset($data['item']['serialno']))
                            <tr>
                                <td class="text-left">{{!empty($data['item']['showdate']) ? $data['item']['showdate'] : ''}}</td>
                                <td class="text-left">{{!empty($data['item']['user_tel']) ? $data['item']['user_tel'] : ''}}</td>
                                <td class="text-left">{{!empty($data['item']['name']) ? $data['item']['name'] : ''}}</td>
                                <td class="text-left">{{!empty($data['item']['girl_name']) ? $data['item']['girl_name'] : ''}}</td>
                                <td class="text-left">{{!empty($data['item']['memo']) ? $data['item']['memo'] : ''}}</td>
                                <td class="text-center">
                                    @if((isset($_GET['tel']) || isset($_GET['user_name']) || isset($_GET['girl_name'])))
                                        <a href="{{url('recommend/detail/'. $data['item']['serialno'] . '/' . $data['item']['client_cd'] . '/?page=' . $_GET['page'] . '&regdate=' . $data['item']['regdate'] . '&name=' . $data['item']['name'] . '&user_tel=' . $data['item']['user_tel']  . '&girl_name=' . $data['item']['girl_name'] . '&memo=' . $data['item']['memo'])}}" class="btn-material margin-r-5">
                                            <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                        </a>
                                    @else
                                        <a href="{{url('recommend/detail/'. $data['item']['serialno'] . '/' . $data['item']['client_cd'] . '/?page=' . $_GET['page'])}}" class="btn-material margin-r-5">
                                            <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                        </a>
                                    @endif
                                    <a class="btn-material" href="{{url('recommend/delete/'. $data['item']['serialno'])}}" onclick="return confirm('削除します。宜しいですか？')">
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
                                        <a href="{{url('/recommend/?page=1') }}" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                @endif
                                @if($_GET['page'] != 1)
                                    <li>
                                        <a href="{{url('/recommend/?page='.$_GET['page']-1) }}" aria-label="Previous" class="previous">
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
                                            <a href="{{url('/recommend/?page='.$i)}}">{{ $i }}</a>
                                        </li>
                                        @endfor
                                        @if ($_GET['page'] != $data['pagecnt'])
                                            <li>
                                                <a href="{{url('/recommend/?page='.($_GET['page']+1))}}" aria-label="Next" class="next">
                                                    <span aria-hidden="true"> › </span>
                                                </a>
                                            </li>
                                        @endif
                                        @if ($_GET['page'] != $data['pagecnt'] && $data['pagecnt'] >= 5)
                                            <li>
                                                <a href="{{url('/recommend/?page='.$data['pagecnt'])}}" aria-label="Next">
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