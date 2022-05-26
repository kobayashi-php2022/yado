@extends('layouts.app')

@section('content')
<h1>口コミを投稿する</h1>

<form action="{{ route('comments.store') }}" method="post" id="comment-post-form">
    @csrf
    <p>
        宿名：{{ $hotel->name }}
        <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
    </p>
    <p>投稿者名：<input type="text" name="nickname" id="nickname" value="{{ Auth::user()->nickname }}"></p>

    <div class="rate-form">
        <input id="star5" type="radio" name="rate" value="5">
        <label for="star5">★</label>
        <input id="star4" type="radio" name="rate" value="4">
        <label for="star4">★</label>
        <input id="star3" type="radio" name="rate" value="3">
        <label for="star3">★</label>
        <input id="star2" type="radio" name="rate" value="2">
        <label for="star2">★</label>
        <input id="star1" type="radio" name="rate" value="1">
        <label for="star1">★</label>
        <p>評価</p>
    </div>
    <textarea name="comment" id="comment" cols="30" rows="10" placeholder="口コミを入力してください"></textarea>
</form>
<a href="#" onclick="postComment()"><button>投稿する</button></a>
<script>
    function postComment() {
        event.preventDefault();
        if (window.confirm('口コミを投稿しますか？')) {
            document.getElementById('comment-post-form').submit();
        }
    }
</script>


@endsection

