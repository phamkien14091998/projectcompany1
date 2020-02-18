<?php
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>最新情報</h1>
    </section>
    <section class="content container-fluid">
        <div class="row margin-bottom">
            <div class="col-md-8 add-user">
                <a href="{{url('newInfo/add')}}" class="btn-material">
							<span class="btn btn-white btn-circle">
							<i class="fa fa-plus fa-fw"></i>
							</span>
                    <span>新規作成</span>
                </a>
            </div>
        </div>

        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-users"></i></div>
            <div class="box-header">
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                        @if(isset($data['item']) && $data['item'])
                            @foreach($data['item'] as $item)
                                <tr>
                                    <td class="text-left">{{!empty($item['newinfo_date']) ? $item['newinfo_date'] : ''}}</td>
                                    <td class="text-left">{{!empty($item['newinfo_title']) ? $item['newinfo_title'] : ''}}</td>
                                    <td class="text-center">
                                        <a href="{{url('newInfo/detail/'. $item['newinfo_cd'])}}" class="btn-material margin-r-5">
                                            <span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
                                        </a>
                                        <a class="btn-material" href="{{url('newInfo/delete/'. $item['newinfo_cd'])}}" onclick="return confirm('削除します。宜しいですか？')">
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
                </div>
            </div>
        </div>
    </section>
    @include('messages.error_form')
@endsection