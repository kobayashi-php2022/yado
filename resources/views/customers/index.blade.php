@extends('layouts.app')

@section('content')
<h1>マイページ</h1>
@if($customer->orders()->count())
    @foreach($customer->orders as $order)
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
    <td>会員ID：{{$customer->id}}
        <a href="{{route('customers.edit', $customer)}}">変更する</a></td>
    <td>お名前：{{$customer->name}}</td>
    <td>住所：{{$customer->address}}</td>
    <td>生年月日：{{$customer->birth}}</td>
    <td>電話番号：{{$customer->tel}}</td>
    <td>メールアドレス：{{$customer->email}}</td>
</tr>
</p>
</div>
<p>退会したい場合は、<a href="{{route('こちらへお進みください

@endsection