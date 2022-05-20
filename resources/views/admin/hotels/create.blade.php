@extends('layouts.app')

@section('content')
    <h1>新規宿泊施設の登録</h1>

    <div class="create">
        <form action="{{ route('hotels.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <p>
                <label for="category">宿分類</label>
                <select name="category" id="category" value="{{ request('category') }}">
                    <option value=""></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </p>
            <p>
                <label for="name">宿名</label>
                <input type="text" name="name" id="name">
            </p>
            <p>
                <label for="address">住所</label>
                <input type="text" name="address" id="address">
            </p>
            <p>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email">
            </p>
            <p>
                <label for="tel">電話番号</label>
                <input type="tel" name="tel" id="tel">
            </p>
            {{-- 画像投稿 --}}
            <p>
                <label for="image">イメージ画像</label>
                <input type="file" name="image" id="image">
            </p>

            {{-- <p>
                <label for="text">プラン名</label>
                <input type="text" name="text" id="text">
            </p>
            <p>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </p> --}}

            <input type="submit" value="登録">
        </form>
    </div>
@endsection