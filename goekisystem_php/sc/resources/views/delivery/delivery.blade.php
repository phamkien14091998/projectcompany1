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

	<!--library datapicker -->
	{{-- <link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js"></script> --}}
	{{-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script   src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"   integrity="sha256-xI/qyl9vpwWFOXz7+x/9WkG5j/SVnSw21viy8fWwbeE="   crossorigin="anonymous"></script>
	 --}}
	 <!-- CSS in devivery -->
	<link href="{{ asset('/css/mystyle.css') }}" rel="stylesheet">


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
				<h1>日別売上</h1>
			</section>

			<!-- Main content -->
			<section class="content container-fluid">

				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<div id="bg-hearder" class="col-md-12">
								<div class="box-body col-md-12">
									<div class="col-md-4">
										<p class='pd-c col-md-4'>NAME :</p>
										<select class='Select col-md-4'  class="browser-default custom-select custom-select-lg mb-3">
											<option selected>Open</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<div class="col-md-1"></div>
										<button type="button"  class="bt col-md-3 btn ">ABC</button>
									</div>
									<div class="col-md-4">
										<p class='pd-c col-md-4'>TEN :</p>
										<input class="Select col-md-4" type="text" />
										<div class="col-md-1"></div>
										<button type="button" class="bt col-md-3 btn">BCD</button>
									</div>
									<div class="col-md-4">
										<p class='pd-c col-md-4'>TUOI :</p>
										<input class="Select col-md-4" type="text" />
										<div class="col-md-1"></div>
										<button type="button"  class="bt col-md-3 btn ">BCD</button>
									</div>
									
								</div>
								<br><br>
								<div class="col-md-12">
									<div class="col-md-4">
										<p class='pd-c col-md-4'>DC :</p>
										<input class="Select col-md-4" type="text" />
										<div class="col-md-1"></div>
										<button type="button"  class="bt col-md-3 btn ">BCD</button>
									</div>
									<div class="col-md-4">
										<div class="col-md-4">
											<p class='pd-c col-md-12'>Date :</p>
										</div>
										<div class="col-md-4">
											<input style="margin-left: -13px;" type="text" class="Select date-picker"  />
										</div>
										<div class="col-md-4">
											<button style="margin-left: 26px;"  type="button"  class="bt col-md-11 btn ">BCD</button>
										</div>
	
									</div>
	
									{{-- <div class="col-md-5" style="padding-left: 170px;">
										<div class="input-group date col-md-12">
											<div class="col-md-3">
												<input type="text" class="Select date-picker"  />
											</div>
											<!--<input type="text" class="Select col-md-5"  class="form-control"> -->
											
											{{-- <div id="id-date"  class="input-group-addon col-md-5">
												<span class="glyphicon glyphicon-th"></span>
											</div> --}}
											{{-- <div class="col-md-2"></div>
											<div class="col-md-4">
												<button type="button"   class="bt col-md-11 btn ">BCD</button>
											</div>
											
										</div>
									</div> --}} 
	
									<div class="col-md-4">
										<label >Result </label>
									</div>
									<br><br><br>
									
								</div>

							</div>
							
							

						</div>
						<div class="box">
							<!--<div class="box-icon pull-left"><i class="fa fa-cny"></i></div> -->
							<div class="box-header">
								<h3 class="box-title">日別売上<small class="d-block small mt-1">1日の売上が各項目ごとに表示されます。</small></h3>

							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
										<thead>
											<tr >
												<th>#</th>
												<th>客名</th>
												<th>種別</th>
												<th>女性名</th>
												<th>コース</th>
												<th>オプション</th>
												<th>お客様</th>
												<th>in / out</th>
												<th>広告・割引</th>
												<th>女性</th>
												<th>FC売上</th>
												<th>入金</th>
												<th>#</th>
												<th>客名</th>
												<th>種別</th>
												<th>女性名</th>
												<th>コース</th>
												<th>オプション</th>
												<th>お客様</th>
												<th>in / out</th>
												<th>広告・割引</th>
												<th>女性</th>
												<th>FC売上</th>
												
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
												<td class="text-left">ぴゅあらば<br><span class="text-red">￥10,000割引</span></td>
												<td class="text-left">￥3,000</td>
												<td class="text-left">￥2,000</td>
												<td class="text-left"><span class="label bg-lime">入金済</span></td>

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
												<td class="text-left">ぴゅあらば<br><span class="text-red">￥10,000割引</span></td>
												<td class="text-left">￥3,000</td>
												<td class="text-left">￥2,000</td>
											
											</tr>
											
										</tfoot>
									</table>
								</div>

								<div class="row">
									
									<div class="col-sm-7">
											<!-- model -->
											<!-- Button to Open the Modal -->
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
												Open modal
										</button>
									
										<!-- The Modal -->
										<div class="modal" id="myModal">
											<div class="modal-dialog">
												<div class="modal-content">
													<!-- Modal Header -->
													<div class="modal-header">
													<h4 class="modal-title">Modal Heading</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													</div>
													<!-- Modal body -->
													<div class="modal-body">
													Modal body..
													</div>
													<!-- Modal footer -->
													<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
{{-- 									
										<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
										<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
										<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}

									</div>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
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

		<!-- fomat datapicker -->

	

    @yield('modal')
    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
</body>

</html>
@include('layouts.footer')
	