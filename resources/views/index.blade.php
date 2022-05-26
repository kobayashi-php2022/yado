@extends('layouts.app3')

@section('title', '新宿トラベル_ログイン画面')
@section('content')

<body>
	<div class="image-container set-full-height" style="background-image: url('img/wizard-city.jpg')">
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
                            <div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		ログイン
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                <li><a href="#details" data-toggle="tab">ログイン情報の入力</a></li>
			                <li><a data-toggle="tab"></a></li>
			            </ul>
								</div><br><br>
          <div class="cotainer">
          <form action="{{route('login')}}" method="post" onsubmit="">
          @csrf
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="email" id="email" class="form-control" name="email" placeholder="メールアドレス" value="{{old('email')}}" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="password" id="password" class="form-control" name="password" placeholder="パスワード" required>
              </div>
            </div>
            <br>
            <div style="text-align: center;">
              <p><input type="submit" value="ログイン" class='btn btn-primary'></p><br>
              <p>または、<a href="{{route('register')}}">新規会員登録</a></p>
              </div>
            <div class="row">
              <div class="col-md-8 offset-md-3">
              @if($errors->count())
            <ul class="alert" style="color:red; font-size:12px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
              </div>
              </div>
          </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

@endsection