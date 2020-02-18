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
				<h1>スタッフ作成</h1>
			</section>

			<!-- Main content -->
			<section class="content container-fluid">
				<div class="pull-right">
					<a href="user-list.html" class="btn-material">
						<span class="btn btn-sm bg-teal">
							<span>スタッフ一覧へ戻る</span>
						</span>
					</a>
				</div>
				<div class="box">
					<div class="box-icon pull-left"><i class="fa fa-user"></i></div>
					<div class="box-header clearfix">
						<h3 class="box-title">スタッフ作成<small class="d-block small mt-1">スタッフを新規作成できます。</small></h3>
					</div>
					<form role="form" class="">
						<div class="box-body">
							<div class="form-group col-xs-12">
								<label for="inputName" class="control-label">スタッフ名</label>
								<input type="name" class="form-control input-lg" id="inputName">
							</div>
							<div class="form-group col-xs-12">
								<legend>画像</legend>
								<div class="fileinput text-center fileinput-exists">
									<div class="fileinput-new thumbnail thumbnail-circle">
										<img src="img/sample/upload-image.png" alt="...">
									</div>
									<div class="btn-area">
										<span class="btn-material">
											<span class="btn btn-sm btn-file bg-maroon btn-circle">画像を選択
												<input type="file">
											</span>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group col-xs-12">
								<label for="inputTel" class="control-label">TEL（IDとなります）</label>
								<input type="tel" class="form-control input-lg" id="inputTel">
							</div>
							<div class="form-group col-xs-12">
								<label for="inputPas" class="control-label">パスワード</label>
								<a href="#" data-toggle="tooltip" data-placement="top" title="6文字以上の半角英数字記号"><i class="fa fa-question-circle-o"></i>
												</a>
								<input type="text" class="form-control input-lg" id="inputPas">
							</div>
							<div class="form-group  col-xs-12">
								<label>スタッフランクの設定</label>
								<div class="row">
									<div class="col-md-4">
										<div class="radio">
											<label>
												<input type="radio" name="rank-radio"> マスター
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="radio">
											<label>
												<input type="radio" name="rank-radio"> A
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="radio">
											<label>
												<input type="radio" name="rank-radio"> B
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group  col-xs-12">
										<legend>備考</legend>
										<div class="row">
											<div class="form-group col-xs-12">
												<textarea class="form-control input-lg" rows="3"></textarea>
											</div>
										</div>
									</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer clearfix">
							<a href=# class="btn-material pull-right">
								<span class="btn btn-lg bg-aqua">保存する</span>
							</a>
						</div>
					</form>
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

	