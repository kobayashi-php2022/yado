@extends('layouts.app2')

@section('title', '新宿トラベル_予約内容の入力')
@section('content')
	<div class="image-container set-full-height" style="background-image: url('img/wizard-book.jpg')">
    <a href="">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="img/logo.png"alt="logo"style="width: 50%;">
	            </div>
	        </div>
	    </a>
    <body class="components-page2">

<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle" data-target="#navigation-doc">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-doc">
		<ul  class="nav navbar-nav navbar-right">
			<li>
				<a href="#">管理者画面TOP</a>
			</li>
			<li>
                <a href="#">会員検索</a>
            </li>
			<li>
                <a href="#">宿検索</a>
            </li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

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
                                                    <td><input type="text" name="address" id="address" value="{{ Auth::user()->address }}"></td>
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
                                                    <td><input type="number" name="num" id="num" value="{{ request('num') }}">人</td>
                                                </tr>
                                            </table>
                                            <div style="text-align:center;">
                                            <p><input type="submit" class="btn btn-primary" value="次へ"></p>
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                    <a onClick="history.back()">　< 戻る</a>
		                        </div>
		                    </div> <!-- wizard container -->
                        </div>
                    </div>
                </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

		@endsection