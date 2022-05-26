@extends('layouts.app')

@section('content')

<h1>会員情報詳細</h1>
<div class="p-3 mb-2 bg-secondary text-white">予約一覧</div>
 @if($user->orders->count()>0) 
    <?php $i=1;?>
    @foreach($user->orders as $order)
    <div class="container mt-2 mb-2">
    <table class="border rounded">
        <?php echo $i;
              $i++; ?>
        <tr>
            <td>ホテル名</td>
            <td>{{ $order->hotel->name }}</td>
        </tr>
        <tr>
            <td>プラン名</td>
            <td>{{$order->plan->name}}</td>
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
            <a href="#" onclick="deleteOrder()">この予約をキャンセルする</a>
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
        </tr>
    </table>
    </div>
    @endforeach
@else
    <p>現在予約しているプランはありません。</p>
@endif 

<div class="p-3 mb-2 bg-secondary text-white">会員情報詳細</div>
<table style="margin-left: 10px;">
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
            <td><a href="{{ route('members.edit', $user) }}">編集する</a></td>
            </br>
            <td>
            <a href="#" onclick="deleteUser()">この会員を退会させる</a>
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


</table>
<hr>
<a href="/members">一覧に戻る</a>
@endsection