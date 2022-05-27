@extends('layouts.app3')

@section('title', '新宿トラベル_ログイン画面')
@section('content')

<body>
	<div class="image-container set-full-height" style="background-image: url('img/wizard-city.jpg')">
    <a href="">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="img/logo.png"alt="logo" style="width: 50%;">
	            </div>
	        </div>
	    </a>
        
    <body class="components-page2">

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
				<a href="#">TOPページへ</a>
			</li>
			<li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="purple" id="wizard">
                        <div class="tab-content">            
                                    <div class="row">
                                    <div class="col-md-8 offset-md-2" style="text-align: center; margin-top:70px;">
                                    <h3 class="wizard-title">予約完了</h3><br>
                                    <br><p style="font-size:16px;">予約が完了しました。<br>予約の内容を確認するには右上の「マイページ」をクリックしてください。</p><br>
                                    <a href="{{ route('hotels.index') }}"><input type="button" value="宿検索画面へ" class="btn btn-primary"></a>
                                    </div>
                                    </div>
		                        </div> <!-- wizard container -->
    <hr>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
            </div>
	    </div> <!--  big container -->

@endsection
