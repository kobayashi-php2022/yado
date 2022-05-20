@extends('layouts.app')

@section('content')
<h1>マイページ</h1>
@if($user->orders()->count())
    @foreach($user->orders as $order)
        <div class="container mt-3">
        <p class="border rounded">
            <tr>
                <td>{{$order->hotel->name}}</td>
                <td>予約内容</td>
                <td>プラン名：{{$order->plan->name}}</td>
                <td>日程：{{$order->check_in}}-{{$order->check_out}}</td>
                <td>人数：{{$order->num}}</td>
            </tr>
        </p>
        </div>
    @endforeach
@endif
<div class="container mt-3">
        <p class="border rounded">
<tr>
    <td>会員ID：{{$user->id}}
        <a href="{{route('users.edit', $user)}}">変更する</a></td>
    <td>お名前：{{$user->name}}</td>
    <td>住所：{{$user->address}}</td>
    <td>生年月日：{{$user->birth}}</td>
    <td>電話番号：{{$user->tel}}</td>
    <td>メールアドレス：{{$user->email}}</td>
</tr>
</p>
</div>


@endsection