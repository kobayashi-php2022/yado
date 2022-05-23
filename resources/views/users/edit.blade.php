@extends('layouts.app')

@section('content')
<h1>会員情報変更</h1>
    <form action="{{route ('users.update', $user->id)}}" method="post">
        @method('patch')
        @csrf
    <p>会員ID：{{$user->id}}</p>
<div class="container mt-3">
<p class="border rounded">
    <tr>
        <td>お名前:<input type="text" name="name" value="{{old('name', $user->name)}}" cols="30"><br></td>
        <td>住所:<input type="text" name="address" value="{{old('address', $user->address)}}"cols="30" ><br></td>
        <td>生年月日:<input type="text" name="birth" value="{{old('birth', $user->birth)}}"cols="30" ><br></td>
        <td>電話番号:<input type="tel" name="tel" value="{{old('tel', $user->tel)}}"cols="30" ><br></td>
        <td>メールアドレス:<input type="email" name="email" value="{{old('email', $user->email)}}" cols="30"><br></td>
    </tr>
</p>
</div>

    <button type="submit">変更</button>
</form>

@endsection