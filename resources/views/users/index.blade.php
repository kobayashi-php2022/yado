@extends('layouts.app')

@section('content')
<h1>マイページ</h1>
<div class="p-3 mb-2 bg-secondary text-white">予約一覧</div>
@if($user->orders()->count())
    @foreach($user->orders as $order)
        <div class="container mt-3">
        <p class="border rounded">
            <tr>
                <td>{{$order->hotel->name}}<br></td>
                <td>予約内容<br></td>
                <td>プラン名：{{$order->plan->name}}<br></td>
                <td>日程：{{$order->check_in}}-{{$order->check_out}}<br></td>
                <td>人数：{{$order->num}}<br></td>
                {{--<a href="#" onclick="deleteUser()">この予約をキャンセルする</a>
                    <form action ="{{route('oders.destroy',$order)}}" method="post" id="delete-form">
        @csrf
        @method('delette')
        <script type="text/javascript">
            function deleteUser(){
                event.preventDefault();
                if(window.confirm('本当にキャンセルしますか？')){
                    document.getElementById('delete-form').submit();
                }
            }
            </script>--}}
            </tr>
        </p>
        </div>
    @endforeach
@endif
<div class="p-3 mb-2 bg-secondary text-white">会員情報</div>
<div class="container mt-3">
        <p class="border rounded">
            
<tr>
    <td>会員ID：{{$user->id}}<br></td>
       <a href="{{route('users.edit', $user->id)}}">変更する</a></td>
      <a href="#" onclick="deleteUser()">退会する</a>
    <form action ="{{route('users.destroy',$user)}}" method="post" id="delete-form">
        @csrf
        @method('delette')
        <script type="text/javascript">
            function deleteUser(){
                event.preventDefault();
                if(window.confirm('本当に退会しますか？')){
                    document.getElementById('delete-form').submit();
                }
            }
            </script>
      
    <td>お名前：{{$user->name}}<br></td>
    <td>住所：{{$user->address}}<br></td>
    <td>生年月日：{{$user->birth}}<br></td>
    <td>電話番号：{{$user->tel}}<br></td>
    <td>メールアドレス：{{$user->email}}</td>
</tr>
</p>
</div>


@endsection