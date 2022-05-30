@extends('layouts.mapp1')

@section('title', '新宿トラベル_マイページ')
@section('content')

<div class="components-page">
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
        @else
            <form action="{{ route('comments.create') }}" method="get">
                @csrf
                <input type="hidden" name="hotel_id" value="{{ $order->hotel->id }}">
                <input type="submit"class="btn btn-primary" value="口コミを投稿する">
            </form>
        @endif
        </div>
    @endforeach
    {{ $orders->links('pagination::bootstrap-4') }}
@else
    <p>現在予約しているプランはありません。</p>
@endif 

<div class="p-3 mb-2 bg-secondary"><h5 style="font-weight: bold;">会員登録情報</h5></div>
        <div class="container mt-2 mb-2 border rounded">
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
        </div>
        <p>
        <a href="{{route('users.edit', $user->id)}}"><button type="submit"class="btn btn-primary">変更</button></a>
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