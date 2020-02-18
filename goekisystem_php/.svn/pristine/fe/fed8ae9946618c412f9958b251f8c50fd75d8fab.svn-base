<?php
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
    <h1>新規作成</h1>
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
    <form method="post" action="{{url('home/add_girl')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
                <h3 class="box-title">基本情報
                    <small class="d-block small mt-1"></small>
                </h3>
            </div>
            <table>
                <th style="width: 50%;float: left">
                <div class="box-body">
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">Name（お名前):</label>
                        <input type="text" class="form-control input-lg" id="name" name="name">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">Tel (電話番号):</label>
                        <input type="number" class="form-control input-lg" id="tel" name="tel">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">Mail （メールアドレス):</label>
                        <input type="email" class="form-control input-lg" id="mail" name="mail">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">WaitPlace（待機場所):</label>
                        <input type="text" class="form-control input-lg" id="girl_memo7" name="girl_memo7">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">Age（年齢）:</label>
                        <input type="text" class="form-control input-lg" id="age" name="age">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">Height（身長）:</label>
                        <input type="text" class="form-control input-lg" id="height" name="height">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">3-SizeB（バスト）:</label>
                        <input type="text" class="form-control input-lg" id="girl_bust" name="girl_bust">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">BustCup (カップ）:</label>
                        <select name="bust_cup" style="width: 100%;height: 35px;">
                            @for($i='A'; $i<='Q'; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">3-SizeW ( ウエスト):</label>
                        <input type="text" class="form-control input-lg" id="girl_west" name="girl_west">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputName" class="control-label">3-SizeH (ヒップ):</label>
                        <input type="number" class="form-control input-lg" id="girl_hip" name="girl_hip">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputDate" class="control-label">Join Date (入店日):</label>
                        <input type="text" class="datepicker form-control input-lg " id="join_date" name="join_date">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inputDate" class="control-label">Quit Date ( 退店日):</label>
                        <input type="text" class="datepicker form-control input-lg " id="girl_memo5" name="girl_memo5" disabled="disabled">
                    </div>
                    <div class="form-group col-xs-12" style="padding-top: 20px">
                        <label for="inputDate" class="control-label">おすすめ基準:</label>
                        <select name="girl_memo4" style="width: 100%;height: 35px;">
                            <option value="1" selected>グラディア</option>
                            <option value="2">アプロ</option>
                            <option value="3">アドにー</option>
                            <option value="4">エマン</option>
                            <option value="5">ギガス(要管理者許可)</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="control-label">体型:</label>
                        <select name="girl_memo34" style="width: 100%;height: 35px;">
                            <option value="1" selected>細身</option>
                            <option value="2">やや細身</option>
                            <option value="3">普通</option>
                            <option value="4">ややポッチャリ</option>
                            <option value="5">ポッチャリ</option>
                        </select>
                    </div>
                </div>
                </th>
                <th style="width: 50%; float: right">
                    <div class="box-body">
                        <div class="form-group col-xs-12">
                            <label class="control-label">コメント:</label>
                            <textarea name="girl_memo1" id="girl_memo1" style="width: 100%; height: 200px"></textarea>
                        </div>
                        <div class="form-group col-xs-12">
                            <label class="control-label">私だけの特別イベント:</label>
                            <textarea name="girl_memo2" id="girl_memo2" style="width: 100%; height: 200px"></textarea>
                        </div>
                        <div class="form-group col-xs-12">
                            <label class="control-label">(ローカルサイトランキングの)本人からコメント:</label>
                            <textarea name="girl_memo37" id="girl_memo37" style="width: 100%; height: 200px"></textarea>
                        </div>
                    </div>
                </th>
            </table>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
                <h3 class="box-title">エリア情報
                    <small class="d-block small mt-1">ホームページに表示される女性の行動エリアを設定します。</small>
                </h3>
            </div>
            <div class="box-body">
                <div class="form-group col-xs-12">
                    <input type="hidden" name="girl_memo60" value="0">
                    <input type="checkbox" id="girl_memo60" name="girl_memo60" value="1" checked>
                    <label class="control-label">西東京</label>
                </div>
                <div class="form-group col-xs-12">
                    <input type="hidden" name="girl_memo61" value="0">
                    <input type="checkbox" id="girl_memo61" name="girl_memo61" value="1"  checked>
                    <label class="control-label">東京23区</label>
                </div>
                <div class="form-group col-xs-12">
                    <input type="hidden" name="girl_memo62" value="0">
                    <input type="checkbox" id="girl_memo62" name="girl_memo62" value="1"  checked>
                    <label class="control-label">埼玉</label>
                </div>
                <div class="form-group col-xs-12">
                    <input type="hidden" name="girl_memo63" value="0">
                    <input type="checkbox" id="girl_memo63" name="girl_memo63" value="1"  checked>
                    <label class="control-label">千葉</label>
                </div>
                <div class="form-group col-xs-12">
                    <input type="hidden" name="girl_memo64" value="0">
                    <input type="checkbox" id="girl_memo64" name="girl_memo64" value="1"  checked>
                    <label class="control-label">神奈川</label>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
                <h3 class="box-title">詳細情報
                    <small class="d-block small mt-1"></small>
                </h3>
            </div>
            <div class="box-body">
                <div class="form-group col-xs-12">
                    <input type="hidden" name="new_flg" value="0">
                    <input type="checkbox" id="new_flg" name="new_flg" value="1" checked>
                    <label for="inputName" class="control-label">New表示</label>
                </div>
                <div class="form-group col-xs-12">
                    <input type="hidden" name="quit_flg" value="0">
                    <input type="checkbox" id="quit_flg" name="quit_flg" value="1" checked>
                    <label for="inputName" class="control-label">在籍表示</label>
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">星:</label>
                    <select name="girl_memo10" style="width: 100%;height: 35px;">
                        <option value="0" selected>-</option>
                        <option value="1">★</option>
                        <option value="2">★★</option>
                        <option value="3">★★★</option>
                        <option value="4">★★★★</option>
                        <option value="5">★★★★★</option>
                    </select>
                </div>
                <div class="form-group col-xs-12">
                    <input type="radio" name="girl_memo36" value="0" checked>出勤制<br>
                    <input type="radio" name="girl_memo36" value="1">登録制
                </div>
                <div class="form-group col-xs-12">
                    <div class="checkbox-girl">
                        <input type="hidden" name="girl_memo12" value="0">
                        <input type="checkbox" id="girl_memo12" value="1" name="girl_memo12">
                        <label class="control-label">初割</label>
                    </div>
                    <div>
                        <input type="hidden" name="girl_memo75" value="0">
                        <input type="checkbox" id="girl_memo75" value="1" name="girl_memo75">
                        <label class="control-label">お泊まり</label>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <div class="checkbox-girl">
                        <input type="hidden" name="girl_memo15" value="0">
                        <input type="checkbox" id="girl_memo15" value="1" name="girl_memo15">
                        <label class="control-label">リピ割</label>
                    </div>
                    <div>
                        <input type="hidden" name="girl_memo73" value="0">
                        <input type="checkbox" id="girl_memo73" value="1" name="girl_memo73">
                        <label class="control-label">アロマ</label>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <div class="checkbox-girl">
                        <input type="hidden" name="girl_memo70" value="0">
                        <input type="checkbox" id="girl_memo70" name="girl_memo70" value="1">
                        <label class="control-label">会員価格</label>
                    </div>
                    <div>
                        <input type="hidden" name="girl_memo71" value="0">
                        <input type="checkbox" name="girl_memo71" value="1">
                        <label class="control-label">ストレッチ</label>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <div class="checkbox-girl">
                        <input type="hidden" name="girl_memo17" value="0">
                        <input type="checkbox" id="girl_memo17" name="girl_memo17" value="1">
                        <label class="control-label">自宅OK</label>
                    </div>
                    <div>
                        <input type="hidden" name="girl_memo72" value="0">
                        <input type="checkbox" id="girl_memo72" name="girl_memo72" value="1">
                        <label class="control-label">家政婦</label>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <div class="checkbox-girl">
                        <input type="hidden" name="girl_memo19" value="0">
                        <input type="checkbox" id="girl_memo19" name="girl_memo19" value="1">
                        <label class="control-label">タバコ</label>
                    </div>
                    <div>
                        <input type="hidden" name="girl_memo65" value="0">
                        <input type="checkbox" id="girl_memo65" name="girl_memo65" value="1">
                        <label class="control-label">ロイヤリストS</label>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <div class="checkbox-girl">
                        <input type="hidden" name="girl_memo18" value="0">
                        <input type="checkbox" id="girl_memo18" name="girl_memo18" value="1">
                        <label class="control-label">ランクイン</label>
                    </div>
                    <div>
                        <input type="hidden" name="girl_memo66" value="0">
                        <input type="checkbox" id="girl_memo66" name="girl_memo66" value="1">
                        <label class="control-label">ロイヤリストL</label>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <div class="checkbox-girl">
                        <input type="hidden" name="girl_memo13" value="0">
                        <input type="checkbox" id="girl_memo13" name="girl_memo13" value="1">
                        <label class="control-label">やまわけ</label>
                    </div>
                    <div>
                        <input type="hidden" name="girl_memo67" value="0">
                        <input type="checkbox" id="girl_memo67" name="girl_memo67" value="1">
                        <label class="control-label">インフィニスト</label>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <div class="checkbox-girl">
                        <label class="control-label"></label>
                    </div>
                    <div>
                        <input type="hidden" name="girl_memo68" value="0">
                        <input type="checkbox" id="girl_memo68" name="girl_memo68" value="1">
                        <label class="control-label">ドライブ劇場Aコース</label>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <div class="checkbox-girl">
                        <label class="control-label"></label>
                    </div>
                    <div>
                        <input type="hidden" name="girl_memo69" value="0">
                        <input type="checkbox" id="girl_memo69" name="girl_memo69" value="1">
                        <label class="control-label">ドライブ劇場Bコース</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
                <h3 class="box-title">項目
                    <small class="d-block small mt-1"></small>
                </h3>
            </div>
            <div class="box-body">
                <div class="form-group col-xs-12">
                    <label class="control-label">出身地</label>
                    <input type="text" class="form-control input-lg" id="girl_memo40" name="girl_memo40">
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">血液型</label>
                    <input type="text" class="form-control input-lg" id="girl_memo41" name="girl_memo41">
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">性格</label>
                    <input type="text" class="form-control input-lg" id="girl_memo42" name="girl_memo42">
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">趣味</label>
                    <input type="text" class="form-control input-lg" id="girl_memo43" name="girl_memo43">
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">性感帯</label>
                    <input type="text" class="form-control input-lg" id="girl_memo44" name="girl_memo44">
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">履歴</label>
                    <input type="text" class="form-control input-lg" id="girl_memo45" name="girl_memo45">
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">タバコ</label>
                    <input type="text" class="form-control input-lg" id="girl_memo46" name="girl_memo46">
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">ルナ予定日</label>
                    <input type="text" class="form-control input-lg" id="girl_memo47" name="girl_memo47">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control input-lg" id="girl_memo48" name="girl_memo48">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control input-lg" id="girl_memo49" name="girl_memo49">
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
                <h3 class="box-title">基本サービス
                    <small class="d-block small mt-1"></small>
                </h3>
            </div>
            <div class="box-body">
                <div class="form-group col-xs-12">
                    <label class="control-label">ディープキス</label><br>
                    <input type="radio" name="girl_memo50" value="0" checked> -<br>
                    <input type="radio" name="girl_memo50" value="1"> ◎<br>
                    <input type="radio" name="girl_memo50" value="2"> o<br>
                    <input type="radio" name="girl_memo50" value="3"> △<br>
                    <input type="radio" name="girl_memo50" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">シャワー内プレイ</label><br>
                    <input type="radio" name="girl_memo51" value="0" checked> -<br>
                    <input type="radio" name="girl_memo51" value="1"> ◎<br>
                    <input type="radio" name="girl_memo51" value="2"> o<br>
                    <input type="radio" name="girl_memo51" value="3"> △<br>
                    <input type="radio" name="girl_memo51" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">NO NAME</label><br>
                    <input type="radio" name="girl_memo52" value="0" checked> -<br>
                    <input type="radio" name="girl_memo52" value="1"> ◎<br>
                    <input type="radio" name="girl_memo52" value="2"> o<br>
                    <input type="radio" name="girl_memo52" value="3"> △<br>
                    <input type="radio" name="girl_memo52" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">生フェラ</label><br>
                    <input type="radio" name="girl_memo53" value="0" checked> -<br>
                    <input type="radio" name="girl_memo53" value="1"> ◎<br>
                    <input type="radio" name="girl_memo53" value="2"> o<br>
                    <input type="radio" name="girl_memo53" value="3"> △<br>
                    <input type="radio" name="girl_memo53" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">玉舐め</label><br>
                    <input type="radio" name="girl_memo54" value="0" checked> -<br>
                    <input type="radio" name="girl_memo54" value="1"> ◎<br>
                    <input type="radio" name="girl_memo54" value="2"> o<br>
                    <input type="radio" name="girl_memo54" value="3"> △<br>
                    <input type="radio" name="girl_memo54" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">６９</label><br>
                    <input type="radio" name="girl_memo55" value="0" checked> -<br>
                    <input type="radio" name="girl_memo55" value="1"> ◎<br>
                    <input type="radio" name="girl_memo55" value="2"> o<br>
                    <input type="radio" name="girl_memo55" value="3"> △<br>
                    <input type="radio" name="girl_memo55" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">アナルリップ</label><br>
                    <input type="radio" name="girl_memo56" value="0" checked> -<br>
                    <input type="radio" name="girl_memo56" value="1"> ◎<br>
                    <input type="radio" name="girl_memo56" value="2"> o<br>
                    <input type="radio" name="girl_memo56" value="3"> △<br>
                    <input type="radio" name="girl_memo56" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">指入れ</label><br>
                    <input type="radio" name="girl_memo57" value="0" checked> -<br>
                    <input type="radio" name="girl_memo57" value="1"> ◎<br>
                    <input type="radio" name="girl_memo57" value="2"> o<br>
                    <input type="radio" name="girl_memo57" value="3"> △<br>
                    <input type="radio" name="girl_memo57" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">素股</label><br>
                    <input type="radio" name="girl_memo58" value="0" checked> -<br>
                    <input type="radio" name="girl_memo58" value="1"> ◎<br>
                    <input type="radio" name="girl_memo58" value="2"> o<br>
                    <input type="radio" name="girl_memo58" value="3"> △<br>
                    <input type="radio" name="girl_memo58" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">口内発財</label><br>
                    <input type="radio" name="girl_memo59" value="0" checked> -<br>
                    <input type="radio" name="girl_memo59" value="1"> ◎<br>
                    <input type="radio" name="girl_memo59" value="2"> o<br>
                    <input type="radio" name="girl_memo59" value="3"> △<br>
                    <input type="radio" name="girl_memo59" value="4"> ｘ
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
                <h3 class="box-title">オプションサービス
                    <small class="d-block small mt-1"></small>
                </h3>
            </div>
            <div class="box-body">
                <div class="form-group col-xs-12">
                    <label class="control-label">No1 パンティ</label><br>
                    <input type="radio" name="girl_memo20" value="0" checked> -<br>
                    <input type="radio" name="girl_memo20" value="1"> ◎<br>
                    <input type="radio" name="girl_memo20" value="2"> o<br>
                    <input type="radio" name="girl_memo20" value="3"> △<br>
                    <input type="radio" name="girl_memo20" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No2 パンスト</label><br>
                    <input type="radio" name="girl_memo21" value="0" checked> -<br>
                    <input type="radio" name="girl_memo21" value="1"> ◎<br>
                    <input type="radio" name="girl_memo21" value="2"> o<br>
                    <input type="radio" name="girl_memo21" value="3"> △<br>
                    <input type="radio" name="girl_memo21" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No3 アイマスク</label><br>
                    <input type="radio" name="girl_memo22" value="0" checked> -<br>
                    <input type="radio" name="girl_memo22" value="1"> ◎<br>
                    <input type="radio" name="girl_memo22" value="2"> o<br>
                    <input type="radio" name="girl_memo22" value="3"> △<br>
                    <input type="radio" name="girl_memo22" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No4 電マ</label><br>
                    <input type="radio" name="girl_memo23" value="0" checked> -<br>
                    <input type="radio" name="girl_memo23" value="1"> ◎<br>
                    <input type="radio" name="girl_memo23" value="2"> o<br>
                    <input type="radio" name="girl_memo23" value="3"> △<br>
                    <input type="radio" name="girl_memo23" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No5 ピンクローター</label><br>
                    <input type="radio" name="girl_memo24" value="0" checked> -<br>
                    <input type="radio" name="girl_memo24" value="1"> ◎<br>
                    <input type="radio" name="girl_memo24" value="2"> o<br>
                    <input type="radio" name="girl_memo24" value="3"> △<br>
                    <input type="radio" name="girl_memo24" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No6 放尿</label><br>
                    <input type="radio" name="girl_memo25" value="0" checked> -<br>
                    <input type="radio" name="girl_memo25" value="1"> ◎<br>
                    <input type="radio" name="girl_memo25" value="2"> o<br>
                    <input type="radio" name="girl_memo25" value="3"> △<br>
                    <input type="radio" name="girl_memo25" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No7 バイブレーター </label><br>
                    <input type="radio" name="girl_memo26" value="0" checked> -<br>
                    <input type="radio" name="girl_memo26" value="1"> ◎<br>
                    <input type="radio" name="girl_memo26" value="2"> o<br>
                    <input type="radio" name="girl_memo26" value="3"> △<br>
                    <input type="radio" name="girl_memo26" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No8 顔面発財</label><br>
                    <input type="radio" name="girl_memo27" value="0" checked> -<br>
                    <input type="radio" name="girl_memo27" value="1"> ◎<br>
                    <input type="radio" name="girl_memo27" value="2"> o<br>
                    <input type="radio" name="girl_memo27" value="3"> △<br>
                    <input type="radio" name="girl_memo27" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No9 オナニー鑑賞</label><br>
                    <input type="radio" name="girl_memo28" value="0" checked> -<br>
                    <input type="radio" name="girl_memo28" value="1"> ◎<br>
                    <input type="radio" name="girl_memo28" value="2"> o<br>
                    <input type="radio" name="girl_memo28" value="3"> △<br>
                    <input type="radio" name="girl_memo28" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No10 即尺</label><br>
                    <input type="radio" name="girl_memo29" value="0" checked> -<br>
                    <input type="radio" name="girl_memo29" value="1"> ◎<br>
                    <input type="radio" name="girl_memo29" value="2"> o<br>
                    <input type="radio" name="girl_memo29" value="3"> △<br>
                    <input type="radio" name="girl_memo29" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No11 AF</label><br>
                    <input type="radio" name="girl_memo30" value="0" checked> -<br>
                    <input type="radio" name="girl_memo30" value="1"> ◎<br>
                    <input type="radio" name="girl_memo30" value="2"> o<br>
                    <input type="radio" name="girl_memo30" value="3"> △<br>
                    <input type="radio" name="girl_memo30" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No12 ノーパン・ノーブラ待ち合わせ</label><br>
                    <input type="radio" name="girl_memo31" value="0" checked> -<br>
                    <input type="radio" name="girl_memo31" value="1"> ◎<br>
                    <input type="radio" name="girl_memo31" value="2"> o<br>
                    <input type="radio" name="girl_memo31" value="3"> △<br>
                    <input type="radio" name="girl_memo31" value="4"> ｘ
                </div>
                <div class="form-group col-xs-12">
                    <label class="control-label">No13 とっびこIN待ち合わせ</label><br>
                    <input type="radio" name="girl_memo32" value="0" checked> -<br>
                    <input type="radio" name="girl_memo32" value="1"> ◎<br>
                    <input type="radio" name="girl_memo32" value="2"> o<br>
                    <input type="radio" name="girl_memo32" value="3"> △<br>
                    <input type="radio" name="girl_memo32" value="4"> ｘ
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix" style="float: right; background: #f1f1f1;">
            <label class="btn-material">
                <input type="submit" value="保存する" class="btn btn-lg bg-aqua">
            </label>
        </div>
    </form>
</section>
@include('messages.error_form')
@endsection
