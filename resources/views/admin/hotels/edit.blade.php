@extends('layouts.app')

@section('content')
    <h1>宿泊施設の更新</h1>
    @include('commons/error_flash')
    <div class="create">
        <form action="{{ route('hotels.update', $hotel->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <p>
                <label for="category">宿分類</label>
                <select name="category" id="category">
                    <option value=""></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if($hotel->category_id == $category->id) selected @endif >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </p>
            <p>
                <label for="name">宿名</label>
                <input type="text" name="name" id="name" value="{{ $hotel->name }}">
            </p>
            <p>
                <label for="address">住所</label>
                <input type="text" name="address" id="address" value="{{ $hotel->address }}">
            </p>
            <p>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" value="{{ $hotel->email }}">
            </p>
            <p>
                <label for="tel">電話番号</label>
                <input type="tel" name="tel" id="tel" value="{{ $hotel->tel }}">
            </p>
            {{-- 画像投稿 --}}
            <p>
                <label for="image">イメージ画像</label>
                <input type="file" name="image" id="image" value="">
            </p>
            <p>
                @if ($hotel->image !== "")
                <img src="{{ \Storage::url($hotel->image) }}" width="500">
                @else
                <img src="{{ \Storage::url('items/no_image.png') }}" width="300" height="300">
                @endif
            </p>

            {{-- <p>
                <label for="text">プラン名</label>
                <input type="text" name="text" id="text">
            </p>
            <p>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </p> --}}

            <input type="submit" value="更新">
        </form>
        <hr>
        <a href="{{ route('hotels.show', $hotel->id) }}">戻る</a>
    </div>
@endsection