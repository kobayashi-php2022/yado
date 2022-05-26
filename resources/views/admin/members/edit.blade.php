@extends('layouts.app')

@section('content')
    <h1>会員情報の更新</h1>
    @include('commons/error_flash')
    <div class="create">
        <form action="{{ route('members.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <p>
                <label for="name">氏名</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}">
            </p>
            <p>
                <label for="address">住所</label>
                <input type="text" name="address" id="address" value="{{ $user->address }}">
            </p>
            <p>
                <label for="tel">電話番号</label>
                <input type="tel" name="tel" id="tel" value="{{ $user->tel }}">
            </p>
            
            <input type="submit" value="更新">
        </form>
        <hr>
        <a href="{{ route('members.show', $user->id) }}">戻る</a>
    </div>
@endsection