@extends('layouts.app')

@section('content')
<div class="header_image">
    @if (!is_null($hotel->image))
    <img src="{{ \Storage::url($hotel->image) }}" width="600" height="400">
    @else
    <img src="{{ \Storage::url('items/no_image.png') }}" width="400" height="400">
    @endif
</div>
<h1>{{ $hotel->name }}</h1>
<table style="margin-left: 30px;">
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
<h3>口コミ</h3>
@if(count($comments))
<div class="box">
    @foreach ($comments as $comment)
        <table class="bg-light ml-4 m-2">
            <tr>
                <td>投稿日</td>
                <td>{{ $comment->created_at }}</td>
            </tr>
            <tr>
                @if(empty($comment->user->nickname))
                    <td>名無しさん</td>
                @else
                    <td>{{ $comment->user->nickname }}さん</td>
                @endif
                <td><span class="star" data-rate="{{ $comment->star }}"></span></td>
            </tr>
            <tr>    
                <td colspan="2">{!! nl2br(e($comment->comment)) !!}</td>
            </tr>
        </table>
        @endforeach
    </div>
    @else
        <p>口コミはまだありません。</p>
    @endif
    
{{-- <form action="{{ route('comments.create') }}" method="get" class="ml-4">
    @csrf
    <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
    <input type="submit" value="口コミを投稿する">
</form> --}}

<h3>プラン</h3>
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
<hr>
<a href="/hotels">一覧に戻る</a>
@endsection