@extends('layouts.mapp3')

@section('title', '新宿トラベル_会員情報画面')
@section('content')
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="purple" id="wizard">
                            <div class="wizard-header">
		                        	<h3 class="wizard-title">
                                    会員情報の変更
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

@endsection