@extends('layouts.mapp2')

@section('title', '新宿トラベル_予約内容の確認')
@section('content')
<div class="image-container set-full-height" style="background-image: url('/img/wizard-book.jpg')">
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="purple" id="wizard">
                            <div class="wizard-header">
		                        	<h3 class="wizard-title">
                                    予約内容
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                <li><a href="#details" data-toggle="tab">予約内容の確認</a></li>
			                <li><a data-toggle="tab"></a></li>
			            </ul>
								</div><br><br>
          <div class="cotainer">
              <div class="b">
          <h5 style="text-align:center;">こちらの内容で予約します。<br>内容を確認したら「予約」ボタンを押してください。</h5>
            </div>
            @include('commons/error_flash')
          <form action="{{ route('orders.complete') }}" method="post">
            @csrf
            <div style="margin-left:40px;">
                <p>予約するプラン</p>
                <table>
                    <tr>
                        <td>宿泊施設名</td>
                        <td>{{ $plan->hotel->name }}</td>
                        <input type="hidden" name="hotels_id" value="{{ $plan->hotels_id }}">
                    </tr>
                    <tr>
                        <td>プラン名</td>
                        <td>{{ $plan->name }}</td>
                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                    </tr>
                    <tr>
                        <td>料金</td>
                        <td>{{ $plan->price }}円</td>
                    </tr>
                </table>
                <hr>
                <p>予約者情報</p>
                <table>
                    <tr>
                        <td>お名前</td>
                        <td>:{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td>:{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <td>住所</td>
                        <td>{{ request('address') }}</td>
                        <input type="hidden" name="address" id="address" value="{{ request('address') }}">
                    </tr>
                    <tr>
                        <td>電話番号</td>
                        <td>{{ request('tel') }}</td>
                        <input type="hidden" name="tel" id="tel" value="{{ request('tel') }}">
                    </tr>
                </table>
                <hr>
                <p>予約内容</p>
                <table>
                    <tr>
                        <td>チェックイン</td>
                        <td>{{ request('check_in') }}</td>
                        <input type="hidden" name="check_in" id="check_in" value="{{ request('check_in') }}">
                    </tr>
                    <tr>
                        <td>チェックアウト</td>
                        <td>{{ request('check_out') }}</td>
                        <input type="hidden" name="check_out" id="check_out" value="{{ request('check_out') }}">
                    </tr>
                    <tr>
                        <td>宿泊人数</td>
                        <td>{{ request('num') }}人</td>
                        <input type="hidden" name="num" id="num" value="{{ request('num') }}">
                    </tr>
                    <tr>
                        <td>部屋数</td>
                        <td>{{ request('room') }}部屋</td>
                        <input type="hidden" name="room" id="room" value="{{ request('room') }}">
                    </tr>
                </table>
                <input type="submit" value="予約">
            </div>
        </form>
        <hr>
    <a href="#" onclick="history.back(-1);return false;">　< 戻る</a>
		                </div>
		            </div>
		        </div>
	        </div>
        </div>
    </div>
@endsection