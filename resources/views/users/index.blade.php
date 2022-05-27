@extends('layouts.app1')

@section('title', '新宿トラベル_マイページ')
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
				<a href="#">TOPページへ</a>
			</li>

    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
		<div class="container">
        <div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
			<h2 style="color: white;">マイページ</h2><br>
            </div>
			</div>
		</div>
	</div>
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">

<div class="p-3 mb-2 bg-secondary"><h5 style="font-weight: bold;">予約履歴</h5></div>
@if($user->orders()->count()) 
    @foreach($orders as $order)
        <div class="container mt-2 mb-2 border rounded">
        <table style="font-size: 14px;">
            <tr>
                <td>予約日</td>
                <td>{{ $order->created_at }}</td>
            </tr>
            <tr>
                <td>ホテル名</td>
                <td>{{ $order->hotel->name }}</td>
            </tr>
            <tr>
                <td>プラン名</td>
                <td>{{$order->plan->name}}</td>
            </tr>
            <tr>
                <td>料金</td>
                <td>{{ $order->plan->price }}円</td>
            </tr>
            <tr>
                <td>日程</td>
                <td>{{$order->check_in}} から {{$order->check_out}}</td>
            </tr>
            <tr>
                <td>人数</td>
                <td>{{$order->num}}人</td>
            </tr>
            <tr>
                <td>部屋数</td>
                <td>{{ $order->room }}部屋</td>
            </tr>
        </table>
        @if($order->check_in > date("Y-m-d"))
            <a href="#" onclick="deleteOrder()"><button class="btn btn-secondary">この予約をキャンセルする</button></a>
            <form action ="{{route('orders.destroy',$order)}}" method="post" id="order-delete-form">
                @csrf
                @method('delete')
                </form>
                <script type="text/javascript">
                    function deleteOrder(){
                        event.preventDefault();
                        if(window.confirm('本当にキャンセルしますか？')){
                            document.getElementById('order-delete-form').submit();
                        }
                    }
                </script>
            </form>
        @endif
        </div>
    @endforeach
    {{ $orders->links('pagination::bootstrap-4') }}
@else
    <p>現在予約しているプランはありません。</p>
@endif 
        </div>
<hr/>

<div class="p-3 mb-2 bg-secondary"><h5 style="font-weight: bold;">会員登録情報</h5></div>
<div class="cotainer">
<div class="row justify-content-center mt-5">
<div class="col-md-8">
<div class="card">
<table>
            <tr>
                <td>会員ID：{{$user->id}}</td>
            </tr>
            <tr>
                <td>お名前：{{$user->name}}</td>
            </tr>
            <tr>
                <td>住所：{{$user->address}}</td>
            </tr>
            <tr>
                <td>生年月日：{{$user->birth}}</td>
            </tr>
            <tr>
                <td>電話番号：{{$user->tel}}</td>
            </tr>
            <tr>
                <td>メールアドレス：{{$user->email}}</td>
            </tr>
        </table>
<p class="text-center">
        <a href="{{route('users.edit', $user->id)}}"><input type="submit" value="変更" class="btn btn-Primary"></a>
                            <a href="#" onclick="deleteUser()"><input type="submit" value="退会" class="btn btn-secondary"></a>
                            <form action ="{{route('users.destroy',$user)}}" method="post" id="delete-form">
                            @csrf
                            @method('delete')
                                <script type="text/javascript">
                                function deleteUser(){
                                    event.preventDefault();
                                    if(window.confirm('本当に退会しますか？')){
                                    document.getElementById('delete-form').submit();
                                    }
                                }
                                </script>
                                </p>
            </div>
        </div>
    </div>
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