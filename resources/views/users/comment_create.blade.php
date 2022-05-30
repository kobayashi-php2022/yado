@extends('layouts.mapp2')

@section('title', '新宿トラベル_口コミ投稿')
@section('content')
<div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
                            <div class="wizard-header">
		                        	<h3 class="wizard-title">
                                    口コミを投稿する
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                <li><a href="#details" data-toggle="tab">口コミを投稿</a></li>
			                <li><a data-toggle="tab"></a></li>
			            </ul>
						</div><br><br>
          <div style="margin-left:40px; margin-right:40px;">
            @include('commons.error_flash')
          <form action="{{ route('comments.store') }}" method="post" id="comment-post-form">
    @csrf
    <p>
        宿名：{{ $hotel->name }}
        <input type="hidden" name="hotel_id" value="{{ $hotel->id }}" class="form-control">
    </p>
    <p>投稿者名：<input type="text" name="nickname" id="nickname" value="{{ Auth::user()->nickname }}" class="form-control"></p>

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
    <textarea name="comment" class="form-control" id="comment" cols="30" rows="10" placeholder="口コミを入力してください"></textarea>
</form>
<a href="#" onclick="postComment()"><button class="btn btn-danger">投稿する</button></a>
<script>
    function postComment() {
        event.preventDefault();
        if (window.confirm('口コミを投稿しますか？')) {
            document.getElementById('comment-post-form').submit();
        }
    }
</script>
</div>
		            </div>
		        </div>
	        </div>
	    </div>

@endsection