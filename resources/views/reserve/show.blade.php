@extends('layouts.app')

@section('content')
<div class="header_image">
    @if ($hotel->image !== "")
    <img src="{{ \Storage::url($hotel->image) }}" width="600" height="400">
    @else
    <img src="{{ \Storage::url('items/no_image.png') }}" width="100" height="100">
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
    <tr>
        <td>登録日</td>
        <td>{{ $hotel->created_at }}</td>
    </tr>
    <tr>
        <td>最終更新日</td>
        <td>{{ $hotel->updated_at }}</td>
    </tr>
</table>

{{-- プラン一覧・追加 --}}
<h2>プラン一覧</h2>
@foreach ($plans as $plan)
<table style="margin-left: 30px;">
    <tr>
        <th>プラン名</th>
        <th>
            {{ $plan->name }}
            <a href="{{ route('plans.edit', $plan->id) }}"><button>編集する</button></a>
        </th>
    </tr>
    <tr>
        <td>プランの説明</td>
        <td>{!! nl2br(e($plan->content)) !!}</td>
    </tr>
    <tr>
        <td>料金</td>
        <td>{{ $plan->price }}</td>
    </tr>
    <tr>
        <td>部屋数</td>
        <td>{{ $plan->rooms_num }}</td>
    </tr>
    <tr>
        <td>登録日</td>
        <td>{{ $plan->created_at }}</td>
    </tr>
    <tr>
        <td>最終更新日</td>
        <td>{{ $plan->updated_at }}</td>
    </tr>
</table>
@endforeach
<hr>
<a href="/hotels">一覧に戻る</a>
@endsection