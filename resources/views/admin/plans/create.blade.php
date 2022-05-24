@extends('layouts.app')

@section('content')
    <h1>プランの登録</h1>
    @include('commons/error_flash')
    <div class="create">
        <form action="{{ route('plans.store', $hotel->id) }}" method="post">
            @csrf
            <p>
                宿名：{{ $hotel->name }}
                <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
            </p>
            <p>
                <label for="plan_name">プラン名</label>
                <input type="text" name="plan_name" id="plan_name">
            </p>
            <p>
                <textarea name="content" id="content" cols="30" rows="10" placeholder="プランの説明"></textarea>
            </p>
            <p>
                <label for="price">料金</label>
                <input type="number" name="price" id="price">円
            </p>
            <p>
                <label for="rooms_num">部屋数</label>
            <input type="number" name="rooms_num" id="rooms_num">
            </p>
            <input type="submit" value="登録">
            <hr>
            <a href="{{ route('hotels.show', $hotel->id) }}">戻る</a>
        </form>
    </div>
@endsection