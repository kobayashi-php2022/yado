@extends('layouts.app2')

@section('title', '新宿トラベル_ログイン画面')
@section('content')

<body>
	<div class="image-container set-full-height" style="background-image: url('img/wizard-city.jpg')">
    <a href="">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="img/logo.png"alt="logo">
	            </div>
	        </div>
	    </a>
        
    <body class="components-page2">

    <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
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
				<a href="#">TOPページへ</a>
			</li>
			<li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	    <!--   Big container   -->
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
            <p style="margin-left:30px;">予約するプラン</p>
            <table style="font-size: 16px; margin-left:30px;">
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
                    <td>{{ $plan->price }}</td>
                </tr>
            </table>
            <hr>
            <p style="margin-left:30px;">予約者情報</p>
            <table style="margin-left:30px;">
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
            <p style="margin-left:30px;">予約内容</p>
            <table style="margin-left:30px;">
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
            <div style="text-align:center;">
            <p><input type="submit" class="btn btn-primary" value="予約"></p>
            </div>
        </form>
        <hr>
    <a onClick="history.back()">　< 戻る</a>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

@endsection