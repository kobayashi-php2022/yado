@extends('layouts.app1')

@section('title', '新宿トラベル_宿詳細画面')
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
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
		<div class="container" style="margin-top: 50px;">
			<div class="row">
            <form action="{{ route('members.index') }}" method="get">
				<div class="col-md-6 col-md-offset-3 text-center" style="background-color:rgba(255,255,255,0.25); text-shadow: 1px 1px 7px black;">
			@csrf
			<h2 style="color: white;">会員情報の検索</h2><br>
            <dl>
            <dt><strong style="color: white; font-size:16px;">ID検索：</strong><input type="number" name="id" id="id" min="1" max="300" value="{{ request('id') }}"></dt><br>
            <dt><strong style="color: white; font-size:16px;">名前検索：</strong><input type="text" name="name" id="name" value="{{ request('name') }}"></dt><br>
            <button class="btn btn-primary" type="submit">検索</button>
		</div>
    </form>	
			</div>
		</div>
	</div>    
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
            <h2>会員一覧</h2>
            @foreach ($users as $member)
                <table style="margin-left: 30px;">
                    <tr>
                        <th>id</th>
                        <th><a href="{{ route('members.show', $member->id) }}">{{ $member->id }}</a></th>
                    </tr>
                    <tr>
                        <td>名前</td>
                        <td>{{ $member->name }}</td>
                    </tr>
                </table>
            @endforeach
            {{ $users->appends(Request::all())->links('pagination::bootstrap-4') }}
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
                                font-size:16px;
                            }
                            dt {
                                color: white;
                            }
                        </style>
@endsection