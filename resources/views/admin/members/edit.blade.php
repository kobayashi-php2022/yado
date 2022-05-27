@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-secondary text-white">会員情報変更</div>
    @include('commons/error_flash')
    <div class="create">
        <form action="{{ route('members.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <p>
                <label for="name">氏名</label>
                <input type="text" name="name" id="name" minlength="1" maxlength="30" value="{{ $user->name }}" required>
            </p>
            <p>
                <label for="address">住所</label>
                <input type="text" name="address" id="address" minlength="1" maxlength="100" value="{{ $user->address }}" required>
            </p>
            <p>
                <label for="tel">電話番号</label>
                <input type="tel" name="tel" id="tel" pattern="\d{1,5}-\d{1,4}-\d{4,5}" title="電話番号は、市外局番からハイフン（-）を入れて記入してください。" value="{{ $user->tel }}" required>
            </p>
            <p>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" title="末尾には@○○○○などのメールアドレスの形式で入力してください。" value="{{ $user->email }}" required>
            </p>

            <input type="submit" value="更新">
        </form>
        <hr>
        <a href="{{ route('members.show', $user->id) }}">戻る</a>
    </div>
@endsection