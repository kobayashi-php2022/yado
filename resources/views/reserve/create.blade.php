@extends('layouts.mapp2')

@section('content')
<div class="image-container set-full-height" style="background-image: url('/img/wizard-book.jpg')">
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">予約内容の入力</a></li>
			                            <li><a data-toggle="tab"></a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
                                            <div class="create">
			                                	<h6 class="info-text">必要な情報を入力し、「次へ」ボタンを押してください。<br>予約が完了すると宿泊契約が成立します。</h6>
                                                @include('commons/error_flash')
			                            	</div>
                                            <div class="a" style="margin-left: 100px;">
                                            <form action="{{ route('orders.confirm') }}" method="post">

                                            @csrf
                                            <h5>予約するプラン</h5>
                                            <table style="margin-left: 40px;line-height:2;">
                                            <tr>
                                                    <td>宿泊施設名：</td>
                                                    <td>{{ $plan->hotel->name }}</td>
                                                    <input type="hidden" name="hotel_id" value="{{ $plan->hotel_id }}">
                                                </tr>
                                                <tr>
                                                    <td>プラン名:</td>
                                                    <td>{{ $plan->name }}</td>
                                                    <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                                </tr>
                                                <tr>
                                                    <td>料金：</td>
                                                    <td>{{ $plan->price }}</td>
                                                </tr>
                                            </table>
                                            <hr>
                                            <h5>予約者情報</h5>
                                            <table style="margin-left: 40px;line-height:2;">
                                            <tr>
                                                    <td>お名前：</td>
                                                    <td>{{ Auth::user()->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>メールアドレス：</td>
                                                    <td>{{ Auth::user()->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td>住所：</td>
                                                    {{-- 郵便番号での住所検索したい --}}
                                                    <td><input type="text" name="address" id="address" value="{{ Auth::user()->address }}" style="width:350px;"></td>
                                                </tr>
                                                <tr>
                                                    <td>電話番号：</td>
                                                    <td><input type="tel" name="tel" id="tel" value="{{ Auth::user()->tel }}"></td>
                                                </tr>
                                            </table>
                                            <hr>
                                            <h5>予約内容</h5>
                                            <table style="margin-left: 40px;line-height:2;">
                                            <tr>
                                                    <td>チェックイン日：</td>
                                                    <td>{{ request('search_check_in') }}</td>
                                                    <input type="hidden" name="check_in" id="check_in" value="{{ request('search_check_in') }}">
                                                </tr>
                                                <tr>
                                                    <td>チェックアウト日:</td>
                                                    <td>{{ request('search_check_out') }}</td>
                                                    <input type="hidden" name="check_out" id="check_out" value="{{ request('search_check_out') }}">
                                                </tr>
                                                <tr>
                                                    <td>部屋数：</td>
                                                    <td>{{ request('search_rooms_num') }}部屋</td>
                                                    <input type="hidden" name="room" id="room" value="{{ request('search_rooms_num') }}">
                                                </tr>
                                                <tr>
                                                    <td>宿泊人数：</td>
                                                    <td><input type="number" name="num" id="num" value="{{ request('num') }}" style="width:4rem;">人</td>
                                                </tr>
                                            </table>
                                            <div style="text-align:center; margin-left:-100px;">
                                            <p><input type="submit" class="btn btn-primary" value="次へ"></p>
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                    <a href="#" onclick="history.back(-1);return false;">　< 戻る</a>
		                        </div>
		                    </div> 
                        </div>
                    </div>
                </div>
                </div> 
            </div>
        </div> 
         
   
</div>
@endsection