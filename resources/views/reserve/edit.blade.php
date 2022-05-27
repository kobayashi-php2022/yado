@extends('layouts.app2')

@section('title', '新宿トラベル_宿情報の変更')
@section('content')

<body>
    
	<div class="image-container set-full-height" style="background-image: url('img/wizard-book.jpg')">
    <a href="">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="img/logo.png"alt="logo">
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
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
                        <div class="wizard-header">
		                        	<h3 class="wizard-title">
                                    口コミ投稿
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">口コミを投稿する</a></li>
			                            <li><a data-toggle="tab"></a></li>
			                        </ul>
								</div>
                                <div class="cotainer" style="margin-left: 40px; margin-top:40px">
                                        <p>口コミを投稿する</p><br>
                                        <p>投稿者名</p><br>
                                        <p>投稿内容</p><br>
                                <v-star value="5"></v-star>
		            </div> <!-- wizard container -->
                </div>
                </div>
	    	</div> <!-- row -->
            </div>
		</div> <!--  big container -->
		@endsection