@extends('layouts.app')

@section('content')
    <h1>宿泊施設の更新</h1>
    {{-- 削除ボタン --}}
    <p>
        <a href="#" onclick="deletePlan()">削除する</a>
        <form action="{{ route('plans.destroy', $plan) }}" method="post" id="plans-delete-form">
            @csrf
            @method('delete')
        </form>
        <script>
            function deletePlan() {
                event.preventDefault();
                if (window.confirm('このプランにお客様の予約がある場合、自動的に削除されます。\r\n本当に削除しますか？')) {
                    document.getElementById('plans-delete-form').submit();
                }
            }
        </script>
    </p>
    @include('commons/error_flash')

    <div class="create">
        <form action="{{ route('plans.update', $plan->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <p>
                宿名：{{ $hotel->name }}
                <input type="hidden" name="hotel_id" value="{{ $plan->hotels_id }}">
            </p>
            <p>
                <label for="plan_name">プラン名</label>
                <input type="text" name="plan_name" id="plan_name" value="{{ $plan->name }}">
            </p>
            <p>
                <textarea name="content" id="content" cols="30" rows="10">{!! nl2br(e($plan->content)) !!}</textarea>
            </p>
            <p>
                <label for="price">料金</label>
                <input type="number" name="price" id="price" value="{{ $plan->price }}">円
            </p>
            <p>
                <label for="rooms_num">部屋数</label>
                <input type="number" name="rooms_num" id="rooms_num" value="{{ $plan->rooms_num }}">
            </p>
            <input type="submit" value="更新">
        </form>
        <hr>
        <a href="{{ route('hotels.show', $hotel->id) }}">戻る</a>
    </div>
@endsection