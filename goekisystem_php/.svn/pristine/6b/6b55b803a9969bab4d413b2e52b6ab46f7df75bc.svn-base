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
        <h1>赤い系のメッセージ一覧</h1>
    </section>
    <section class="content container-fluid">
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-users"></i></div>
            <div class="box-header">
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="width: 16%;">日付</th>
                            <th style="width: 13%;">ニックネーム</th>
                            <th style="width: 13%;">会員番号</th>
                            <th>削除状況</th>
                            <th>メッセージ</th>
                            <th style="width:180px">アクション</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(isset($data['item']) && $data['item'])
                            @foreach($data['item'] as $item)
                                <tr>
                                    <td class="text-left">{{!empty($item['regdate']) ? $item['regdate'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['girl_name']) ? $item['girl_name'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['user_name']) ? $item['user_name'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['userdelflg']) ? $item['userdelflg'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['msg']) ? $item['msg'] : ''}}</td>
                                    <td class="text-center">
                                        <a href="{{url('message/detail/'. $item['serialno'] . '/?page=' . $_GET['page'])}}" class="btn-material margin-r-5">
                                            <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                        </a>
                                        <a class="btn-material" href="{{url('message/delete/'. $item['serialno'])}}" onclick="return confirm('削除します。宜しいですか？')">
                                            <span class="btn bg-red btn-circle">
                                                <i class="fa fa-trash fa-fw"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <div class="box-footer text-center">
                    <ul class="pagination text-center">
                        @if (isset($data) && $data['pagecnt'] > 1)
                            @if($_GET['page'] != 1 && $data['pagecnt'] >= 5)
                                <li>
                                    <a href="{{url('/message/?page=1') }}" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                            @endif
                            @if($_GET['page'] != 1)
                                <li>
                                    <a href="{{url('/message/?page='.$_GET['page']-1) }}" aria-label="Previous" class="previous">
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
                                        <a href="{{url('/message/?page='.$i)}}">{{ $i }}</a>
                                    </li>
                                    @endfor
                                    @if ($_GET['page'] != $data['pagecnt'])
                                        <li>
                                            <a href="{{url('/message/?page='.($_GET['page']+1))}}" aria-label="Next" class="next">
                                                <span aria-hidden="true"> › </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($_GET['page'] != $data['pagecnt'] && $data['pagecnt'] >= 5)
                                        <li>
                                            <a href="{{url('/message/?page='.$data['pagecnt'])}}" aria-label="Next">
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