@extends('layouts.app1')

@section('title', '新宿トラベル')
@section('content')

<body class="components-page2">

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


@endsection