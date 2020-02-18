<?php
//print_r($data);die();
$range = range(strtotime("00:00"), strtotime("23:30"), 30 * 60);
//$d1 = (strtotime('2020-02-07 02:30') - strtotime('2020-02-07 01:30')) / 60;
//print_r($d1);die();
?>
@extends('layouts.index')
@section('contents')
    <style>
        .hidden-content{display: flex; padding: 15px; }
    </style>
    <section class="content-header">
        <h1>出勤情報</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/syukinWeek')}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>出勤情報へ戻る</span>
                </span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix"></div>

            <form method="post" action="{{url('/syukinWeek/updateWeek')}}">
                <ul class="nav nav-tabs" id="example-tabs" role="tablist" style="padding-bottom: 15px;">
                    @if(isset($data['item']) && $data['item'])
                        @foreach($data['item'] as $item)
                            @if($item['girl_cd'] == $r->id)
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="girl_cd" value="{{$r->id}}">
                                <div style="padding: 20px;">{{!empty($item['girl_name']) ? $item['girl_name'] : ''}}</div>
                                <div>
                                <li style="width: 30%; padding: 10px; float: left;">
                                    <div class="girls-head" style="height: 300px">
                                        <div class="girls-img">
                                            <img class="img" style="height: 300px;" src="http://img.eki-go.com/img_girl/{{$item['girl_cd']}}/1.jpg">
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 70%; padding: 10px;float: right">
                                    <div class="hidden-content">
                                        <label>{{!empty($item['syukin_date_w']) ? $item['syukin_date_w'] : ''}}</label>
                                        <input type="hidden" name="syukin_date" value="{{!empty($item['syukin_date']) ? $item['syukin_date'] : ''}}">
                                        <input type="hidden" name="syukin_flg" id="syukin_flg" value="0">
                                        <div style="padding-left: 5px">
                                            <input type="checkbox" name="syukin_flg" id="syukin_flg1" value="1" {{($item['syukin_flg'] == '1') ? 'checked' : ''}}>
                                        </div>
                                        <div  id="show_text1" style="{{($item['date_se1'] == '-') ? 'display:none' : 'display:block'}};padding-left: 10px;">
                                            @if(!empty($item['date_start']) && !empty($item['date_end']) && $item['syukin_flg'] == '1')
                                                <select name="date_start">
                                                    @foreach($range as $time)
                                                        <option {{$item['date_start'] == date("H:i", $time) ? 'selected' : ''}} value="{{date("H:i", $time)}}">{{date("H:i", $time)}}</option>
                                                    @endforeach
                                                        <option {{$item['date_start'] == '24:00' ? 'selected' : ''}} value="24:00" >24:00</option>
                                                </select>
                                                <span>-</span>
                                                <select name="date_end">
                                                    @foreach($range as $time)
                                                        <option value="{{date("H:i", $time)}}" {{$item['date_end'] == date("H:i", $time) ? 'selected' : ''}}>{{date("H:i", $time)}}</option>
                                                    @endforeach
                                                        <option {{$item['date_end'] == '24:00' ? 'selected' : ''}} value="24:00">24:00</option>
                                                </select>
                                                    @else
                                                <select name="date_start">
                                                    @foreach($range as $time)
                                                        <option value="{{date("H:i", $time)}}">{{date("H:i", $time)}}</option>
                                                    @endforeach
                                                        <option {{$item['date_start'] == '24:00' ? 'selected' : ''}} value="24:00">24:00</option>
                                                </select>
                                                <span>-</span>
                                                <select name="date_end">
                                                    @foreach($range as $time)
                                                        <option value="{{date("H:i", $time)}}">{{date("H:i", $time)}}</option>
                                                    @endforeach
                                                    <option {{$item['date_end'] == '24:00' ? 'selected' : ''}} value="24:00">24:00</option>
                                                </select>
                                            @endif
                                            <label>お泊まり
                                                <input type="hidden" name="tomari_flg" value="0">
                                                <input type="checkbox" name="tomari_flg" id="tomari_flg" value="1" {{$item['tomariFlg'] == 1 ? 'checked' : ''}}>
                                            </label>
                                            <label>プレ出勤
                                                <input type="hidden" name="premie_flg" value="0">
                                                <input type="checkbox" name="premie_flg" id="premie_flg" value="1" {{$item['premieFlg'] == 1 ? 'checked' : ''}}>
                                            </label>
                                        </div>
                                    </div>
                                    @for($i = 2; $i<=7; $i++)
                                    <div class="hidden-content">
                                        <label>{{$item['syukin_date' . $i . '_w']}}</label>
                                        <input type="hidden" name="syukin_flg{{$i}}" id="syukin_flg{{$i}}" value="0">
                                        <input type="hidden" name="syukin_date{{$i}}" value="{{$item['syukin_date'.$i]}}">
                                        <div style="padding-left: 5px">
                                            <input type="checkbox" name="syukin_flg{{$i}}" id="syukin_flg{{$i}}" value="1" {{($item['syukin_flg'.$i] == '1') ? 'checked' : ''}}>
                                        </div>
                                        <div id="show_text{{$i}}" style="{{($item['date_se'.$i] == '-') ? 'display:none' : 'display:block'}}; padding-left: 10px">
                                            @if(!empty($item['date_start'. $i]) && !empty($item['date_end'. $i]) && $item['syukin_flg'.$i] == '1')
                                                <select name="date_start{{$i}}">
                                                    @foreach($range as $time)
                                                        <option {{$item['date_start'. $i] == date("H:i", $time) ? 'selected' : ''}} value="{{date("H:i", $time)}}">{{date("H:i", $time)}}</option>
                                                    @endforeach
                                                        <option {{$item['date_start'.$i] == '24:00' ? 'selected' : ''}} value="24:00">24:00</option>
                                                </select>
                                                <span>-</span>
                                                <select name="date_end{{$i}}">
                                                    @foreach($range as $time)
                                                        <option value="{{date("H:i", $time)}}" {{$item['date_end'. $i] == date("H:i", $time) ? 'selected' : ''}}>{{date("H:i", $time)}}</option>
                                                    @endforeach
                                                        <option {{$item['date_end'.$i] == '24:00' ? 'selected' : ''}} value="24:00">24:00</option>
                                                </select>
                                                @else
                                                <select name="date_start{{$i}}">
                                                    @foreach($range as $time)
                                                        <option value="{{date("H:i", $time)}}">{{date("H:i", $time)}}</option>
                                                    @endforeach
                                                        <option {{$item['date_start'.$i] == '24:00' ? 'selected' : ''}} value="24:00">24:00</option>
                                                </select>
                                                <span>-</span>
                                                <select name="date_end{{$i}}">
                                                    @foreach($range as $time)
                                                        <option value="{{date("H:i", $time)}}">{{date("H:i", $time)}}</option>
                                                    @endforeach
                                                        <option {{$item['date_end'.$i] == '24:00' ? 'selected' : ''}} value="24:00">24:00</option>
                                                </select>
                                            @endif
                                            <label>お泊まり
                                                <input type="hidden" name="tomari_flg{{$i}}" value="0">
                                                <input type="checkbox" name="tomari_flg{{$i}}" id="tomari_flg{{$i}}" value="1" {{$item['tomariFlg'.$i] == 1 ? 'checked' : ''}}>
                                            </label>
                                            <label>プレ出勤
                                                <input type="hidden" name="premie_flg{{$i}}" value="0">
                                                <input type="checkbox" name="premie_flg{{$i}}" id="premie_flg{{$i}}" value="1" {{$item['premieFlg'.$i] == 1 ? 'checked' : ''}}>
                                            </label>
                                        </div>
                                    </div>
                                    @endfor
                                </li>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </ul>
                <div style="text-align: center;">
                    <label class="btn-material">
                        <input type="submit" style="width: 142px;" class="btn btn-lg bg-aqua" value="保存する">
                    </label>
                </div>
            </form>
        </div>
    </section>
    @include('messages.error_form')
@endsection
