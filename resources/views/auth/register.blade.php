<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>新宿トラベル_新規会員登録</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />
	<link href="css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('/img/wizard-profile.jpg')">
  <a href="{{ route('reserve.index') }}">
	         <div class="logo-container">
	            <div class="logo">
	                <a href="{{ route('reserve.index') }}"><img src="/img/logo.png"alt="logo" style="width: 50%;"></a>
	            </div>
	        </div>
	    </a>
        
    <body class="components-page2">

    <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
  <div class="container">
    <div class="collapse navbar-collapse" id="navigation-doc">
		<ul  class="nav navbar-nav navbar-right">
        <li>
				<a href="{{ route('reserve.index') }}">TOPページ</a>
			</li>
    	</ul>

    </div>
  </div>
</nav>

<div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	  新規会員登録
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			              <li><a href="#about" data-toggle="tab">新規会員情報の入力</a></li>
			              <li><a href="#" data-toggle="tab"></a></li>
			            </ul>
								</div>

		                <div class="tab-content">
                      <form action="{{route('conf')}}" method="post" onsubmit="">
                      @csrf
                      <br>
                      <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right"></label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name" placeholder="氏名" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right"></label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email" placeholder="メールアドレス" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label text-md-right"></label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="パスワード" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="confirm-password" class="col-md-3 col-form-label text-md-right"></label>
                                    <div class="col-md-6">
                                        <input type="password" id="confirm-password" class="form-control" name="confirm-password" placeholder="パスワード確認" required>
                                        <div class="valid-feedback">O.K.</div>
                                        <div class="invalid-feedback">入力されたパスワードが一致しません。</div>
                                        <div class="row">
                                    @if($errors->count())
                                    <ul class="alert" style="color:red; font-size:12px;">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    <div class="col-md-8 offset-md-3">
                                    <p><input type="submit" value="入力内容を確認" class="btn btn-success"></p><br>
                                    <p>または　<a href="{{route('login')}}">ログイン</a></p>
                                    </div>
                                    </div>
                                    <br>
                                    </div>
                                    </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
	        </div>
	    </div>

	    <div class="footer">
	        <div class="container text-center">
            <div class="copyright">
                &copy; shinjuku toravel -2022
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

  <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.bootstrap.js" type="text/javascript"></script>
	<script src="js/material-bootstrap-wizard.js"></script>
	<script src="js/jquery.validate.min.js"></script>

</html>