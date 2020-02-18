<?php
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <style>
        .checkbox-girl{
            width: 30%;
            float: left;
        }
    </style>
    <section class="content-header">
        <h1>更新</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="pull-left">
            <a href="{{url('home/delete/' . $data['item']['girl_cd'])}}" onclick="return confirm('削除します。宜しいですか？')" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>削除</span>
                </span>
            </a>
        </div>

        <div class="pull-left" style="padding-left: 20px">
            <a href="{{url('home/girl_img/' . $data['item']['girl_cd'])}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>画像アップロード</span>
                </span>
            </a>
        </div>

        <div class="pull-left" style="padding-left: 20px">
            <a href="{{url('/home/girl_diary/' . $data['item']['girl_cd'])}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>写メ日記</span>
                </span>
            </a>
        </div>
        <div class="pull-left" style="padding-left: 20px">
            <a href="{{url('/home/girlYusen/' . $data['item']['girl_cd'])}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>優先順位</span>
                </span>
            </a>
        </div>
        <div class="pull-left" style="padding-left: 20px">
            <a href="{{url('/home/girlSite/' . $data['item']['girl_cd'])}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>日記同時送信管理</span>
                </span>
            </a>
        </div>
        <div class="pull-right">
            <a href="{{url('/')}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>在籍女性へ戻る</span>
                </span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix"></div>
            <br>
            <ul class="nav nav-tabs" id="example-tabs" role="tablist" style="padding-bottom: 15px;">
                <li class="nav-item active">
                    <a id="tab-1" class="nav-link" data-toggle="tab" role="tab" href="#home">基本情報変更</a>
                </li>
                <li>
                    <a id="tab-2" data-toggle="tab" role="tab" href="#menu1">エリア情報</a>
                </li>
                <li>
                    <a id="tab-3" data-toggle="tab" role="tab" href="#menu2">詳細情報変更</a>
                </li>
                <li>
                    <a id="tab-4" data-toggle="tab" role="tab" href="#menu3">項目更新</a>
                </li>
                <li>
                    <a id="tab-5" data-toggle="tab" role="tab" href="#menu4">基本サービス変更</a>
                </li>
                <li>
                    <a id="tab-6" data-toggle="tab" role="tab" href="#menu5">オプションサービス変更</a>
                </li>
            </ul>
            <div class="tab-content">
                @if(isset($data['item']) && $data['item'])
                <div id="home" class="tab-pane fade in active">
                    <form method="post" action="{{url('home/update')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="girl_cd" value="{{$data['item']['girl_cd']}}">
                        <table>
                            <th style="width: 50%;float: left">
                                <div class="box-body">
                                    <div class="form-group col-xs-12">
                                        <label for="inputName" class="control-label">Name（お名前):</label>
                                        <input type="text" class="form-control input-lg" id="name" name="name" value="{{!empty($data['item']['girl_name']) ? $data['item']['girl_name'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">Tel (電話番号):</label>
                                        <input type="text" class="form-control input-lg" name="tel_girl" value="{{!empty($data['item']['girl_tel']) ? $data['item']['girl_tel'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">PW( パスワード): </label><br>
                                        <label class="control-label">{{isset($data['item']['girl_memo3']) ? $data['item']['girl_memo3'] : ''}} </label>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">Mail （メールアドレス):</label>
                                        <input type="email" class="form-control input-lg" id="mail" name="mail" value="{{!empty($data['item']['girl_mail']) ? $data['item']['girl_mail'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">WaitPlace（待機場所):</label>
                                        <input type="text" class="form-control input-lg" id="girl_memo7" name="girl_memo7" value="{{!empty($data['item']['girl_memo7']) ? $data['item']['girl_memo7'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">Age（年齢）:</label>
                                        <input type="text" class="form-control input-lg" id="age" name="age" value="{{!empty($data['item']['girl_age']) ? $data['item']['girl_age'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label  class="control-label">Height（身長）:</label>
                                        <input type="text" class="form-control input-lg" id="height" name="height" value="{{!empty($data['item']['girl_height']) ? $data['item']['girl_height'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">3-SizeB（バスト）:</label>
                                        <input type="text" class="form-control input-lg" id="girl_bust" name="girl_bust" value="{{!empty($data['item']['girl_bust']) ? $data['item']['girl_bust'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">BustCup (カップ）:</label>
                                        <select name="girl_cup" style="width: 100%;height: 35px;">
                                            @for($i='A'; $i<='Q'; $i++)
                                                <option value="{{$i}}" {{!empty($data['item']['girl_cup']) && $data['item']['girl_cup'] == $i ? 'selected' : ''}}>{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">3-SizeW ( ウエスト):</label>
                                        <input type="text" class="form-control input-lg" id="girl_west" name="girl_west" value="{{!empty($data['item']['girl_west']) ? $data['item']['girl_west'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">3-SizeH (ヒップ):</label>
                                        <input type="number" class="form-control input-lg" id="girl_hip" name="girl_hip" value="{{!empty($data['item']['girl_hip']) ? $data['item']['girl_hip'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="inputDate" class="control-label">Join Date (入店日):</label>
                                        <input type="text" class="datepicker form-control input-lg " id="join_date" name="join_date" value="{{!empty($data['item']['girl_join_date']) ? $data['item']['girl_join_date'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="inputDate" class="control-label">Quit Date ( 退店日):</label>
                                        <input type="text" class="datepicker form-control input-lg " id="quit_date" name="quit_date" value="{{!empty($data['item']['girl_memo5']) ? $data['item']['girl_memo5'] : ''}}">
                                    </div>
                                    <div class="form-group col-xs-12" style="padding-top: 20px">
                                        <label for="inputDate" class="control-label">おすすめ基準:</label>
                                        <select name="girl_memo4" style="width: 100%;height: 35px;">
                                            <option value="1" {{$data['item']['girl_memo4'] == 1 ? 'selected' : ''}}>グラディア</option>
                                            <option value="2" {{$data['item']['girl_memo4'] == 2 ? 'selected' : ''}}>アプロ</option>
                                            <option value="3" {{$data['item']['girl_memo4'] == 3 ? 'selected' : ''}}>アドにー</option>
                                            <option value="4" {{$data['item']['girl_memo4'] == 4 ? 'selected' : ''}}>エマン</option>
                                            <option value="5" {{$data['item']['girl_memo4'] == 5 ? 'selected' : ''}}>ギガス(要管理者許可)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">体型:</label>
                                        <select name="girl_memo34" style="width: 100%;height: 35px;">
                                            <option value="1" {{$data['item']['girl_memo34'] == 1 ? 'selected' : ''}}>細身</option>
                                            <option value="2" {{$data['item']['girl_memo34'] == 2 ? 'selected' : ''}}>やや細身</option>
                                            <option value="3" {{$data['item']['girl_memo34'] == 3 ? 'selected' : ''}}>普通</option>
                                            <option value="4" {{$data['item']['girl_memo34'] == 4 ? 'selected' : ''}}>ややポッチャリ</option>
                                            <option value="5" {{$data['item']['girl_memo34'] == 5 ? 'selected' : ''}}>ポッチャリ</option>
                                        </select>
                                    </div>
                                </div>
                            </th>
                            <th style="width: 50%; float: right">
                                <div class="box-body">
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">コメント:</label>
                                        <textarea name="girl_memo1" id="girl_memo1" style="width: 100%; height: 200px">{{!empty($data['item']['girl_memo1']) ? $data['item']['girl_memo1'] : ''}}</textarea>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">私だけの特別イベント:</label>
                                        <textarea name="girl_memo2" id="girl_memo2" style="width: 100%; height: 200px">{{!empty($data['item']['girl_memo2']) ? $data['item']['girl_memo2'] : ''}}</textarea>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">(ローカルサイトランキングの)本人からコメント:</label>
                                        <textarea name="girl_memo9" id="girl_memo37" style="width: 100%; height: 200px">{{!empty($data['item']['girl_memo37']) ? $data['item']['girl_memo37'] : ''}}</textarea>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label class="control-label">外部へのリンク（URL)を貼る;</label>
                                        <textarea name="girl_memo37" id="girl_memo9" style="width: 100%; height: 50px">{{!empty($data['item']['girl_memo9']) ? $data['item']['girl_memo9'] : ''}}</textarea>
                                    </div>
                                </div>
                            </th>
                        </table>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix" style="float: right">
                            <label class="btn-material">
                                <input type="submit" value="保存する" class="btn btn-lg bg-aqua">
                            </label>
                        </div>
                    </form>
                </div>
                @endif

                @if(isset($data['item']) && $data['item'])
                    <div id="menu1" class="tab-pane fade">
                        <form method="post" action="{{url('home/update_area')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="girl_cd" value="{{$data['item']['girl_cd']}}">
                            <div class="box-body">
                                <div class="form-group col-xs-12">
                                    <input type="hidden" name="girl_memo60" value="0">
                                    <input type="checkbox" id="girl_memo60" name="girl_memo60" value="1" {{$data['item']['girl_memo60'] == 1 ? 'checked' : ''}}>
                                    <label class="control-label">西東京</label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="hidden" name="girl_memo61" value="0">
                                    <input type="checkbox" id="girl_memo61" name="girl_memo61" value="1" {{$data['item']['girl_memo61'] == 1 ? 'checked' : ''}}>
                                    <label class="control-label">東京23区</label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="hidden" name="girl_memo62" value="0">
                                    <input type="checkbox" id="girl_memo62" name="girl_memo62" value="1" {{$data['item']['girl_memo62'] == 1 ? 'checked' : ''}}>
                                    <label class="control-label">埼玉</label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="hidden" name="girl_memo63" value="0">
                                    <input type="checkbox" id="girl_memo63" name="girl_memo63" value="1" {{$data['item']['girl_memo63'] == 1 ? 'checked' : ''}}>
                                    <label class="control-label">千葉</label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="hidden" name="girl_memo64" value="0">
                                    <input type="checkbox" id="girl_memo64" name="girl_memo64" value="1" {{$data['item']['girl_memo64'] == 1 ? 'checked' : ''}}>
                                    <label class="control-label">神奈川</label>
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
                @endif


                @if(isset($data['item']) && $data['item'])
                    <div id="menu2" class="tab-pane fade">
                        <form method="post" action="{{url('home/update_2')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="girl_cd" value="{{$data['item']['girl_cd']}}">
                            <div class="box-body">
                                <div class="form-group col-xs-12">
                                    <input type="hidden" name="new_flg" value="0">
                                    <input type="checkbox" id="new_flg" name="new_flg" value="1" {{$data['item']['new_flg'] == 'on' ? 'checked' : ''}}>
                                    <label for="inputName" class="control-label">New表示</label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="hidden" name="quit_flg" value="0">
                                    <input type="checkbox" id="quit_flg_1" name="quit_flg" value="1" {{$data['item']['quit_flg'] == 'on' ? 'checked' : ''}}>
                                    <label for="inputName" class="control-label">在籍表示</label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="hidden" name="quit_flg" value="0">
                                    <input type="checkbox" id="quit_flg_2" name="quit_flg" value="3" {{$data['item']['quit_flg'] == 'on2' ? 'checked' : ''}}>
                                    <label for="inputName" class="control-label">在籍テストアップ</label>
                                </div>
                                <div class="form-group col-xs-12" id="hidden_quit" style="display: block">
                                    <input type="hidden" name="quit_flg" value="0">
                                    <input type="checkbox" id="quit_flg_3" name="quit_flg" value="4" {{$data['item']['quit_flg'] == 'on3' ? 'checked' : ''}}>
                                    <label for="inputName" class="control-label">在籍オフ・在籍数無変化</label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">星:</label>
                                    <select name="girl_memo10" style="width: 100%;height: 35px;">
                                        <option value="0" {{$data['item']['girl_memo10'] == 0 ? 'selected' : ''}}>-</option>
                                        <option value="1" {{$data['item']['girl_memo10'] == 1 ? 'selected' : ''}}>★</option>
                                        <option value="2" {{$data['item']['girl_memo10'] == 2 ? 'selected' : ''}}>★★</option>
                                        <option value="3" {{$data['item']['girl_memo10'] == 3 ? 'selected' : ''}}>★★★</option>
                                        <option value="4" {{$data['item']['girl_memo10'] == 4 ? 'selected' : ''}}>★★★★</option>
                                        <option value="5" {{$data['item']['girl_memo10'] == 5 ? 'selected' : ''}}>★★★★★</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="radio" name="girl_memo36" value="0" {{(isset($data['item']['girl_memo36']) && $data['item']['girl_memo36'] == 0) ? 'checked' : ''}}>出勤制<br>
                                    <input type="radio" name="girl_memo36" value="1" {{(isset($data['item']['girl_memo36']) && $data['item']['girl_memo36'] == 1) ? 'checked' : ''}}>登録制
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="checkbox-girl">
                                        <input type="hidden" name="girl_memo12" value="0">
                                        <input type="checkbox" id="girl_memo12" value="1" name="girl_memo12" {{$data['item']['girl_memo12'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">初割</label>
                                    </div>
                                    <div>
                                        <input type="hidden" name="girl_memo75" value="0">
                                        <input type="checkbox" id="girl_memo75" value="1" name="girl_memo75" {{$data['item']['girl_memo75'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">お泊まり</label>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="checkbox-girl">
                                        <input type="hidden" name="girl_memo15" value="0">
                                        <input type="checkbox" id="girl_memo15" value="1" name="girl_memo15" {{$data['item']['girl_memo15'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">リピ割</label>
                                    </div>
                                    <div>
                                        <input type="hidden" name="girl_memo65" value="0">
                                        <input type="checkbox" id="girl_memo65" name="girl_memo65" value="1" {{$data['item']['girl_memo65'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">ロイヤリストS</label>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="checkbox-girl">
                                        <input type="hidden" name="girl_memo70" value="0">
                                        <input type="checkbox" id="girl_memo70" name="girl_memo70" value="1" {{$data['item']['girl_memo70'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">会員価格</label>
                                    </div>
                                    <div>
                                        <input type="hidden" name="girl_memo66" value="0">
                                        <input type="checkbox" id="girl_memo66" name="girl_memo66" value="1" {{$data['item']['girl_memo66'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">ロイヤリストL</label>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="checkbox-girl">
                                        <input type="hidden" name="girl_memo17" value="0">
                                        <input type="checkbox" id="girl_memo17" name="girl_memo17" value="1" {{$data['item']['girl_memo17'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">自宅OK</label>
                                    </div>
                                    <div>
                                        <input type="hidden" name="girl_memo67" value="0">
                                        <input type="checkbox" id="girl_memo67" name="girl_memo67" value="1" {{$data['item']['girl_memo67'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label"> インフィニスト</label>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="checkbox-girl">
                                        <input type="hidden" name="girl_memo19" value="0">
                                        <input type="checkbox" id="girl_memo19" name="girl_memo19" value="1" {{$data['item']['girl_memo19'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">タバコ</label>
                                    </div>
                                    <div>
                                        <input type="hidden" name="girl_memo71" value="0">
                                        <input type="checkbox" id="girl_memo71" name="girl_memo71" value="1" {{$data['item']['girl_memo71'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">エロリンピック優勝</label>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="checkbox-girl">
                                        <label class="control-label"></label>
                                    </div>
                                    <div>
                                        <input type="hidden" name="girl_memo72" value="0">
                                        <input type="checkbox" id="girl_memo72" name="girl_memo72" value="1" {{$data['item']['girl_memo72'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">エロリンピック第二位</label>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="checkbox-girl">
                                        <label class="control-label"></label>
                                    </div>
                                    <div>
                                        <input type="hidden" name="girl_memo73" value="0">
                                        <input type="checkbox" id="girl_memo73" name="girl_memo73" value="1" {{$data['item']['girl_memo73'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">エロリンピック第三位</label>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="checkbox-girl">
                                        <label class="control-label"></label>
                                    </div>
                                    <div>
                                        <input type="hidden" name="girl_memo68" value="0">
                                        <input type="checkbox" id="girl_memo68" name="girl_memo68" value="1" {{$data['item']['girl_memo68'] == 1 ? 'checked' : ''}}>
                                        <label class="control-label">エロリンピック第四位</label>
                                    </div>
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
                @endif

                @if(isset($data['item']) && $data['item'])
                    <div id="menu3" class="tab-pane fade">
                        <form method="post" action="{{url('home/update_4')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="girl_cd" value="{{$data['item']['girl_cd']}}">
                            <div class="box-body">
                                <div class="form-group col-xs-12">
                                    <label class="control-label">出身地</label>
                                    <input type="text" class="form-control input-lg" id="girl_memo40" name="girl_memo40" value="{{!empty($data['item']['girl_memo40']) ? $data['item']['girl_memo40'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">血液型</label>
                                    <input type="text" class="form-control input-lg" id="girl_memo41" name="girl_memo41" value="{{!empty($data['item']['girl_memo41']) ? $data['item']['girl_memo41'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">性格</label>
                                    <input type="text" class="form-control input-lg" id="girl_memo42" name="girl_memo42" value="{{!empty($data['item']['girl_memo42']) ? $data['item']['girl_memo42'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">趣味</label>
                                    <input type="text" class="form-control input-lg" id="girl_memo43" name="girl_memo43" value="{{!empty($data['item']['girl_memo43']) ? $data['item']['girl_memo43'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">性感帯</label>
                                    <input type="text" class="form-control input-lg" id="girl_memo44" name="girl_memo44" value="{{!empty($data['item']['girl_memo44']) ? $data['item']['girl_memo44'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">履歴</label>
                                    <input type="text" class="form-control input-lg" id="girl_memo45" name="girl_memo45" value="{{!empty($data['item']['girl_memo45']) ? $data['item']['girl_memo45'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">タバコ</label>
                                    <input type="text" class="form-control input-lg" id="girl_memo46" name="girl_memo46" value="{{!empty($data['item']['girl_memo46']) ? $data['item']['girl_memo46'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">ルナ予定日</label>
                                    <input type="text" class="form-control input-lg" id="girl_memo47" name="girl_memo47" value="{{!empty($data['item']['girl_memo47']) ? $data['item']['girl_memo47'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="text" class="form-control input-lg" id="girl_memo48" name="girl_memo48" value="{{!empty($data['item']['girl_memo48']) ? $data['item']['girl_memo48'] : ''}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="text" class="form-control input-lg" id="girl_memo49" name="girl_memo49" value="{{!empty($data['item']['girl_memo49']) ? $data['item']['girl_memo49'] : ''}}">
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
                @endif
                @if(isset($data['item']) && $data['item'])
                    <div id="menu4" class="tab-pane fade">
                        <form method="post" action="{{url('home/update_5')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="girl_cd" value="{{$data['item']['girl_cd']}}">
                            <div class="box-body">
                                <div class="form-group col-xs-12">
                                    <label class="control-label">ディープキス</label><br>
                                    <input type="radio" name="girl_memo50" value="0" {{empty($data['item']['girl_memo50']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo50" value="1" {{$data['item']['girl_memo50'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo50" value="2" {{$data['item']['girl_memo50'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo50" value="3" {{$data['item']['girl_memo50'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo50" value="4" {{$data['item']['girl_memo50'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">シャワー内プレイ</label><br>
                                    <input type="radio" name="girl_memo51" value="0" {{empty($data['item']['girl_memo51']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo51" value="1" {{$data['item']['girl_memo51'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo51" value="2" {{$data['item']['girl_memo51'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo51" value="3" {{$data['item']['girl_memo51'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo51" value="4" {{$data['item']['girl_memo51'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">全身リップ</label><br>
                                    <input type="radio" name="girl_memo52" value="0" {{empty($data['item']['girl_memo52']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo52" value="1" {{$data['item']['girl_memo52'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo52" value="2" {{$data['item']['girl_memo52'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo52" value="3" {{$data['item']['girl_memo52'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo52" value="4" {{$data['item']['girl_memo52'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">生フェラ</label><br>
                                    <input type="radio" name="girl_memo53" value="0" {{empty($data['item']['girl_memo53']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo53" value="1" {{$data['item']['girl_memo53'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo53" value="2" {{$data['item']['girl_memo53'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo53" value="3" {{$data['item']['girl_memo53'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo53" value="4" {{$data['item']['girl_memo53'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">玉舐め</label><br>
                                    <input type="radio" name="girl_memo54" value="0" {{empty($data['item']['girl_memo54']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo54" value="1" {{$data['item']['girl_memo54'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo54" value="2" {{$data['item']['girl_memo54'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo54" value="3" {{$data['item']['girl_memo54'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo54" value="4" {{$data['item']['girl_memo54'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">６９</label><br>
                                    <input type="radio" name="girl_memo55" value="0" {{empty($data['item']['girl_memo55']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo55" value="1" {{$data['item']['girl_memo55'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo55" value="2" {{$data['item']['girl_memo55'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo55" value="3" {{$data['item']['girl_memo55'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo55" value="4" {{$data['item']['girl_memo55'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">アナルリップ</label><br>
                                    <input type="radio" name="girl_memo56" value="0" {{empty($data['item']['girl_memo56']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo56" value="1" {{$data['item']['girl_memo56'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo56" value="2" {{$data['item']['girl_memo56'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo56" value="3" {{$data['item']['girl_memo56'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo56" value="4" {{$data['item']['girl_memo56'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">指入れ</label><br>
                                    <input type="radio" name="girl_memo57" value="0" {{empty($data['item']['girl_memo57']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo57" value="1" {{$data['item']['girl_memo57'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo57" value="2" {{$data['item']['girl_memo57'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo57" value="3" {{$data['item']['girl_memo57'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo57" value="4" {{$data['item']['girl_memo57'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">素股</label><br>
                                    <input type="radio" name="girl_memo58" value="0" {{empty($data['item']['girl_memo58']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo58" value="1" {{$data['item']['girl_memo58'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo58" value="2" {{$data['item']['girl_memo58'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo58" value="3" {{$data['item']['girl_memo58'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo58" value="4" {{$data['item']['girl_memo58'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">口内発財</label><br>
                                    <input type="radio" name="girl_memo59" value="0" {{empty($data['item']['girl_memo59']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo59" value="1" {{$data['item']['girl_memo59'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo59" value="2" {{$data['item']['girl_memo59'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo59" value="3" {{$data['item']['girl_memo59'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo59" value="4" {{$data['item']['girl_memo59'] == 4 ? 'checked' : ''}}> ｘ
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
                @endif
                @if(isset($data['item']) && $data['item'])
                    <div id="menu5" class="tab-pane fade">
                        <form method="post" action="{{url('home/update_3')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="girl_cd" value="{{$data['item']['girl_cd']}}">
                            <div class="box-body">
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No1 パンティ</label><br>
                                    <input type="radio" name="girl_memo20" value="0" {{empty($data['item']['girl_memo20']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo20" value="1" {{$data['item']['girl_memo20'] == 0 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo20" value="2" {{$data['item']['girl_memo20'] == 0 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo20" value="3" {{$data['item']['girl_memo20'] == 0 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo20" value="4" {{$data['item']['girl_memo20'] == 0 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No2 パンスト</label><br>
                                    <input type="radio" name="girl_memo21" value="0" {{empty($data['item']['girl_memo21']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo21" value="1" {{$data['item']['girl_memo21'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo21" value="2" {{$data['item']['girl_memo21'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo21" value="3" {{$data['item']['girl_memo21'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo21" value="4" {{$data['item']['girl_memo21'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No3 アイマスク</label><br>
                                    <input type="radio" name="girl_memo22" value="0" {{empty($data['item']['girl_memo22']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo22" value="1" {{$data['item']['girl_memo22'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo22" value="2" {{$data['item']['girl_memo22'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo22" value="3" {{$data['item']['girl_memo22'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo22" value="4" {{$data['item']['girl_memo22'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No4 電マ</label><br>
                                    <input type="radio" name="girl_memo23" value="0" {{empty($data['item']['girl_memo23']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo23" value="1" {{$data['item']['girl_memo23'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo23" value="2" {{$data['item']['girl_memo23'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo23" value="3" {{$data['item']['girl_memo23'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo23" value="4" {{$data['item']['girl_memo23'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No5 ピンクローター</label><br>
                                    <input type="radio" name="girl_memo24" value="0" {{empty($data['item']['girl_memo24']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo24" value="1" {{$data['item']['girl_memo24'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo24" value="2" {{$data['item']['girl_memo24'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo24" value="3" {{$data['item']['girl_memo24'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo24" value="4" {{$data['item']['girl_memo24'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No6 放尿</label><br>
                                    <input type="radio" name="girl_memo25" value="0" {{empty($data['item']['girl_memo25']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo25" value="1" {{$data['item']['girl_memo25'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo25" value="2" {{$data['item']['girl_memo25'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo25" value="3" {{$data['item']['girl_memo25'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo25" value="4" {{$data['item']['girl_memo25'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No7 バイブレーター </label><br>
                                    <input type="radio" name="girl_memo26" value="0" {{empty($data['item']['girl_memo26']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo26" value="1" {{$data['item']['girl_memo26'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo26" value="2" {{$data['item']['girl_memo26'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo26" value="3" {{$data['item']['girl_memo26'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo26" value="4" {{$data['item']['girl_memo26'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No8 顔面発財</label><br>
                                    <input type="radio" name="girl_memo27" value="0" {{empty($data['item']['girl_memo27']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo27" value="1" {{$data['item']['girl_memo27'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo27" value="2" {{$data['item']['girl_memo27'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo27" value="3" {{$data['item']['girl_memo27'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo27" value="4" {{$data['item']['girl_memo27'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No9 オナニー鑑賞</label><br>
                                    <input type="radio" name="girl_memo28" value="0" {{empty($data['item']['girl_memo28']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo28" value="1" {{$data['item']['girl_memo28'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo28" value="2" {{$data['item']['girl_memo28'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo28" value="3" {{$data['item']['girl_memo28'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo28" value="4" {{$data['item']['girl_memo28'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No10 即尺</label><br>
                                    <input type="radio" name="girl_memo29" value="0" {{empty($data['item']['girl_memo29']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo29" value="1" {{$data['item']['girl_memo29'] == 1 ? 'checked' : ''}} > ◎<br>
                                    <input type="radio" name="girl_memo29" value="2" {{$data['item']['girl_memo29'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo29" value="3" {{$data['item']['girl_memo29'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo29" value="4" {{$data['item']['girl_memo29'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No11 AF</label><br>
                                    <input type="radio" name="girl_memo30" value="0" {{empty($data['item']['girl_memo30']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo30" value="1" {{$data['item']['girl_memo30'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo30" value="2" {{$data['item']['girl_memo30'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo30" value="3" {{$data['item']['girl_memo30'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo30" value="4" {{$data['item']['girl_memo30'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No12 ノーパン・ノーブラ待ち合わせ</label><br>
                                    <input type="radio" name="girl_memo31" value="0" {{empty($data['item']['girl_memo31']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo31" value="1" {{$data['item']['girl_memo31'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo31" value="2" {{$data['item']['girl_memo31'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo31" value="3" {{$data['item']['girl_memo31'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo31" value="4" {{$data['item']['girl_memo31'] == 4 ? 'checked' : ''}}> ｘ
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="control-label">No13 とっびこIN待ち合わせ</label><br>
                                    <input type="radio" name="girl_memo32" value="0" {{empty($data['item']['girl_memo32']) ? 'checked' : ''}}> -<br>
                                    <input type="radio" name="girl_memo32" value="1" {{$data['item']['girl_memo32'] == 1 ? 'checked' : ''}}> ◎<br>
                                    <input type="radio" name="girl_memo32" value="2" {{$data['item']['girl_memo32'] == 2 ? 'checked' : ''}}> o<br>
                                    <input type="radio" name="girl_memo32" value="3" {{$data['item']['girl_memo32'] == 3 ? 'checked' : ''}}> △<br>
                                    <input type="radio" name="girl_memo32" value="4" {{$data['item']['girl_memo32'] == 4 ? 'checked' : ''}}> ｘ
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
                @endif
            </div>
        </div>
    </section>
    @include('messages.error_form')
@endsection
