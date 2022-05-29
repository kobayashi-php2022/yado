<div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="purple" id="wizard">
                            <div class="wizard-header">
		                        	<h3 class="wizard-title">
                                    口コミを投稿する
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                <li><a href="#details" data-toggle="tab">会員情報の変更</a></li>
			                <li><a data-toggle="tab"></a></li>
			            </ul>
						</div><br><br>
          <div class="cotainer">
          <form action="{{route ('users.update', $user->id)}}" method="post">
        @method('patch')
        @csrf
            <div class="form-group row">
              <label class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <p>会員ID：{{$user->id}}</p>
            </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="text" name="name" class="form-control" value="{{old('name', $user->name)}}" placeholder="お名前" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="text" name="address" value="{{old('address', $user->address)}}" class="form-control"  placeholder="住所" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="text" name="birth" value="{{old('birth', $user->birth)}}" class="form-control"  placeholder="生年月日" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="tel" name="tel" value="{{old('tel', $user->tel)}}" class="form-control" placeholder="電話番号" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="email" name="email" value="{{old('email', $user->email)}}" class="form-control"  placeholder="メールアドレス" required>
              </div>
            </div>
            <br>
            <div style="text-align: center;">
              <p><input type="submit" value="変更" class='btn btn-primary'></p><br>
              </div>
          </form>
		                </div>
		            </div>
		        </div>
	        </div>
	    </div>




@extends('layouts.mapp2')

@section('content')
<h1>口コミを投稿する</h1>
@include('commons/error_flash')
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

