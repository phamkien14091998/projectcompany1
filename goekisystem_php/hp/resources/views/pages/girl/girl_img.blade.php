<?php
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <section class="content-header">
        <h1>画像アップロード</h1>
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
            <div class="box-header clearfix"></div>

            <form class="form_img">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="girl_cd" value="{{$r->id}}">
                <ul class="nav nav-tabs" id="example-tabs" role="tablist" style="padding-bottom: 15px;">
                    <li style="width: 20% !important; padding: 10px">
                        <div class="girls-head" style="height: 300px;">
                            <div class="girls-img" style="text-align: center">
                                <img class="img img_contain_one" style="{{isset($data['item']['img1']) ? 'height: auto' : 'height: 300px'}}; max-height: 300px;" src="{{$data['item']['img1'].'?'.date('YmdHis')}}">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <label class="btn-material" for="one">
                                <span class="btn btn-sm bg-teal">
                                    <span>画像アップロード</span>
                                </span>
                            </label>
                            <input type="file" id="one" name="upload_img_1" class="btn-material" style="display: none">
                        </div>
                        <div style="text-align: center;">
                            <a href="{{url('home/delete_img/' . $r->id . '/?pic_no=1')}}" onclick="return confirm('削除します。宜しいですか？')" class="btn-material">
                            <span class="btn btn-sm bg-teal" style="width: 142px;">
                                <span>画像削除</span>
                            </span>
                            </a>
                        </div>
                    </li>
                    <li style="width: 20% !important; padding: 10px">
                        <div class="girls-head" style="height: 300px">
                            <div class="girls-img" style="text-align: center">
                                <img class="img img_contain_two" style="{{isset($data['item']['img2']) ? 'height: auto' : 'height: 300px'}}; max-height: 300px;" src="{{$data['item']['img2'].'?'.date('YmdHis')}}">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <label class="btn-material" for="two">
                                <span class="btn btn-sm bg-teal">
                                    <span>画像アップロード</span>
                                </span>
                            </label>
                            <input type="file" id="two" name="upload_img_2" class="btn-material" style="display: none">
                        </div>
                        <div style="text-align: center;">
                            <a href="{{url('home/delete_img/' . $r->id . '/?pic_no=2')}}" onclick="return confirm('削除します。宜しいですか？')" class="btn-material">
                            <span class="btn btn-sm bg-teal" style="width: 142px;">
                                <span>画像削除</span>
                            </span>
                            </a>
                        </div>
                    </li>
                    <li style="width: 20% !important; padding: 10px">
                        <div class="girls-head" style="height: 300px">
                            <div class="girls-img" style="text-align: center">
                                <img class="img img_contain_three" style="{{isset($data['item']['img3']) ? 'height: auto' : 'height: 300px'}}; max-height: 300px;" src="{{$data['item']['img3'].'?'.date('YmdHis')}}">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <label class="btn-material" for="three">
                                <span class="btn btn-sm bg-teal">
                                    <span>画像アップロード</span>
                                </span>
                            </label>
                            <input type="file" id="three" name="upload_img_3" class="btn-material" style="display: none">
                        </div>
                        <div style="text-align: center;">
                            <a href="{{url('home/delete_img/' . $r->id . '/?pic_no=3')}}" onclick="return confirm('削除します。宜しいですか？')" class="btn-material">
                            <span class="btn btn-sm bg-teal" style="width: 142px;">
                                <span>画像削除</span>
                            </span>
                            </a>
                        </div>
                    </li>
                    <li style="width: 20% !important; padding: 10px">
                        <div class="girls-head" style="height: 300px">
                            <div class="girls-img" style="text-align: center">
                                <img class="img img_contain_four" style="{{isset($data['item']['img4']) ? 'height: auto' : 'height: 300px'}}; max-height: 300px;" src="{{$data['item']['img4'].'?'.date('YmdHis')}}">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <label class="btn-material" for="four">
                                <span class="btn btn-sm bg-teal">
                                    <span>画像アップロード</span>
                                </span>
                            </label>
                            <input type="file" id="four" name="upload_img_4" class="btn-material" style="display: none">
                        </div>
                        <div style="text-align: center;">
                            <a href="{{url('home/delete_img/' . $r->id . '/?pic_no=4')}}" onclick="return confirm('削除します。宜しいですか？')" class="btn-material">
                            <span class="btn btn-sm bg-teal" style="width: 142px;">
                                <span>画像削除</span>
                            </span>
                            </a>
                        </div>
                    </li>
                    <li style="width: 20% !important; padding: 10px">
                        <div class="girls-head" style="height: 300px">
                            <div class="girls-img" style="text-align: center">
                                <img class="img img_contain_five" style="{{isset($data['item']['img5']) ? 'height: auto' : 'height: 300px'}}; max-height: 300px;" src="{{$data['item']['img5'].'?'.date('YmdHis')}}">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <label class="btn-material" for="five">
                                <span class="btn btn-sm bg-teal">
                                    <span>画像アップロード</span>
                                </span>
                            </label>
                            <input type="file" id="five" name="upload_img_5" class="btn-material" style="display: none">
                        </div>
                        <div style="text-align: center;">
                            <a href="{{url('home/delete_img/' . $r->id . '/?pic_no=5')}}" onclick="return confirm('削除します。宜しいですか？')" class="btn-material">
                            <span class="btn btn-sm bg-teal" style="width: 142px;">
                                <span>画像削除</span>
                            </span>
                            </a>
                        </div>
                    </li>
                </ul>
                <div>
                    <label>
                        <span style="padding-left: 20px">
                            推奨
                        </span>
                        <br>
                        <span style="padding-left: 30px">Photo Size （アップロードする画像のサイズ）：300ｘ450</span>
                        <br>
                        <span style="padding-left: 30px">File Type (拡張子): .jpg</span>
                        <br>
                        <p style="color: red;padding-left: 30px;">※必ず拡張子は「.jpg」のファイルをアップローしてください。（大文字の.JPGも禁止です。）</p>
                        <p style="color: red;padding-left: 30px;">※画像の1番目のデータがメイン画像として表示されます。</p>
                    </label>
                </div>
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
