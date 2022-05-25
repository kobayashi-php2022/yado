<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8" />

	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.ico" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>新宿トラベル_宿情報検索</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/material-bootstrap-wizard.css" rel="stylesheet"/>
	<link href="css/demo.css" rel="stylesheet" />

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

	<style>
		pre.prettyprint{
		    background-color: #eee;
		    border: 0px;
		    margin-bottom: 60px;
		    margin-top: 30px;
		    padding: 20px;
		    text-align: left;
		}
		.atv, .str{
		    color: #05AE0E;
		}
		.tag, .pln, .kwd{
		    color: #3472F7;
		}
		.atn{
		    color: #2C93FF;
		}
		.pln{
		    color: #333;
		}
		.com{
		    color: #999;
		}
		.space-top{
		    margin-top: 50px;
		}
		.btn-primary .caret{
		    border-top-color: #3472F7;
		    color: #3472F7;
		}
		.area-line{
		    border: 1px solid #999;
		    border-left: 0;
		    border-right: 0;
		    color: #666;
		    display: block;
		    margin-top: 20px;
		    padding: 8px 0;
		    text-align: center;
		}
		.area-line a{
		    color: #666;
		}
		.container-fluid{
		    padding-right: 15px;
		    padding-left: 15px;
		}
		.table-shopping .td-name{
			min-width: 130px;
		}
	</style>
</head>

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

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
		<div class="container">
			<div class="row">
            <form action="{{ route('hotels.index') }}" method="get">
				<div class="col-md-6 col-md-offset-3 text-center" style="background-color:rgba(255,255,255,0.25); text-shadow: 1px 1px 7px black;">
			@csrf
			<h2 style="color: white;">宿情報の検索</h2><br>
    <dl>
        <dt><strong style="color: white; font-size:16px;">名前検索：</strong><input type="text" name="name" id="name" value="{{ request('name') }}"></dt><br>

        <dt><strong style="color: white; font-size:16px;">住所検索：</strong><input type="text" name="address" id="address" value="{{ request('address') }}"></dt><br>

        <dt><strong style="color: white; font-size:16px;">宿分類検索：</strong>
            <select name="category" id="category">
                <option value=""></option>
                @foreach ($categories as $category)
                {{-- 検索した内容を残したい --}}
                    <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select></dt>            
    </dl>
        <button class="btn btn-primary btn-lg" type="submit">検索</button><br>
        {{-- @if(Auth::user()->auth == "管理者") --}}
            <button class="btn btn-danger btn-sm"><a href="{{ route('hotels.create') }}" style="color: white;">新規登録</a></button><br><br>
        {{-- @endif --}}     
		</div>
    </form>	
			</div>
		</div>
	</div>
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
				<p>検索結果を表示</p>
    {{-- 宿データの一覧 --}}
    @foreach ($hotels as $hotel)
        <div class="info_index">
            {{-- 宿写真と宿詳細 --}}
            <div class="info" style="display:flex; margin:40px;">
                @if ($hotel->image !== "")
                <img src="{{ \Storage::url($hotel->image) }}" width="100" height="100">
                @else
                <img src="{{ \Storage::url('items/no_image.png') }}" width="100" height="100">
                @endif
                
                <table style="margin-left: 30px;">
                    <tr>
                        <th>宿名</th>
                        <th><a href="{{ route('hotels.show', $hotel->id) }}">{{ $hotel->name }}</a></th>
                    </tr>
                    <tr>
                        <td>宿分類</td>
                        <td>{{ $hotel->category->name }}</td>
                    </tr>
                    <tr>
                        <td>住所</td>
                        <td>{{ $hotel->address }}</td>
                    </tr>
                    <tr>
                        <td>電話番号</td>
                        <td>{{ $hotel->tel }}</td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td>{{ $hotel->email }}</td>
                    </tr>
                    <tr>
                        <td>登録日</td>
                        <td>{{ $hotel->created_at }}</td>
                    </tr>
                    <tr>
                        <td>最終更新日</td>
                        <td>{{ $hotel->updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endforeach
{{ $hotels->appends(Request::All())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    </div>
    <footer class="footer footer-transparent footer-documentation">
        <div class="container">
            <div class="copyright">
                &copy; yado4
            </div>
        </div>
    </footer>

</div>
</body>

	<!--   Core JS Files   -->
	<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="../js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="../js/jquery.validate.min.js"></script>

    <script>
        var header_height;
        var fixed_section;
        var floating = false;

        $().ready(function(){
            suggestions_distance = $("#suggestions").offset();
            pay_height = $('.fixed-section').outerHeight();

			$(window).on('scroll', materialDesign.checkScrollForTransparentNavbar);
        });
    </script>

</html>



<?php /*
@extends('layouts.app')

@section('content')
<form action="{{ route('hotels.index') }}" method="get">
    @csrf
    <h1>宿情報を検索</h1>
    {{-- @if(Auth::user()->auth == "管理者") --}}
    <a href="{{ route('hotels.create') }}">新規登録</a>
    {{-- @endif --}}
    <dl>
        <dt>名前検索：</dt>
        <dl><input type="text" name="name" id="name" value="{{ request('name') }}"></dl>

        <dt>住所検索：</dt>
        <dl><input type="text" name="address" id="address" value="{{ request('address') }}"></dl>

        <dt>宿分類検索：</dt>
        <dl>
            <select name="category" id="category">
                <option value=""></option>
                @foreach ($categories as $category)
                {{-- 検索した内容を残したい --}}
                    <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </dl>

        <p><input type="submit" value="検索"></p>
    </form>
    <hr>
    <p>検索結果を表示</p>
    {{-- 宿データの一覧 --}}
    @foreach ($hotels as $hotel)
        <div class="info_index">
            {{-- 宿写真と宿詳細 --}}
            <div class="info" style="display:flex; margin:40px;">
                @if ($hotel->image !== "")
                <img src="{{ \Storage::url($hotel->image) }}" width="100" height="100">
                @else
                <img src="{{ \Storage::url('items/no_image.png') }}" width="100" height="100">
                @endif
                
                <table style="margin-left: 30px;">
                    <tr>
                        <th>宿名</th>
                        <th><a href="{{ route('hotels.show', $hotel->id) }}">{{ $hotel->name }}</a></th>
                    </tr>
                    <tr>
                        <td>宿分類</td>
                        <td>{{ $hotel->category->name }}</td>
                    </tr>
                    <tr>
                        <td>住所</td>
                        <td>{{ $hotel->address }}</td>
                    </tr>
                    <tr>
                        <td>電話番号</td>
                        <td>{{ $hotel->tel }}</td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td>{{ $hotel->email }}</td>
                    </tr>
                    <tr>
                        <td>登録日</td>
                        <td>{{ $hotel->created_at }}</td>
                    </tr>
                    <tr>
                        <td>最終更新日</td>
                        <td>{{ $hotel->updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endforeach
{{ $hotels->appends(Request::All())->links('pagination::bootstrap-4') }}
@endsection