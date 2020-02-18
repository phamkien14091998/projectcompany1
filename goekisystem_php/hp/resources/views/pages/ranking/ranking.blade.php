<?php
if (empty($_GET['page'])){
    $_GET['page'] = 1;
}
if (empty($_GET['client_cd'])){
    $_GET['client_cd'] = 1;
}
// print_r($data_img);die();
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <style>
        .color_name{
            color: #B40404;
            font-weight: bold;
        }
        .submit{
            color: #B40404;
        }
    </style>
    <section class="content-header">
        <h1>ランキング</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>
            <div class="input-group input-group-md" style="padding-top: 20px">
                <form id="form-change" role="form" action="{{url('/ranking')}}" method="GET">
                    <span style="padding: 0 30px 0 30px">
                        <select name="client_cd" class="change_client_cd" style="height: 32px; border-radius: 10px;">
                            <option value="1" {{(isset($_GET['client_cd']) && $_GET['client_cd'] == 1) ? 'selected' : ''}}>西東京</option>
                            <option value="7" {{(isset($_GET['client_cd']) && $_GET['client_cd'] == 7) ? 'selected' : ''}}>東京23区</option>
                            <option value="5" {{(isset($_GET['client_cd']) && $_GET['client_cd'] == 5) ? 'selected' : ''}}>千葉</option>
                            <option value="6" {{(isset($_GET['client_cd']) && $_GET['client_cd'] == 6) ? 'selected' : ''}}>埼玉</option>
                            <option value="8" {{(isset($_GET['client_cd']) && $_GET['client_cd'] == 8) ? 'selected' : ''}}>神奈川</option>
                        </select>
                    </span>
                </form>
            </div>
            <table>
                <th style="width: 50%;float: left">
                    <div class="row d-flex flex-wrap">
                        @if(isset($data_img['item']) && $data_img['item'])
                            @foreach($data_img['item'] as $item)
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4" style="width: 25% !important;">
                                    <div class="girls-box" girl_cd="{{$item['girl_cd']}}">
                                        <a href="?girl_cd={{$item['girl_cd']}}&client_cd={{$_GET['client_cd']}}">
                                            <div class="girls-head">
                                                <div class="girls-img" style="border-radius: 0;height: auto">
                                                    <img style="width: 100%; margin: auto;" src="{{$item['img_mini']}}">
                                                </div>
                                            </div>
                                            <div>
                                                <p class="girls-name">
                                                    <span class="name-img-area">{{!empty($item['girl_name']) ? $item['girl_name'] : ''}}({{!empty($item['girl_age']) ? $item['girl_age'] : ''}})</span>
                                                </p>
                                                <p class="girls-comment text-left">
                                                    New: {{$item['new_flg']}}
                                                </p>
                                                <p class="girls-comment text-left">
                                                    担当:{{$item['quit_flg']}}
                                                </p>
                                                <p class="girls-comment text-left">
                                                    優先順位:{{$item['girl_memo78']}}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="box-footer text-center">
                        <ul class="pagination text-center">
                            @if (isset($total_page) && $total_page > 1)
                                @if(isset($_GET['client_cd']))
                                    @if($_GET['page'] != 1 && $total_page >= 5)
                                        <li>
                                            <a href="{{url('/ranking/?page=1&client_cd='.$_GET['client_cd']) }}" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                    @endif
                                    @if($_GET['page'] != 1)
                                        <li>
                                            <a href="{{url('/ranking/?page='.($_GET['page']-1).'&client_cd='.$_GET['client_cd']) }}" aria-label="Previous" class="previous">
                                                <span aria-hidden="true">‹</span>
                                            </a>
                                        </li>
                                    @endif
                                    @for($i = max($_GET['page']-2, 1); $i <= min(max($_GET['page']-2, 1)+4,$total_page); $i++)
                                        @if($_GET['page'] == $i)
                                            <li class="active">
                                        @else
                                        <li>
                                        @endif
                                            <a href="{{url('/ranking/?page='.$i.'&client_cd='.$_GET['client_cd'])}}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    @if ($_GET['page'] != $total_page)
                                        <li>
                                            <a href="{{url('/ranking/?page='.($_GET['page']+1).'&client_cd='.$_GET['client_cd'])}}" aria-label="Next" class="next">
                                                <span aria-hidden="true"> › </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($_GET['page'] != $total_page && $total_page >= 5)
                                        <li>
                                            <a href="{{url('/ranking/?page='.$total_page.'&client_cd='.$_GET['client_cd'])}}" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    @endif
                                @else
                                    @if (isset($total_page) && $total_page > 1)
                                        @if($_GET['page'] != 1 && $total_page >= 5)
                                            <li>
                                                <a href="{{url('/ranking/?page=1') }}" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                        @endif
                                        @if($_GET['page'] != 1)
                                            <li>
                                                <a href="{{url('/ranking/?page='.$_GET['page']-1) }}" aria-label="Previous" class="previous">
                                                    <span aria-hidden="true">‹</span>
                                                </a>
                                            </li>
                                        @endif
                                        @for($i = max($_GET['page']-2, 1); $i <= min(max($_GET['page']-2, 1)+4,$total_page); $i++)
                                            @if($_GET['page'] == $i)
                                                <li class="active">
                                            @else
                                            <li>
                                                @endif
                                                <a href="{{url('/ranking/?page='.$i)}}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        @if ($_GET['page'] != $total_page)
                                            <li>
                                                <a href="{{url('/ranking/?page='.($_GET['page']+1))}}" aria-label="Next" class="next">
                                                    <span aria-hidden="true"> › </span>
                                                </a>
                                            </li>
                                        @endif
                                        @if ($_GET['page'] != $total_page && $total_page >= 5)
                                            <li>
                                                <a href="{{url('/ranking/?page='.$total_page)}}" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        @endif
                                    @endif
                                @endif
                            @endif
                        </ul>
                    </div>
                </th>
                <hr>
                <th style="width: 50%; float: right">
                    <table>
                        <tr>
                            <th>ランキング1</th>
                            <th>ランキング2</th>
                            <th>ランキング3</th>
                            <th>ランキング4</th>
                            <th>ランキング5(総合1位のみ)</th>
                        </tr>
                        @if(isset($data) && $data)
                            <tr style="padding-top: 20px">
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            1位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 1 && $data['item'][$i]['ranking_text1'] == 1)
                                                        {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="1">
                                        <input type="hidden" name="ranking_text1" value="1">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            1位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 2 && $data['item'][$i]['ranking_text1'] == 1)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="2">
                                        <input type="hidden" name="ranking_text1" value="1">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            1位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 3 && $data['item'][$i]['ranking_text1'] == 1)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="3">
                                        <input type="hidden" name="ranking_text1" value="1">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            1位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 4 && $data['item'][$i]['ranking_text1'] == 1)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="4">
                                        <input type="hidden" name="ranking_text1" value="1">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            1位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 5 && $data['item'][$i]['ranking_text1'] == 1)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="5">
                                        <input type="hidden" name="ranking_text1" value="1">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                            </tr>
                            <tr style="padding-top: 20px">
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            2位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 1 && $data['item'][$i]['ranking_text1'] == 2)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="1">
                                        <input type="hidden" name="ranking_text1" value="2">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            2位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 2 && $data['item'][$i]['ranking_text1'] == 2)
                                                   {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="2">
                                        <input type="hidden" name="ranking_text1" value="2">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            2位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 3 && $data['item'][$i]['ranking_text1'] == 2)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="3">
                                        <input type="hidden" name="ranking_text1" value="2">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            2位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 4 && $data['item'][$i]['ranking_text1'] == 2)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="4">
                                        <input type="hidden" name="ranking_text1" value="2">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            2位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 5 && $data['item'][$i]['ranking_text1'] == 2)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="5">
                                        <input type="hidden" name="ranking_text1" value="2">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                            </tr>
                            <tr style="padding-top: 20px">
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            3位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 1 && $data['item'][$i]['ranking_text1'] == 3)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="1">
                                        <input type="hidden" name="ranking_text1" value="3">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            3位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 2 && $data['item'][$i]['ranking_text1'] == 3)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="2">
                                        <input type="hidden" name="ranking_text1" value="3">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            3位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 4 && $data['item'][$i]['ranking_text1'] == 3)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="3">
                                        <input type="hidden" name="ranking_text1" value="3">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            3位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 4 && $data['item'][$i]['ranking_text1'] == 3)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="4">
                                        <input type="hidden" name="ranking_text1" value="3">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                                <th>
                                    <form method="post" action="{{url('ranking/update')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="client_cd" value="{{$_GET['client_cd']}}">
                                        <label class="color_name">
                                            3位
                                            @for($i = 0 ; $i < $count; $i++)
                                                @if($data['item'][$i]['ranking_flg1'] == 5 && $data['item'][$i]['ranking_text1'] == 3)
                                                    {{$data['item'][$i]['girl_name']}}
                                                @endif
                                            @endfor
                                        </label>
                                        <br>
                                        <input type="hidden" name="girl_cd" value="{{isset($_GET['girl_cd']) ? $_GET['girl_cd'] : ''}}">
                                        <input type="hidden" name="ranking_flg1" value="5">
                                        <input type="hidden" name="ranking_text1" value="3">
                                        <input type="submit" class="submit" value="設定">
                                    </form>
                                </th>
                            </tr>
                        @endif
                    </table>
                </th>
            </table>
        </div>
    </section>
    @include('messages.error_form')
@endsection
