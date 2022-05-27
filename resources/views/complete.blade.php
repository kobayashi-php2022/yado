@extends('layouts.app3')

@section('title', '新宿トラベル_新規会員登録')
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
		                        <div class="tab-content">            
                                    <div class="row">
                                    <div class="col-md-8 offset-md-2" style="text-align: center; margin-top:70px;">
                                    <h3 class="wizard-title">会員登録が完了しました</h3><br>
                                    <br><p style="font-size:16px;">以下よりログインを行ってください</p><br>
                                    <a href="{{route('login')}}"><input type="button" value="ログインする" class="btn btn-success"></a>
                                    </div>
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
