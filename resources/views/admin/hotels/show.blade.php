@extends('layouts.app1')

@section('title', '新宿トラベル_宿詳細画面')
@section('content')

<body class="components-page">

<a href="">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="img/logo.png"alt="logo">
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

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('');">
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
<table>
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
    {{-- @if(\Auth::user()->auth == "管理者") --}}
    <p>
        <button class="btn btn-primary" type="submit">編集</button>
        <button class="btn btn-default">削除</button>
    <form action="" method="post" id="hotels-delete-form">
        @csrf
        @method('delete')
    </form>
    <script type="text/javascript">
        function deleteHotel() {
            event.preventDefault();
            if(window.confirm('この宿にお客様の予約がある場合、自動的に削除されます。\r\n本当に削除しますか？')) {
                document.getElementById('').submit();
            }
        }
    </script>
</p>
{{-- @endif --}}

{{-- プラン一覧・追加 --}}
<h2>プラン一覧</h2>
<table style="margin-left: 30px;">
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
        <td>{{ $plan->price }}</td>
    </tr>
    <tr>
        <td>部屋数</td>
        <td>{{ $plan->rooms_num }}</td>
    </tr>
    <tr>
        <td>登録日</td>
        <td>{{ $plan->created_at }}</td>
    </tr>
    <tr>
        <td>最終更新日</td>
        <td>{{ $plan->updated_at }}</td>
    </tr>
</table>
{{-- @if(\Auth::user()->auth == "管理者") --}}
<form action="">
    @csrf
    <button class="btn btn-primary"onclick="location.href=''">編集</button>>
    <input class="btn btn-danger" type="submit" value="プランの追加">
    <input type="hidden" name="hotel_id" value="">
</form>
{{-- @endif --}}
<hr>
<a href="">< 一覧に戻る</a>
            </div>
        </div>
    </div>
    </div>

    <style>
        /* 追加 */
        table {
            margin-left: 30px;  
            line-height: 2;
            font-size:17px;
        }
        table th{
            font-size:20px;
        }
	</style>

@endsection