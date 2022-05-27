@extends('layouts.app3')

@section('title', '新宿トラベル_会員情報画面')
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
                                    会員情報の変更
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                <li><a href="#details" data-toggle="tab">会員情報の変更</a></li>
			                <li><a data-toggle="tab"></a></li>
			            </ul>
						</div><br><br>
          <div class="cotainer">
          <form action="{{route ('users.update', $user->id)}}" method="post">
        @method('patch')
        @csrf
            <div class="form-group row">
              <label class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <p>会員ID：{{$user->id}}</p>
            </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="text" name="name" class="form-control" value="{{old('name', $user->name)}}" placeholder="お名前" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="text" name="address" value="{{old('address', $user->address)}}" class="form-control"  placeholder="住所" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="text" name="birth" value="{{old('birth', $user->birth)}}" class="form-control"  placeholder="生年月日" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="tel" name="tel" value="{{old('tel', $user->tel)}}" class="form-control" placeholder="電話番号" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="email" name="email" value="{{old('email', $user->email)}}" class="form-control"  placeholder="メールアドレス" required>
              </div>
            </div>
            <br>
            <div style="text-align: center;">
              <p><input type="submit" value="変更" class='btn btn-primary'></p><br>
              </div>
          </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

@endsection