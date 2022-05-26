@extends('layouts.app2')

@section('title', '新宿トラベル_プラン情報の登録')
@section('content')
<body>
	<div class="image-container set-full-height" style="background-image: url('img/wizard-book.jpg')">
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

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                                <div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">新規宿泊施設の登録</a></li>
			                            <li><a data-toggle="tab"></a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
                                <div class="create">
			                                	<h4 class="info-text">新規宿泊施設の情報を入力してください</h4>
                                                @include('commons/error_flash')
			                            	</div>
                                            <form action="{{ route('plans.store', $hotel->id) }}" method="post">
                                            <div class="a" style="margin-left: 80px;">
                                                    @csrf
                                                    <p>
                                                        宿名：{{ $hotel->name }}
                                                        <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                                                    </p>
                                                    <p>
                                                        <label for="plan_name">プラン名：</label>
                                                        <input type="text" name="plan_name" id="plan_name" size="49">
                                                    </p>
                                                    <p>
                                                        <textarea name="content" id="content" cols="60" rows="5" placeholder="プランの説明"></textarea>
                                                    </p>
                                                    <p>
                                                        <label for="price">料金：</label>
                                                        <input type="number" name="price" id="price"> 円
                                                    </p>
                                                    <p>
                                                        <label for="rooms_num">部屋数：</label>
                                                    <input type="number" name="rooms_num" id="rooms_num">
                                                    </div>
                                                    <div class="a" style="text-align: center;">
                                                    <input type="submit" value="登録" class="btn btn-danger btn-md" onclick="location.href=''">
                                                    </div>
                                                    <br><a href="{{ route('hotels.show', $hotel->id) }}">　　< 戻る</a>
                                                </form>

                              </div>
                              </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

@endsection