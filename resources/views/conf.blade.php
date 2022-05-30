@extends('layouts.mapp3')

@section('title', '新宿トラベル_新規会員登録')
@section('content')
<div class="image-container set-full-height" style="background-image: url('/img/wizard-profile.jpg')">

	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	  新規会員登録
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									            <ul>
			                            <li><a href="#about" data-toggle="tab">新規会員情報の確認</a></li>
			                            <li><a href="#" data-toggle="tab"></a></li>
			                        </ul>
								</div>
		                        <div class="tab-content">
                                <br><p style="text-align: center; font-size:16px;">以下の内容でお間違いないでしょうか</p><br>
                                <form action="{{route('complete')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-4 col-form-label text-md-right">氏名</div>
                                    <div class="col-md-6">
                                        <p class="form-control">{{ request()->name }}</p>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-md-4 col-form-label text-md-right">メールアドレス</div>
                                    <div class="col-md-6">
                                    <p class="form-control">{{ request()->email }}</p>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-md-4 col-form-label text-md-right">パスワード</div>
                                    <div class="col-md-6">
                                    <p class="form-control">{{ request()->password }}</p>
                                    </div>
                                    </div><br>
                                    <div class="row">
                                    <div class="col-md-8 offset-md-4">
                                    <input type="button" value="戻る" class="btn btn-default" onClick="history.back()">
                                    <input type="submit" class="btn btn-success ml-12" value="登録">
                                    </div>
                                    </div>
                                    <input type="hidden" name="name" value="{{ request('name') }}">
                                    <input type="hidden" name="email" value="{{ request('email') }}">
                                    <input type="hidden" name="password" value="{{ request('password') }}">
                                    <input type="hidden" name="auth" value="会員">
                                </form>		                
                              </div>
		            </div>
		        </div>
	        </div>
	    </div>
@endsection