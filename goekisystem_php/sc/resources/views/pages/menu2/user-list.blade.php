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





		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper girl-wrap">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>スタッフ一覧</h1>
			</section>

			<!-- Main content -->
			<section class="content container-fluid">
				<div class="row margin-bottom">
					<div class="col-md-8">
						<a href="user-up.html" class="btn-material">
							<span class="btn btn-white btn-circle">
							<i class="fa fa-plus fa-fw"></i>
							</span>
							<span>新規作成</span>
						</a>
					</div>
					<div class="col-md-4">
						<div class="input-group input-group-md">
							<input type="text" name="table_search" class="form-control pull-right" placeholder="フリーワードで検索" style="width:200px">
							<div class="input-group-btn">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>

				<div class="box">
					<div class="box-icon pull-left"><i class="fa fa-users"></i></div>
					<div class="box-header">
						<h3 class="box-title">スタッフ一覧
							<small class="d-block small mt-1">スタッフを登録、管理することができます。</small>
						</h3>
						<p class="pull-right text-blue lead">TOTAL: <b>4人</b></p>

					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>スタッフ名</th>
										<th>画像</th>
										<th>TEL</th>
										<th>ランク</th>
										<th>登録日</th>
										<th style="width:200px">アクション</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">
											<a href="user-view.html">改札太郎</a>
										</td>
										<td class="text-center">
											<div class="fileinput-new thumbnail thumbnail-circle thumbnail-circle-sm">
												<img src="dist/img/user2-160x160.jpg" alt="...">
											</div>
										</td>
										<td class="text-center">080-0000-0000</td>
										<td class="text-center"><span class="label bg-purple">マスター</span></td>
										<td class="text-center">2018-05-28 02:14:17</td>
										<td class="text-center">
											<a href="user-log.html" class="btn-material margin-r-5">
												<span class="btn btn-sm bg-teal btn-circle">ログ情報</span>
											</a>
											<a href="user-edit.html" class="btn-material margin-r-5">
												<span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-center"><a href="user-view.html">改札次郎</a></td>
										<td class="text-center">
											<div class="fileinput-new thumbnail thumbnail-circle thumbnail-circle-sm">
												<img src="dist/img/user2-160x160.jpg" alt="...">
											</div>
										</td>
										<td class="text-center">080-0000-0000</td>
										<td class="text-center"><span class="label bg-blue">　A　</span></td>
										<td class="text-center">2018-05-28 02:14:17</td>
										<td class="text-center">
											<a href="user-log.html" class="btn-material margin-r-5">
												<span class="btn btn-sm bg-teal btn-circle">ログ情報</span>
											</a>
											<a href="user-edit.html" class="btn-material margin-r-5">
												<span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-center"><a href="user-view.html">改札次郎</a></td>
										<td class="text-center">
											<div class="fileinput-new thumbnail thumbnail-circle thumbnail-circle-sm">
												<img src="dist/img/user2-160x160.jpg" alt="...">
											</div>
										</td>
										<td class="text-center">080-0000-0000</td>
										<td class="text-center"><span class="label bg-green">　B　</span></td>
										<td class="text-center">2018-05-28 02:14:17</td>
										<td class="text-center">
											<a href="user-log.html" class="btn-material margin-r-5">
												<span class="btn btn-sm bg-teal btn-circle">ログ情報</span>
											</a>
											<a href="user-edit.html" class="btn-material margin-r-5">
												<span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-center"><a href="user-view.html">改札次郎</a></td>
										<td class="text-center">
											<div class="fileinput-new thumbnail thumbnail-circle thumbnail-circle-sm">
												<img src="dist/img/user2-160x160.jpg" alt="...">
											</div>
										</td>
										<td class="text-center">080-0000-0000</td>
										<td class="text-center"><span class="label bg-green">　B　</span></td>
										<td class="text-center">2018-05-28 02:14:17</td>
										<td class="text-center">
											<a href="user-log.html" class="btn-material margin-r-5">
												<span class="btn btn-sm bg-teal btn-circle">ログ情報</span>
											</a>
											<a href="user-edit.html" class="btn-material margin-r-5">
												<span class="btn bg-navy btn-circle"><i class="fa fa-pencil fa-fw"></i></span>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

@yield('modal')
		<!-- Content Wrapper. Contains page content -->
		@yield('content')
		<!-- /.content-wrapper -->
	</div>
	<!-- ./wrapper -->
	</body>
	
	</html>
	@include('layouts.footer')
		


