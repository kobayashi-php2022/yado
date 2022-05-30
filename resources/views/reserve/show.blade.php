@extends('layouts.mapp1')

@section('title', '新宿トラベル_宿の詳細情報')
@section('content')

<div class="components-page">
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('{{ \Storage::url($hotel->image) }}');">
		<div class="container">
        <div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
			@csrf
			<h2 style="color: white;">宿の詳細情報</h2><br>
            </div>
			</div>
		</div>
	</div>
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">

{{-- <div class="header_image">
    @if (!is_null($hotel->image))
    <img src="{{ \Storage::url($hotel->image) }}" width="600" height="400">
    @else
    <img src="{{ \Storage::url('items/no_image.png') }}" width="400" height="400">
    @endif
</div> --}}
<h1>{{ $hotel->name }}</h1>
<table style="margin-left: 30px;">
    <tr>
        <td>宿分類：</td>
        <td>{{ $hotel->category->name }}</td>
    </tr>
    <tr>
        <td>住所：</td>
        <td>{{ $hotel->address }}</td>
    </tr>
    <tr>
        <td>電話番号：</td>
        <td>{{ $hotel->tel }}</td>
    </tr>
    <tr>
        <td>メールアドレス：</td>
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
                <th>プラン名：</th>
                <th>
                    {{ $plan->name }}
                </th>
            </tr>
            <tr>
                <td>プランの説明：</td>
                <td>{!! nl2br(e($plan->content)) !!}</td>
            </tr>
            <tr>
                <td>料金：</td>
                <td>{{ $plan->price }}円</td>
            </tr>
        </table>
        <a href="{{ route('plans.show', $plan->id) }}"><button type="submit" class='btn btn-primary' style="margin-left: 30px;">空き情報の確認</button></a>
    </div>
    @endforeach
<hr>
<a href="#" onclick="history.back(-1);return false;">　< 戻る</a>
            </div>
        </div>
        </div>
    </div>
</div>
</div>

    <style>
        /* 追加 */
        table {
            margin-left: 30px;  
            line-height: 2;
            font-size:16px;
        }
	</style>

@endsection