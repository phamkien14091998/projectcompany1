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
        <h1>お客様の声</h1>
    </section>
    <section class="content container-fluid">
        <div class="row margin-bottom">
            <div class="col-md-2">
                <a href="{{url('manageVoice/add')}}" class="btn-material">
                <span class="btn btn-white btn-circle">
                    <i class="fa fa-plus fa-fw"></i>
                </span>
                    <span>新規作成</span>
                </a>
            </div>
            <form action="{{url('manageVoice/')}}" method="get">
                <div style="display: flex;width: 80%;margin: auto;padding-top: 17px;" class="col-md-5">
                    <label style="padding: 6px 10px 0 0;">女性の名前で探す</label>
                    <div class="input-group input-group-md">
                        <input type="text" name="search_text" value="{{$r->search_text}}" class="form-control input-lg" style="width:200px; padding: 0px !important;height: 32px;">
                        <span style="padding: 0 30px 0 30px">
                            <select name="client_cd" style="height: 32px; border-radius: 10px;">
                                <option value="1" {{(isset($_GET['client_cd']) && $_GET['client_cd'] == 1) ? 'selected' : ''}}>西東京</option>
                                <option value="7" {{(isset($_GET['client_cd']) && $_GET['client_cd'] == 7) ? 'selected' : ''}}>東京23区</option>
                                <option value="5" {{(isset($_GET['client_cd']) && $_GET['client_cd'] == 5) ? 'selected' : ''}}>千葉</option>
                                <option value="6" {{(isset($_GET['client_cd']) && $_GET['client_cd'] == 6) ? 'selected' : ''}}>埼玉</option>
                                <option value="8" {{(isset($_GET['client_cd']) && $_GET['client_cd'] == 8) ? 'selected' : ''}}>神奈川</option>
                            </select>
                        </span>
                        <input type="submit" value="検索" style="height: 32px;">
                    </div>
                </div>
            </form>
        </div>

        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-users"></i></div>
            <div class="box-header">
                <p class="pull-right text-blue lead"></p>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>女性</th>
                            <th>Date</th>
                            <th>タイトル</th>
                            <th>お客様の名前</th>
                            <th>アクション</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($data['item']) && $data['item'] && !isset($data['item']['girl_cd']))
                            @foreach($data['item'] as $item)
                                <tr>
                                    <td class="text-left">{{!empty($item['girl_name']) ? $item['girl_name'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['voice_date']) ? $item['voice_date'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['voice_text1']) ? $item['voice_text1'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['voice_text4']) ? $item['voice_text4'] : ''}}</td>
                                    <td class="text-center">
                                        <a href="{{url('manageVoice/detail/'. $item['girl_cd'] . '/?page=' . $_GET['page'].'&client_cd='.$_GET['client_cd'].'&search_text='.$_GET['search_text'].'&girl_name='.$item['girl_name'].'&user_name='.$item['voice_text4'].'&voice_date='.$item['voice_date'])}}" class="btn-material margin-r-5">
                                            <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                        </a>
                                        <a class="btn-material" href="{{url('manageVoice/delete/'. $item['girl_cd'].'?voice_date='.$item['voice_date'])}}" onclick="return confirm('削除します。宜しいですか？')">
                                            <span class="btn bg-red btn-circle">
                                                <i class="fa fa-trash fa-fw"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @elseif(isset($data['item']['girl_cd']))
                            <tr>
                                <td class="text-left">{{!empty($data['item']['girl_name']) ? $data['item']['girl_name'] : ''}}</td>
                                <td class="text-left">{{!empty($data['item']['voice_date']) ? $data['item']['voice_date'] : ''}}</td>
                                <td class="text-left">{{!empty($data['item']['voice_text1']) ? $data['item']['voice_text1'] : ''}}</td>
                                <td class="text-left">{{!empty($data['item']['voice_text4']) ? $data['item']['voice_text4'] : ''}}</td>
                                <td class="text-center">
                                    <a href="{{url('manageVoice/detail/'. $data['item']['girl_cd'] . '/?page=' . $_GET['page'].'&client_cd='.$_GET['client_cd'].'&search_text='.$_GET['search_text'].'&girl_name='.$item['girl_name'].'&user_name='.$item['voice_text4'].'&voice_date='.$item['voice_date'])}}" class="btn-material margin-r-5">
                                        <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                    </a>
                                    <a class="btn-material" href="{{url('manageVoice/delete/'. $data['item']['girl_cd'].'?voice_date='.$item['voice_date'])}}" onclick="return confirm('削除します。宜しいですか？')">
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
                                        <a href="{{url('/manageVoice/?page=1'.'&search_text='.$_GET['search_text'].'&client_cd='.$_GET['client_cd']) }}" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                @endif
                                @if($_GET['page'] != 1)
                                    <li>
                                        <a href="{{url('/manageVoice/?page='.($_GET['page']-1).'&search_text='.$_GET['search_text'].'&client_cd='.$_GET['client_cd']) }}" aria-label="Previous" class="previous">
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
                                        <a href="{{url('/manageVoice/?page='.$i.'&search_text='.$_GET['search_text'].'&client_cd='.$_GET['client_cd'])}}">{{ $i }}</a>
                                    </li>
                                @endfor
                                @if ($_GET['page'] != $data['pagecnt'])
                                    <li>
                                        <a href="{{url('/manageVoice/?page='.($_GET['page']+1).'&search_text='.$_GET['search_text'].'&client_cd='.$_GET['client_cd'])}}" aria-label="Next" class="next">
                                            <span aria-hidden="true"> › </span>
                                        </a>
                                    </li>
                                @endif
                                @if ($_GET['page'] != $data['pagecnt'] && $data['pagecnt'] >= 5)
                                    <li>
                                        <a href="{{url('/manageVoice/?page='.$data['pagecnt'].'&search_text='.$_GET['search_text'].'&client_cd='.$_GET['client_cd'])}}" aria-label="Next">
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