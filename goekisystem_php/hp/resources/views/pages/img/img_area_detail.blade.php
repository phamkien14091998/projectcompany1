<?php
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <section class="content-header">
        <h1>紹介ポイント</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/imgArea/detail/' . $r->id)}}" class="btn-material">
                <span class="btn btn-sm bg-teal">
                    <span>在籍女性へ戻る</span>
                </span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>
            <form class="form_img_area">
                <input type="hidden" name="_token" value="{{csrf_token()}}" >
                <input type="hidden" name="picture_no" value="1">
                <input type="hidden" name="girl_cd" value="{{$r->id}}">
                <div class="girls-head" style="padding-left: 20px;padding-top: 20px">
                    <div class="girls-img">
                        <img class="img img_contain_area" src="{{$data['item']['img1']}}">
                    </div>
                </div>
                <div style="padding-left: 20px">
                    <label class="btn-material" for="updateImgArea">
                                <span class="btn btn-sm bg-teal">
                                    <span>画像アップロード</span>
                                </span>
                    </label>
                    <input type="file" id="updateImgArea" name="upload_img_area" class="btn-material" style="display: none">
                </div>
                <label>
                    <span style="padding-left: 20px">
                        画像は横長になります。サイズは120ｘ80です。
                    </span>
                    <br>
                    <span style="padding-left: 20px; color: red;">※必ず拡張子は「.jpg」のファイルをアップローしてください。（大文字の.JPGも禁止です。）</span>
                </label>
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