@extends('layouts.app')

@section('content')
<h1>会員情報変更<h1>
    <form action="{{route ('custormers.update', $customer->id)}}" method="post">
        @method('patch')
        @csrf
    <p>会員ID：{{$customer->id}}</p>
<div class="container mt-3">
<p class="border rounded">
    <tr>
        <td>お名前<input type="text" name="name" value="{{old('name', $customer->name)}}" ></td>
        <td>住所<input type="text" name="address" value="{{old('address', $customer->address)}}" ></td>
        <td>生年月日<input type="text" name="birth" value="{{old('name', $customer->name)}}" ></td>
        <td>電話番号<input type="tel" name="tel" value="{{old('tel', $customer->tel)}}" ></td>
        <td>メールアドレス<input type="email" name="email" value="{{old('email', $customer->email)}}" ></td>
    </tr>
</p>
</div>

    <button type="submit">変更</button>
</form>

@endsection