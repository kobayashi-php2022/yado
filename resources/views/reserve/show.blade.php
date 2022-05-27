@extends('layouts.app1')

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
<h2>プラン</h2>
{{-- プラン検索 --}}
{{-- <p>予約可能なプランを表示するには、日程と部屋数を入力してください</p>
<form action="{{ route('hotels.show', $hotel->id) }}" method="get">
    <dl>
        <dt>チェックイン日</dt>
        <dd><input type="date" name="search_check_in" id="search_check_in" value="{{ request('search_check_in') }}"></dd>
        <dt>チェックアウト日</dt>
        <dd><input type="date" name="search_check_out" id="search_check_out" value="{{ request('search_check_out') }}"></dd>
        <dt>部屋数</dt>
        <dd><input type="number" name="search_rooms_num" id="search_rooms_num" value="{{ request('search_rooms_num') }}">部屋</dd>
    </dl>
    <input type="submit" value="検索">
</form> --}}
{{-- プラン一覧・追加 --}}
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
        </table>
        <a href="{{ route('plans.show', $plan->id) }}"><button type="submit" style="margin-left: 30px;">空き情報を確認する</button></a>
    </div>
    @endforeach
{{-- @endif --}}
<hr>
<a href="/hotels">一覧に戻る</a>
@endsection