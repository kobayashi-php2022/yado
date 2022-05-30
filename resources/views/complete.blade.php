@extends('layouts.mapp3')

@section('title', '新宿トラベル_新規会員登録完了')
@section('content')
<div class="image-container set-full-height" style="background-image: url('/img/wizard-profile.jpg')">

	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                        <div class="tab-content">            
                                    <div class="row">
                                    <div class="col-md-8 offset-md-2" style="text-align: center; margin-top:70px;">
                                    <h3 class="wizard-title">会員登録が完了しました</h3><br>
                                    <br><p style="font-size:16px;">以下よりログインを行ってください</p><br>
                                    <a href="{{route('login')}}"><input type="button" value="ログインする" class="btn btn-success"></a>
                                    </div>
                                    </div>
		                        </div>
		                </div>
                        </div>
	            </div>
 	      </div>
	   </div> 
@endsection
