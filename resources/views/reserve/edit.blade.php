@extends('layouts.mapp2')

@section('title', '新宿トラベル_口コミ投稿')
@section('content')  
	<div class="image-container set-full-height" style="background-image: url('/img/wizard-book.jpg')">
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
                        <div class="wizard-header">
		                        	<h3 class="wizard-title">
                                    口コミ投稿
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">口コミを投稿する</a></li>
			                            <li><a data-toggle="tab"></a></li>
			                        </ul>
								</div>
                                <div class="cotainer" style="margin-left: 40px; margin-top:40px">
                                        <p>口コミを投稿する</p><br>
                                        <p>投稿者名</p><br>
                                        <p>投稿内容</p><br>
                                <v-star value="5"></v-star>
		            </div>
                </div>
                </div>
	    	</div>
            </div>
		</div>
	</div>
@endsection