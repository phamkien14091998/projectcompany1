<?php
//print_r($data);die();
?>
@extends('layouts.index')
@section('contents')
    <section class="content-header">
        <h1>更新</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/message')}}" class="btn-material">
						<span class="btn btn-sm bg-teal">
							<span>赤い系のメッセージ一覧へ戻る</span>
						</span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>
            @if(isset($data['item']) && $data['item'])
                @foreach($data['item'] as $item)
                    @if($r->id == $item['serialno'])
                        <form method="post" action="{{url('message/update')}}">
                            <div class="box-body">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="serialno" value="{{$item['serialno']}}">

                                <div class="form-group col-xs-12">
                                    <label for="inputMsg" class="control-label">メッセージ</label>
                                    <textarea class="form-control input-lg" id="msg" name="msg" style="height: 200px">{{$item['msg']}}</textarea>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix" style="float: right">
                                <label class="btn-material">
                                    <input type="submit" value="保存する" class="btn btn-lg bg-aqua">
                                </label>
                            </div>
                        </form>
                    @endif
                @endforeach
            @endif
        </div>
    </section>
    @include('messages.error_form')
@endsection
