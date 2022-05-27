@extends('layouts.app1')

@section('title', '新宿トラベル_管理者画面')
@section('content')

<body class="components-page">

<a href="">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="img/logo.png"alt="logo" style="width: 50%;">
	            </div>
	        </div>
</a>

<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle" data-target="#navigation-doc">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-doc">
		<ul  class="nav navbar-nav navbar-right">
        <li>
				<a href="#">管理者画面TOP</a>
			</li>
			<li>
                <a href="#">会員検索</a>
            </li>
			<li>
                <a href="#">宿検索</a>
            </li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h1 class="title">管理者画面</h1>
				</div>
			</div>
		</div>
	</div>
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="tim-container">
						    	<!-- tooltip row -->
						<div class="tim-row" id="tooltip-row">
						<div class="card wizard-card2" data-color="purple">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-2">
									<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="宿を検索する">
										<input type="radio" name="job" value="Design">
										<div class="icon">
											<i class="material-icons">rounded_corner</i>
										</div>
										<h6>宿検索</h6>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="会員を検索する">
										<input type="radio" name="job" value="Code">
										<div class="icon">
											<i class="material-icons">accessibility</i>
										</div>
										<h6>会員検索</h6>
									</div>
								</div>
							</div>
						</div>
				    </div>
				    <!-- end row -->
            </div>
        </div>
        </div>
    </div>
    </div>
    @endsection
