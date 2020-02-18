<?php
//print_r($r->star);die();
?>
@extends('layouts.index')
@section('contents')
    <section class="content-header">
        <h1>紹介ポイント</h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="pull-right">
            <a href="{{url('/')}}" class="btn-material">
						<span class="btn btn-sm bg-teal">
							<span>My改札会員一覧へ戻る</span>
						</span>
            </a>
        </div>
        <div class="box">
            <div class="box-icon pull-left"><i class="fa fa-user"></i></div>
            <div class="box-header clearfix">
            </div>
            <form method="post" action="{{url('home/updateStar')}}">
                <div class="box-body">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="user_cd" value="{{$r->id}}">
                    <div class="form-group col-xs-12">
                        <label for="inputPas" class="control-label">紹介ポイント</label>
                        <select class="form-control input-lg" name="star_level" >
                            <option value="0" {{$r->star == '0' ? 'selected' : ''}}>指定しない</option>
                            @for($i = 1; $i<=10; $i++)
                                <option value="{{$i}}" {{$r->star == $i ? 'selected' : ''}} >★{{$i}}</option>
                            @endfor
                        </select>
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
    </section>
    @include('messages.error_form')
@endsection
