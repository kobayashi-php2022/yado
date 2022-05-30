@extends('layouts.app1')

@section('title', '新宿トラベル_宿詳細画面')
@section('content')

<div class="components-page">
<div class="wrapper">
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
		<div class="container">
        <div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
			@csrf
			<h2 style="color: white;">予約一覧</h2><br>
            </div>
			</div>
		</div>
	</div>
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
            @if($user->orders->count()>0) 
    <?php $i=1;?>
    @foreach($user->orders as $order)
    <div class="container mt-2 mb-2">
    <table class="border rounded">
        <?php echo $i;
              $i++; ?>
        <tr>
            <td>ホテル名：</td>
            <td>{{ $order->hotel->name }}</td>
        </tr>
        <tr>
            <td>プラン名：</td>
            <td>{{$order->plan->name}}</td>
        </tr>
        <tr>
            <td>日程：</td>
            <td>{{$order->check_in}} から {{$order->check_out}}</td>
        </tr>
        <tr>
            <td>人数：</td>
            <td>{{$order->num}}人</td>
        </tr>
        <tr>
            <td>部屋数</td>
            <td>{{ $order->room }}部屋</td>
        </tr>
            <a href="#" onclick="deleteOrder()" class='btn btn-success'>この予約をキャンセル</a>
            <form action ="{{route('members.ruin',$order->id)}}" method="post" id="delete-form">
            @csrf
            @method('delete')
            </form>
            <script type="text/javascript">
                function deleteOrder(){
                event.preventDefault();
                if(window.confirm('本当にキャンセルしますか？')){
                    document.getElementById('delete-form').submit();
                }
                }
            </script>
    </table>
    </div>
    @endforeach
@else
    <p>現在予約しているプランはありません。</p>
@endif 

<h2>会員情報詳細</h2>
<table style="margin-left: 30px;">
<tr>
        <th>ID</th>
        <th>{{ $user->id }}</a></th>
    </tr>
    <tr>
        <td>名前</td>
        <td>{{ $user->name }}</td>
    </tr>
    <tr>
        <td>住所</td>
        <td>{{ $user->address }}</td>
    </tr>
    <tr>
        <td>電話番号</td>
        <td>{{ $user->tel }}</td>
    </tr>
    <tr>
        <td>メールアドレス</td>
        <td>{{ $user->email }}</td>
    </tr>
    <tr>
            <td><a href="{{ route('members.edit', $user) }}" class='btn btn-primary'>編集</a></td>
            </br>
            <td>
            <a href="#" onclick="deleteUser()" class='btn'>この会員を退会</a>
            <form action ="{{route('members.destroy',$user)}}" method="post" id="delete-form">
            @csrf
            @method('delete')
            </form>
            <script type="text/javascript">
                function deleteUser(){
                event.preventDefault();
                if(window.confirm('本当に退会させますか？')){
                    document.getElementById('delete-form').submit();
                }
                }
            </script>
            </td>
    </tr>
</table>
<hr>
<a href="/members">< 一覧に戻る</a>
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
