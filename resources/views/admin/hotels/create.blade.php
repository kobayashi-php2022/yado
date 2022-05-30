<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>新宿トラベル_宿情報入力画面</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('img/wizard-book.jpg')">
    <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="logo.png"alt="logo">
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
				<a href="#">TOP</a>
			</li>
			<li>
                <a href="#">マイページ</a>
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
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">新規宿泊施設の登録</a></li>
			                            <li><a data-toggle="tab"></a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
                                            <div class="create">
			                                	<h4 class="info-text">新規宿泊施設の情報を入力してください</h4>
                                                @include('commons/error_flash')
			                            	</div>
                                            <form action="{{ route('hotels.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
		                                	<div class="col-sm-6"style="text-align:left; color:black;">
                                                    <p>
                                                <label for="category">宿分類：　　　　</label>
                                                <select name="category" id="category">
                                                    <option value=""></option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @if(old('category') == $category->id) selected @endif >
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </p>            <p>
                                                <label for="name">宿名：　　　　　</label>
                                                <input type="text" name="name" id="name" value={{ old('name')}}>
                                            </p>
                                            <p>
                                                <label for="address">住所：　　　　　</label>
                                                <input type="text" name="address" id="address" value={{ old('text')}}>
                                            </p>
                                            <p>
                                                <label for="email">メールアドレス：</label>
                                                <input type="email" name="email" id="email" value={{ old('email')}}>
                                            </p>
                                            <p>
                                                <label for="tel">電話番号：　　　</label>
                                                <input type="tel" name="tel" id="tel" value={{ old('tel')}}>
                                            </p>
                                            {{-- 画像投稿 --}}
                                            <p>
                                                <label for="image">イメージ画像：</label>
                                                <input type="file" name="image" id="image">
                                            </p>

                                            {{-- <p>
                                                <label for="text">プラン名</label>
                                                <input type="text" name="text" id="text">
                                            </p>
                                            <p>
                                                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                                            </p> --}}
                                            <input type="submit" value="登録">
		                                	</div>
		                            	</div>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
                </div>
                </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
            <div class="copyright">
                &copy; yado4
            </div>
        </div>
	    </div>
	</div>

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


<?php /*
@extends('layouts.app')

@section('content')
    <h1>新規宿泊施設の登録</h1>
    @include('commons/error_flash')
    <div class="create">
        <form action="{{ route('hotels.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <p>
                <label for="category">宿分類</label>
                <select name="category" id="category">
                    <option value=""></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </p>
            <p>
                <label for="name">宿名</label>
                <input type="text" name="name" id="name" value={{ request('name')}}>
            </p>
            <p>
                <label for="address">住所</label>
                <input type="text" name="address" id="address" value={{ request('text')}}>
            </p>
            <p>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" value={{ request('email')}}>
            </p>
            <p>
                <label for="tel">電話番号</label>
                <input type="tel" name="tel" id="tel" value={{ request('tel')}}>
            </p>
            {{-- 画像投稿 --}}
            <p>
                <label for="image">イメージ画像</label>
                <input type="file" name="image" id="image">
            </p>

            {{-- <p>
                <label for="text">プラン名</label>
                <input type="text" name="text" id="text">
            </p>
            <p>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </p> --}}

            <input type="submit" value="登録">
            <hr>
            <a href="{{ route('hotels.index') }}">戻る</a>
        </form>
    </div>
@endsection