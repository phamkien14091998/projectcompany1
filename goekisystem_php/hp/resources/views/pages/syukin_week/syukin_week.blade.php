<?php
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>出勤情報</h1>
    </section>

    <section class="content container-fluid">
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-users"></i></div>
            <div class="box-header">
            </div>
            <form role="form" action="{{url('/syukinWeek')}}">
                <div class="name-girl" style="text-align: center;">
                    <input type="submit" name="search_name" value="あ">
                    <input type="submit" name="search_name" value="か">
                    <input type="submit" name="search_name" value="さ">
                    <input type="submit" name="search_name" value="た">
                    <input type="submit" name="search_name" value="な">
                    <input type="submit" name="search_name" value="は">
                    <input type="submit" name="search_name" value="ま">
                    <input type="submit" name="search_name" value="や">
                    <input type="submit" name="search_name" value="ら">
                    <input type="submit" name="search_name" value="わ">
                    <input type="submit" name="search_name" value="全員">
                </div>
            </form>
            <div class="box-body">
                <div class="table-responsive" style="max-height: 600px">
                    <table class="table table-bordered table-striped">
                        <thead>
                        @if(isset($data['item']) && $data['item'] && empty($data['item']['girl_cd']))
                            <tr>
                                <th style="width: 7%;">女の子</th>
                                <th>{{$data['item'][0]['syukin_date_w']}} </th>
                                <th>{{$data['item'][0]['syukin_date2_w']}}</th>
                                <th>{{$data['item'][0]['syukin_date3_w']}}</th>
                                <th>{{$data['item'][0]['syukin_date4_w']}}</th>
                                <th>{{$data['item'][0]['syukin_date5_w']}}</th>
                                <th>{{$data['item'][0]['syukin_date6_w']}}</th>
                                <th>{{$data['item'][0]['syukin_date7_w']}}</th>
                                <th style="width:10%">アクション</th>
                            </tr>
                        @elseif(!empty($data['item']['girl_cd']))
                            <tr>
                                <th style="width: 7%;">日付</th>
                                <th>{{$data['item']['syukin_date_w']}} </th>
                                <th>{{$data['item']['syukin_date2_w']}}</th>
                                <th>{{$data['item']['syukin_date3_w']}}</th>
                                <th>{{$data['item']['syukin_date4_w']}}</th>
                                <th>{{$data['item']['syukin_date5_w']}}</th>
                                <th>{{$data['item']['syukin_date6_w']}}</th>
                                <th>{{$data['item']['syukin_date7_w']}}</th>
                                <th style="width:10%">アクション</th>
                            </tr>
                        @endif
                        </thead>
                        <tbody>
                        @if(isset($data['item']) && $data['item'] && !isset($data['item']['girl_cd']))
                            @foreach($data['item'] as $item)
                                <tr>
                                    <td class="text-left">{{!empty($item['girl_name']) ? $item['girl_name'] : ''}}</td>
                                    @if(!empty($item['date_start']) && !empty($item['date_end']))
                                        <td class="text-left">{{$item['date_se1']}}</td>
                                    @else
                                        <td class="text-left">-</td>
                                    @endif
                                    @for($i=2;$i<=7;$i++)
                                        @if(!empty($item['date_start'.$i]) && !empty($item['date_end'.$i]))
                                            <td class="text-left">{{$item['date_se'.$i]}}</td>
                                        @else
                                            <td class="text-left">-</td>
                                        @endif
                                    @endfor
                                    <td class="text-center">
                                        @if(isset($item['girl_cd']))
                                            <a href="{{url('syukinWeek/detail/'. $item['girl_cd'])}}"
                                               class="btn-material margin-r-5">
                                                <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                            </a>
                                            <a class="btn-material"
                                               href="{{url('syukinWeek/delete/'. $item['girl_cd'] . '?syukin_date='.$item['syukin_date'].'&syukin_date7='.$item['syukin_date7'])}}"
                                               onclick="return confirm('削除します。宜しいですか？')">
                                            <span class="btn bg-red btn-circle">
                                                <i class="fa fa-trash fa-fw"></i>
                                            </span>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @elseif(isset($data['item']['girl_cd']))
                            <tr>
                                <td class="text-left">{{!empty($data['item']['girl_name']) ? $data['item']['girl_name'] : ''}}</td>
                                @if(!empty($data['item']['date_start']) && !empty($data['item']['date_end']))
                                    <td class="text-left">{{$data['item']['date_se1']}}</td>
                                @else
                                    <td class="text-left">-</td>
                                @endif
                                @for($i = 2; $i <= 7 ; $i++)
                                    @if(!empty($data['item']['date_start'.$i]) && !empty($data['item']['date_end'.$i]))
                                        <td class="text-left">{{$data['item']['date_se'.$i]}}</td>
                                    @else
                                        <td class="text-left">-</td>
                                    @endif
                                @endfor
                                <td class="text-center">
                                    @if((isset($_GET['girl_cd'])))
                                        <a href="{{url('syukinWeek/detail'. $data['item']['girl_cd'])}}"
                                           class="btn-material margin-r-5">
                                            <span class="btn bg-navy btn-circle">
                                                <i class="fa fa-pencil fa-fw"></i></span>
                                        </a>
                                        <a class="btn-material"
                                           href="{{url('syukinWeek/delete/'. $data['item']['girl_cd'])}}"
                                           onclick="return confirm('削除します。宜しいですか？')">
                                        <span class="btn bg-red btn-circle">
                                            <i class="fa fa-trash fa-fw"></i>
                                        </span>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @include('messages.error_form')
@endsection