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
        <h1>My改札会員一覧</h1>
    </section>
    <section class="content container-fluid">
        <div class="row margin-bottom">
            <div class="col-md-8">
                <a href="{{url('home/add')}}" class="btn-material">
							<span class="btn btn-white btn-circle">
							<i class="fa fa-plus fa-fw"></i>
							</span>
                    <span>新規作成</span>
                </a>
            </div>
            <div class="col-md-4">
                <form action="{{url('home/')}}" method="get">
                    <div class="input-group input-group-md">
                        <input type="text" name="tel" value="{{$r->tel}}" class="form-control pull-right" placeholder="フリーワードで検索" style="width:200px">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default" style="height: 35px"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-users"></i></div>
            <div class="box-header">
                <p class="pull-right text-blue lead">TOTAL: <b>{{$data['rowcnt']}}人</b></p>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>日付</th>
                            <th>ニックネーム</th>
                            <th>会員番号</th>
                            <th>紹介ポイント</th>
                            <th style="width:300px">アクション</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($data['item']) && $data['item'] && !isset($data['item']['user_cd']))
                            @foreach($data['item'] as $item)
                                <tr>
                                    <td class="text-left">{{!empty($item['registdate']) ? $item['registdate'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['name']) ? $item['name'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['tel']) ? $item['tel'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['starlevel']) ? $item['starlevel'] : '0'}}</td>
                                    <td class="text-center">
                                        <a href="{{url('home/detail_user/'. $item['user_cd'])}}" class="btn-material margin-r-5">
                                            <span class="btn btn-sm bg-teal btn-circle">ログ情報</span>
                                        </a>
                                        <a href="{{url('home/detail/'. $item['user_cd'] . '/?page=' . $_GET['page'] . '&tel=' . $item['tel'] . '&pass=' . $item['pass'])}}" class="btn-material margin-r-5">
                                            <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                        </a>
                                        <a class="btn-material" href="{{url('home/star_level/'. $item['user_cd'] . '/?star=' . $item['starlevel'])}}">
                                            <span class="btn bg-yellow btn-circle">
                                                <i class="fa fa-star fa-fw"></i>
                                            </span>
                                        </a>
                                        <a class="btn-material" href="{{url('home/delete/'. $item['user_cd'])}}" onclick="return confirm('削除します。宜しいですか？')">
                                            <span class="btn bg-red btn-circle">
                                                <i class="fa fa-trash fa-fw"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @elseif(isset($data['item']['user_cd']))
                            <tr>
                                <td class="text-left">{{!empty($data['item']['registdate']) ? $data['item']['registdate'] : ''}}</td>
                                <td class="text-left">{{!empty($data['item']['name']) ? $data['item']['name'] : ''}}</td>
                                <td class="text-left">{{!empty($data['item']['tel']) ? $data['item']['tel'] : ''}}</td>
                                <td class="text-left">{{!empty($data['item']['starlevel']) ? $data['item']['starlevel'] : '0'}}</td>
                                <td class="text-center">
                                    <a href="{{url('home/detail_user/'. $data['item']['user_cd'])}}" class="btn-material margin-r-5">
                                        <span class="btn btn-sm bg-teal btn-circle">ログ情報</span>
                                    </a>
                                    <a href="{{url('home/detail/'. $data['item']['user_cd'] . '/?page=' . $_GET['page'] . '&tel=' . $data['item']['tel'] . '&pass=' . $data['item']['pass'])}}" class="btn-material margin-r-5">
                                        <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                    </a>
                                    <a class="btn-material" href="{{url('home/star_level/'. $data['item']['user_cd'] . '/?star=' . $data['item']['starlevel'])}}">
                                            <span class="btn bg-yellow btn-circle">
                                                <i class="fa fa-star fa-fw"></i>
                                            </span>
                                    </a>
                                    <a class="btn-material" href="{{url('home/delete/'. $data['item']['user_cd'])}}" onclick="return confirm('削除します。宜しいですか？')">
                                            <span class="btn bg-red btn-circle">
                                                <i class="fa fa-trash fa-fw"></i>
                                            </span>
                                    </a>
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    @if(isset($data) && $data)
                        <div class="box-footer text-center">
                            <?php $view = View::make('paginate.pagination', ['data' => $data]) ?>
                            {!! $view->render() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @include('messages.error_form')
@endsection