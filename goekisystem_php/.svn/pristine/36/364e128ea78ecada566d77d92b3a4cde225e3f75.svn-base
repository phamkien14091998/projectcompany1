@extends('layouts.index')
@section('title')
    売上表
@endsection
@section ('css')
    <link rel="stylesheet" href="{{asset('css/revenue.css')}}">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>売上利益一覧　日別</h1>
        </section>
        <div class="client-select" style="margin: 10px; float: right;">
            <select id="client">
            </select>
        </div>
        <section class="content container-fluid">
        <div class="revenue-table">
            <div class="box">
                <div class="box-icon pull-left"><i class="fa fa-commenting"></i></div>
                <div class="search-select" style="display: flex; margin: 10px 10px;">
                    <button class="day-select">Day</button>
                    <button class="month-select" style="margin-left: 5px">Month</button>
                    @if($data)
                        @foreach($data as $row)
                    <form class="time-select" style="display: flex">
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control" name="time-start" id='datepicker1' value="{{$row['day1']}}" readonly>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control" name="time-end" id='datepicker2' value="{{$row['day2']}}" readonly>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                        <input name="client_cd" id="client_cd_post" type="hidden" value="0">
                        <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="submit-select" type="submit" style="margin-left: 5px">検索</button>
                    </form>
                        @endforeach
                    @endif

                    <button class="coppy all" style="position: absolute; right: 10px;">クリップボードにコピー</button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive" style="max-height: 700px">
                        <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="row-copy" style=" text-align: center"></th>
                                <th style=" text-align: center">日付</th>
                                <th style="text-align: center">利益改札</th>
                                <th style="text-align: center">利益やま</th>
                                <th style="text-align: center">入金額</th>
                                <th style="text-align: center">料金合計</th>
                                <th style="text-align: center">現金合計</th>
                                <th style="text-align: center">カード合計</th>
                                <th style="text-align: center">バック合計</th>
                                <th style=" text-align: center">コース料金</th>
                                <th style="text-align: center">コースバック</th>
                                <th style="text-align: center">初割・リピ割</th>
                                <th style="text-align: center">交通費</th>
                                <th style="text-align: center">指名料</th>
                                <th style="text-align: center">手数料</th>
                                <th style="text-align: center">雑費</th>
                                <th style="text-align: center">返金</th>
                                <th style="text-align: center">待機代</th>
                                <th style="text-align: center">その他</th>
                                <th style="text-align: center">やま現金</th>
                                <th style="text-align: center">やまカード</th>
                                <th style="text-align: center">やま合計</th>
                                <th style="text-align: center">やま報酬</th>
                                <th style="text-align: center">報酬合計</th>
                                <th style="text-align: center">預り金</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
</div>
    <style>
        button{
            background-color: #474747;
            border: none;
            color: white!important;
            padding: 5px 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
        }
        button:hover{opacity: 0.8}
        .time-select{margin-left: 10px;}
        .revenue-table{width: 100%}
        .revenue-table td p{width: max-content; display: inline-block;}
    </style>
    <script>
        var client_cd = 0;
        $(document).on("change", "#client" , function(e){
            client_cd = $(this).val();
            $('#client_cd_post').val(client_cd);
        });
        $.ajax({
            url: '/revenue/getClient',
            type: "get",
            data:  {
                'get_client': "get_client"
            },
            contentType: false,
            cache: false,
            processData: false,
            success: function(res){
                $(".client-select select").html(res);
            },
            error:function(response){
                alert("画像のサイズが大きすぎです。");
            },
            413: function () {
                alert("画像のサイズが大きすぎです。");
            }
        });
        $('.month-select').on('click',function () {
            $('.time-select').css("display","none");
            $.ajax({
                url: '/revenue/getSaleMonth',
                type: "get",
                data:  {
                    'get_month': "get_month",
                    'client_cd':client_cd
                },
                contentType: false,
                cache: false,
                processData: false,
                success: function(res){
                    $(".box-body tbody").html(res);
                },
                error:function(response){
                    alert("画像のサイズが大きすぎです。");
                },
                413: function () {
                    alert("画像のサイズが大きすぎです。");
                }
            });
        });
        $('.day-select').on('click',function () {
            $('.time-select').css("display","flex");
        });
        $(".time-select").on('submit',function (e) {
            e.preventDefault();
            $.ajax({
                url: '/revenue/getSaleDay',
                type: "post",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(res){
                    $(".box-body tbody").html(res);
                },
                error:function(response){
                    alert("画像のサイズが大きすぎです。");
                }
            });
        });
        $('.input-group.date').datepicker({
            format: "yyyy/mm/dd",
            language: 'ja',
            minViewMode: 0,
        });
    </script>
@endsection
