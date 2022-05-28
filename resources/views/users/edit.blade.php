@extends('layouts.app')

@section('content')
<h1>会員情報変更</h1>
@include('commons/error_flash')
    <form action="{{route ('users.update', $user->id)}}" method="post">
        @method('patch')
        @csrf
        <div class="cotainer">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                <div class="card">
                    <div class="card-header">会員ID：{{$user->id}}</div>
                    <div class="card-body">
    <tr>
        <td>お名前:<input type="text" name="name" value="{{old('name', $user->name)}}" ><br></td>
        <td>住所:<input type="text" name="address"  value="{{old('address', $user->address)}}"><br></td>
        <td>電話番号:<input type="tel" name="tel" pattern="\d{1,5}-\d{1,4}-\d{4,5}" title="電話番号は市外局番からハイフン（-）をいれて入力してください" value="{{old('tel', $user->tel)}}"><br></td>
        <td>メールアドレス:<input type="email" name="email" title="末尾には@〇〇〇〇などのメールアドレスの形式で入力してください" value="{{old('email', $user->email)}}" ><br></td>
    </tr>
</p>
</div>

    <button type="submit">変更</button>
</form>

@endsection
{{-- minlength="1" maxlength="100" --}}