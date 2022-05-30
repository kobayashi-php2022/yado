@extends('layouts.mapp3')

@section('title', '新宿トラベル_ログイン')
@section('content')
	<div class="image-container set-full-height" style="background-image: url('img/wizard-city.jpg')">
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="purple" id="wizard">
                            <div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		ログイン
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                <li><a href="#details" data-toggle="tab">ログイン情報の入力</a></li>
			                <li><a data-toggle="tab"></a></li>
			            </ul>
								</div><br><br>
          <div class="cotainer">
          <form action="{{route('login')}}" method="post" onsubmit="">
          @csrf
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="email" id="email" class="form-control" name="email" placeholder="メールアドレス" value="{{old('email')}}" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="password" id="password" class="form-control" name="password" placeholder="パスワード" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 offset-md-3">
              @if($errors->count())
            <ul class="alert" style="color:red; font-size:12px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
              <p><input type="submit" value="ログイン" class="btn btn-secondary"></p><br>
              <p>または</p>
              <p><a href="{{route('register')}}">新規会員登録</a></p>
              </div>
              </div>
          </form>
		                </div>
		            </div>
		        </div>
	        </div>
	    </div>
      
@endsection
