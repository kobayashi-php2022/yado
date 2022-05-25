@extends('layouts.app')

@section('content')
<body>
	<div class="image-container set-full-height" style="background-image: url('.jpg')">
    <a href="#">
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
                                                        <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif >
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </p>            <p>
                                                <label for="name">宿名：　　　　　</label>
                                                <input type="text" name="name" id="name" value={{ request('name')}}>
                                            </p>
                                            <p>
                                                <label for="address">住所：　　　　　</label>
                                                <input type="text" name="address" id="address" value={{ request('text')}}>
                                            </p>
                                            <p>
                                                <label for="email">メールアドレス：</label>
                                                <input type="email" name="email" id="email" value={{ request('email')}}>
                                            </p>
                                            <p>
                                                <label for="tel">電話番号：　　　</label>
                                                <input type="tel" name="tel" id="tel" value={{ request('tel')}}>
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
	@endsection


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