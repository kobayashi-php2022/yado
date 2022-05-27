@extends('layouts.app1')

@section('title', '新宿トラベル_宿の詳細')
@section('content')

<body class="components-page">

<a href="">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="img/logo.png"alt="logo" style="width: 50%;">
	            </div>
	        </div>
	    </a>

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
				<a href="#">マイページ</a>
			</li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('{{ \Storage::url($hotel->image) }}');">
<!--これを適用させるには―――？？
  <div class="header_image">
    @if (!is_null($hotel->image))
    <img src="{{ \Storage::url($hotel->image) }}" width="600" height="400">
    @else
    <img src="{{ \Storage::url('items/no_image.png') }}" width="400" height="400">
    @endif
</div>
-->
		<div class="container">
        <div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
			@csrf
			<h2 style="color: white;">宿の詳細情報</h2><br>
            </div>
			</div>
		</div>
	</div>
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
<table style="margin-left: 30px;">
<tr>
        <th>宿名</th>
        <th>{{ $hotel->name }}</a></th>
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


    <h2>プラン</h2>
{{-- プラン検索 --}}
{{-- <p>予約可能なプランを表示するには、日程と部屋数を入力してください</p>
<form action="{{ route('hotels.show', $hotel->id) }}" method="get">
    <dl style="margin-left: 30px;">
        <dt>チェックイン日</dt>
        <dd><input type="date" name="search_check_in" id="search_check_in" value="{{ request('search_check_in') }}"></dd>
        <dt>チェックアウト日</dt>
        <dd><input type="date" name="search_check_out" id="search_check_out" value="{{ request('search_check_out') }}"></dd>
        <dt>部屋数</dt>
        <dd><input type="number" name="search_rooms_num" id="search_rooms_num" value="{{ request('search_rooms_num') }}">部屋</dd>
    </dl>
    <input type="submit" value="検索">
</form> --}}
{{-- プラン一覧・追加 --}}
    @foreach ($plans as $plan)
    <div>
        <table style="margin-left: 30px; margin-top:30px;">
            <tr>
                <th>プラン名</th>
                <th>
                    {{ $plan->name }}
                </th>
            </tr>
            <tr>
                <td>プランの説明</td>
                <td>{!! nl2br(e($plan->content)) !!}</td>
            </tr>
            <tr>
                <td>料金</td>
                <td>{{ $plan->price }}円</td>
            </tr>
        </table>
        <a href="{{ route('plans.show', $plan->id) }}"><button type="submit" lass='btn btn-primary' style="margin-left: 30px;">空き情報の確認</button></a>
    </div>
    @endforeach
{{-- @endif --}}
<hr>
<a href="">　< 戻る</a>
            </div>
        </div>
    </div>
    </div>

    <style>
        /* 追加 */
        table {
            margin-left: 30px;  
            line-height: 2;
            font-size:16px;
        }
	</style>

@endsection