@extends('layouts.app')

@section('content')
<div class="header_image">
    @if (!is_null($hotel->image))
    <img src="{{ \Storage::url($hotel->image) }}" width="600" height="400">
    @else
    <img src="{{ \Storage::url('items/no_image.png') }}" width="400" height="400">
    @endif
</div>
<h1>宿情報詳細</h1>
<table style="margin-left: 30px;">
    <tr>
        <th>宿名</th>
        <th>{{ $hotel->name }}</a></th>
    </tr>
    <tr>
        <td>宿分類</td>
        <td>{{ $hotel->category->name }}</td>
    </tr>
    <tr>
        <td>住所</td>
        <td>{{ $hotel->address }}</td>
    </tr>
    <tr>
        <td>電話番号</td>
        <td>{{ $hotel->tel }}</td>
    </tr>
    <tr>
        <td>メールアドレス</td>
        <td>{{ $hotel->email }}</td>
    </tr>
</table>

{{-- プラン一覧・追加 --}}
<h2>プラン一覧</h2>
@foreach ($plans as $plan)
<div>
    <table style="margin-left: 30px; margin-top:30px;">
        <tr>
            <th>プラン名</th>
            <th>
                {{ $plan->name }}
            </th>
        </tr>
        <tr>
            <td>プランの説明</td>
            <td>{!! nl2br(e($plan->content)) !!}</td>
        </tr>
        <tr>
            <td>料金</td>
            <td>{{ $plan->price }}円</td>
        </tr>
        <tr>
            <td>部屋数</td>
            <td>{{ $plan->rooms_num }}部屋</td>
        </tr>
    </table>
    <form action="{{ route('orders.form.create') }}" method="post">
        @csrf
        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
        <button type="submit" style="margin-left: 30px;">このプランを予約する</button>
    </form>
    {{-- <a href="{{ route('orders.create') }}"><button style="margin-left:30px;">このプランを予約する</button></a> --}}
</div>
@endforeach
<hr>
<a href="/hotels">一覧に戻る</a>
@endsection