<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	

	<!-- CSS in  
	<link href="{{ asset('/css/relationship.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('/css/mystyle.css') }}" rel="stylesheet">

	<!-- modal -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <!-- Tell the browser to be responsive to screen width -->
    @include('layouts.head')
    @yield('additional')
</head>
<body class="hold-transition sidebar-mini fixed">

<div class="wrapper">
    <!-- Main Header -->
    @include('layouts.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.sidebar')


    {{-- main  --}}

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>女性検索</h1>
			</section>

			<!-- Main content -->
			<section class="content container-fluid">

				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<div id="bg-hearder" class="col-md-12">
								<br><br>
								<div class="col-md-4">
									<label class="pd-c col-md-4">女性電話</label>
									<input class="Select col-md-8" placeholder="sdt girl" type="text" />
								</div>
						
								<div class="col-md-4">
									<label class="pd-c col-md-4">お客様電話</label>
									<input class="Select col-md-8" placeholder="sdt user" type="text" />
								</div>
						
								<div class="col-md-4">
									<div class="col-md-4"></div>
									<button type="button"  class="bt col-md-3 btn" >Search </button>
								</div>
								<br><br><br><br>
							</div>
							
							<div class="box col-md-12">
								<div class=" box-body">
									<div class="table-responsive">
										<table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
											<thead>
												<tr >
													<th>女の子</th>
													<th>客名</th>
													<th>種別</th>
													<th>女性名</th>
													<th>コース</th>
													<th>オプション</th>
													<th>お客様</th>
													<th>in / out</th>
													<th>Block | Cancel</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-left">1</td>
													<td class="text-left">鈴木</td>
													<td class="text-left"><span class="label bg-aqua">新規</span></td>
													<td class="text-left">かなこ</td>
													<td class="text-left">40分</td>
													<td class="text-left">パンティ<br>パンスト</td>
													<td class="text-left">￥30,000</td>
													<td class="text-left">
														10：00<br>12：00
													</td>
													<td class="text-center">
														<a class="btn btn-success" data-toggle="modal" data-target="#myModal" href="#"> 非表示 </a> 
														<a class="btn btn-danger" href="#"> 削除 </a>
													</td>
												</tr>
											</tfoot>
										</table>
									</div>								
								</div>
							</div>

			

						</div>





						<!-- Modal 
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							
							 Modal content
							<div id="modal" class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="lb col-md-12">
											<label class="col-md-4">電話番号</label>
											<input class="input col-md-8" placeholder="プレイ開始" type="text" />
										</div>
										<br><br>
										<div class="lb col-md-12">
											<label class="col-md-4">メールアドレス</label>
											<input class="input col-md-8" placeholder="プレイ開始" type="text" />
										</div>
										<br><br>
										<div class="lb col-md-12">
											<label class="col-md-4">電話番号</label>
											<input class="input col-md-8" placeholder="プレイ開始" type="text" />
										</div>
										<br><br>
										<div class="lb col-md-12">
											<label class="col-md-4">メールアドレス</label>
											<input class="input col-md-8" placeholder="プレイ開始" type="text" />
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" >非表示</button>
									<button type="button" class="btn btn-default" >削除</button>
								</div>
							</div>
							
							</div>
						</div>

						-->


						<!--<div class="box">
							<div class="box-icon pull-left"><i class="fa fa-cny"></i></div> 
							<div class="box-header">
								<h3 class="box-title">日別売上<small class="d-block small mt-1">1日の売上が各項目ごとに表示されます。</small></h3>

							</div>
						 /.box-header 
							<div class="box-body">
								<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
										<thead>
											<tr >
												<th>名前(name)</th>
												<th>電話番号(phone)</th>
												<th>メールアドレス(email)</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center">pham kien</td>
												<td class="text-center">09783979393</td>
												<td class="text-center">pham@gmail.com</td>
												
											</tr>
											
										</tfoot>
									</table>
								</div>

								<div class="row">
									
									<div class="col-sm-7">
										
									</div>
								</div>
							</div>
							 /.box-bod
						</div> -->
						<!-- /.box -->
					</div>
				</div>

				<!-- /.row 
				<div class="row">
					<div class="col-xs-6 col-md-4 col-lg-2">
						<div class="panel panel-success text-center lead">
							<div class="panel-heading">本数</div>
							<div class="panel-body">50</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 col-lg-3">
						<div class="panel panel-info text-center lead">
							<div class="panel-heading">お客様</div>
							<div class="panel-body">1,000,000</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 col-lg-2">
						<div class="panel panel-danger text-center text-red lead">
							<div class="panel-heading">割引</div>
							<div class="panel-body">500,000</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 col-lg-3">
						<div class="panel panel-warning text-center lead">
							<div class="panel-heading">女性</div>
							<div class="panel-body">300,000</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 col-lg-2">
						<div class="panel panel-default text-center lead">
							<div class="panel-heading">FC売上</div>
							<div class="panel-body">200,000</div>
						</div>
					</div>
				</div>
				/.row -->
				<!--<div class="row">
					<div class="col-lg-8 col-md-7">
						<div class="box">
							<div class="box-icon pull-left"><i class="fa fa-area-chart"></i></div>
							<div class="box-header">
								<h3 class="box-title">時間帯別集客グラフ</h3>
							</div>
							<div class="box-body">
								<div class="chart">
									<canvas id="lineChart" style="height:250px"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="box">
							<div class="tab-content">
								<div class="tab-pane active" id="sampleContentA">
									<div class="box-icon pull-left"><i class="fa fa-flag"></i></div>
									<div class="box-header">
										<h3 class="box-title">広告ランキング</h3>
									</div>
									<div class="box-body">
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th class="col-sm-2 text-center">順位</th>
													<th class="col-sm-7">企業名</th>
													<th class="col-sm-3 text-right">数</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">1</td>
													<td>うれせん</td>
													<td class="text-right">500本</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>うれせん</td>
													<td class="text-right">20本</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>うれせん</td>
													<td class="text-right">5本</td>
												</tr>
												<tr>
													<td class="text-center">4</td>
													<td>うれせん</td>
													<td class="text-right">5本</td>
												</tr>
												<tr>
													<td class="text-center">5</td>
													<td>うれせん</td>
													<td class="text-right">5本</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane" id="sampleContentB">
									<div class="box-icon pull-left"><i class="fa fa-flag"></i></div>
									<div class="box-header">
										<h3 class="box-title">女性ランキング</h3>
									</div>
									<div class="box-body">
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th class="col-sm-2 text-center">順位</th>
													<th class="col-sm-7">女性名</th>
													<th class="col-sm-3 text-right">指名数</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">1</td>
													<td>はなこ</td>
													<td class="text-right">12回</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>あうこ</td>
													<td class="text-right">5回</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>いうこ</td>
													<td class="text-right">5回</td>
												</tr>
												<tr>
													<td class="text-center">4</td>
													<td>恵右子</td>
													<td class="text-right">5回</td>
												</tr>
												<tr>
													<td class="text-center">5</td>
													<td>おうこ</td>
													<td class="text-right">5回</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane" id="sampleContentC">
									<div class="box-icon pull-left"><i class="fa fa-flag"></i></div>
									<div class="box-header">
										<h3 class="box-title">オプションランキング</h3>
									</div>
									<div class="box-body">
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th class="col-sm-2 text-center">順位</th>
													<th class="col-sm-7">オプション名</th>
													<th class="col-sm-3 text-right">数</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">1</td>
													<td>電マ</td>
													<td class="text-right">30回</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>オナホ</td>
													<td class="text-right">10回</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>ローター</td>
													<td class="text-right">5回</td>
												</tr>
												<tr>
													<td class="text-center">4</td>
													<td>ローター</td>
													<td class="text-right">3回</td>
												</tr>
												<tr>
													<td class="text-center">5</td>
													<td>ローター</td>
													<td class="text-right">5回</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

							</div>
							<div class="box-footer">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#sampleContentA" data-toggle="tab">広告</a></li>
									<li><a href="#sampleContentB" data-toggle="tab">女性</a></li>
									<li><a href="#sampleContentC" data-toggle="tab">オプション</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->
				<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->

	


    @yield('modal')
    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
</body>

</html>
@include('layouts.footer')
	