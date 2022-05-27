@extends('layouts.app3')

@section('title', '新宿トラベル_新規会員登録完了')
@section('content')

<body>
	<div class="image-container set-full-height" style="background-image: url('img/wizard-profile.jpg')">
    <a href="">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="logo.png"alt="logo" style="width: 50%;">
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
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	  新規会員登録
		                        	</h3>
		                    	</div>
                                
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">新規会員情報の確認</a></li>
			                            <li><a href="#" data-toggle="tab"></a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
                                <br><p style="text-align: center; font-size:16px;">以下の内容でお間違いないでしょうか</p><br>
                                <form action="{{route('complete')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-4 col-form-label text-md-right">氏名</div>
                                    <div class="col-md-6">
                                        <p class="form-control">{{ request()->name }}</p>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-md-4 col-form-label text-md-right">メールアドレス</div>
                                    <div class="col-md-6">
                                    <p class="form-control">{{ request()->email }}</p>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-md-4 col-form-label text-md-right">パスワード</div>
                                    <div class="col-md-6">
                                    <p class="form-control">{{ request()->password }}</p>
                                    </div>
                                    </div><br>
                                    <div class="row">
                                    <div class="col-md-8 offset-md-4">
                                    <input type="button" value="戻る" class="btn btn-default" onClick="history.back()">
                                    <input type="submit" class="btn btn-success ml-12" value="登録">
                                    </div>
                                    </div>
                                    <input type="hidden" name="name" value="{{ request('name') }}">
                                    <input type="hidden" name="email" value="{{ request('email') }}">
                                    <input type="hidden" name="password" value="{{ request('password') }}">
                                    <input type="hidden" name="auth" value="会員">
                                </form>		                
                              </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
            <div class="copyright">
                &copy; yado4
            </div>
        </div>
	</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

                                    <script type="text/javascript">
                                    var elm_pass = $('#password');
                                    var elm_confirm = $('#confirm-password');
                                    elm_confirm.on('keyup', function() {
                                        // まだパスワード（確認）を入力していない
                                        if (elm_confirm.val() === "") {
                                        elm_confirm.removeClass("is-valid");
                                        elm_confirm.removeClass("is-invalid");
                                        return;
                                        }
                                        var array_pass_chars = elm_pass.val().split("");
                                        var array_confirm_chars = elm_confirm.val().split("");
                                        $.each(array_confirm_chars, function(index, char) {
                                        if (array_pass_chars[index] === char){
                                            // 先頭から一文字ずつ一致している場合には中途でも何も表示しない
                                            elm_confirm.removeClass("is-valid");
                                            elm_confirm.removeClass("is-invalid");
                                        }
                                        else{
                                            // 一文字でも異なる場合はInvalid
                                            elm_confirm.removeClass("is-valid");
                                            elm_confirm.addClass("is-invalid");
                                            return false;
                                        }
                                        });
                                        // 完全一致したらValid
                                        if (elm_pass.val() === elm_confirm.val()) {
                                        elm_confirm.addClass("is-valid");
                                        }
                                        else {
                                        elm_confirm.addClass("is-invalid");
                                        }
                                    });
                                    elm_confirm.on('blur', function() {
                                        if (elm_pass.val() === elm_confirm.val()) {
                                        elm_confirm.removeClass("is-invalid");
                                        elm_confirm.addClass("is-valid");
                                        }
                                        else {
                                        elm_confirm.removeClass("is-valid");
                                        elm_confirm.addClass("is-invalid");
                                        }
                                    });
                                    </script>

</body>

	<!--   Core JS Files   -->
    <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js"></script>

</html>
@endsection

<?php /*
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>会員登録内容の確認</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    </div>
    </header>
    <div class="cotainer">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                <div class="card">
                    <div class="card-header">会員登録内容の確認</div>
                    <div class="card-body">

        <form action="{{route('complete')}}" method="POST">
          @csrf
          <div class="form-group row">
              <div class="col-md-4 col-form-label text-md-right">氏名</div>
              <div class="col-md-6">
                <p class="form-control">{{ request()->name }}</p>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-4 col-form-label text-md-right">メールアドレス</div>
              <div class="col-md-6">
              <p class="form-control">{{ request()->email }}</p>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-4 col-form-label text-md-right">パスワード</div>
              <div class="col-md-6">
              <p class="form-control">{{ request()->password }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 offset-md-4">
              <input type="button" value="戻る" class="btn btn-secondary" onClick="history.back()">
              <input type="submit" class="btn btn-secondary ml-12" value="登録">
              </div>
              </div>
              <input type="hidden" name="name" value="{{ request('name') }}">
              <input type="hidden" name="email" value="{{ request('email') }}">
              <input type="hidden" name="password" value="{{ request('password') }}">
              <input type="hidden" name="auth" value="会員">
          </form>
          </div>
              </div>
              </div>
              </div>
              </div>
</body>
</html>