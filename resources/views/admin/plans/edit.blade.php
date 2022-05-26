@extends('layouts.app2')

@section('title', '新宿トラベル_プラン情報の変更')
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
			                            <li><a href="#details" data-toggle="tab">宿泊施設情報の更新</a></li>
			                            <li><a data-toggle="tab"></a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
                                            <div class="create">
			                                	<h4 class="info-text">宿泊施設の情報を更新してください</h4>
                                                @include('commons/error_flash')
			                            	</div>
                                        @include('commons/error_flash')

                                        <div class="create">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('patch')
                                                <div class="col-mozi" style="margin-left:100px;">
                                                <p>
                                                    宿名：
                                                    <input type="hidden" name="hotel_id" value="{{ $plan->hotels_id }}">
                                                </p>
                                                <p>
                                                    <label for="plan_name">プラン名：</label>
                                                    <input type="text" name="plan_name" id="plan_name" value="{{ $plan->name }}" size="49">
                                                </p>
                                                <p>
                                                    <textarea name="content" id="content" cols="60" rows="5">{!! nl2br(e($plan->content)) !!}</textarea>
                                                </p>
                                                <p>
                                                    <label for="price">料金　：</label>
                                                    <input type="number" name="price" id="price" value="{{ $plan->price }}"> 円
                                                </p>
                                                <p>
                                                    <label for="rooms_num">部屋数：</label>
                                                    <input type="number" name="rooms_num" id="rooms_num" value="{{ $plan->rooms_num }}">
                                                </p>
                                                </div>
                                                <div class="col-button" style="text-align:center;">
                                                <button class="btn btn-danger" type="submit">更新</button>
                                                {{-- 削除ボタン --}}
                                            <button class="btn btn-default" onclick="deletePlan()">削除</button>
                                                <form action="" method="post" id="plans-delete-form">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                                <script>
                                                    function deletePlan() {
                                                        event.preventDefault();
                                                        if (window.confirm('このプランにお客様の予約がある場合、自動的に削除されます。\r\n本当に削除しますか？')) {
                                                            document.getElementById('plans-delete-form').submit();
                                                        }
                                                    }
                                                </script>
                                            </form>
                                            </div>
                                            </div>
                                            <br><a href="{{ route('hotels.show', $hotel->id) }}">　　< 戻る</a>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
		            </div> <!-- wizard container -->

		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

@endsection