@extends('layouts.app1')

@section('title', '新宿トラベル_宿詳細画面')
@section('content')

<body class="components-page">

<a href="">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="img/logo.png"alt="logo" style="width: 50%;">
	            </div>
	        </div>
	    </a>

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
                        <a href="#">TOPぺージへ</a>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>

                    <div class="wrapper">
                        <div class="header header-filter" style="background-image: url('');">
                            <div class="container">
                            <div class="row">
                                    <div class="col-md-6 col-md-offset-3 text-center">
                                @csrf
                                <h2 style="color: white;">宿の詳細情報</h2><br>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="main main-raised">
                            <div class="section">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-1">

                    <div class="p-3 mb-2 bg-secondary"><h5 style="font-weight: bold;">プラン詳細</h5></div>
                            <div class="container mt-2 mb-2 border rounded">
                            <table style="font-size: 14px;">
                            <tr>
                                <th>プラン名</th>
                                <th>{{ $plan->name }}</th>
                            </tr>
                            <tr>
                                <td>プランの説明</td>
                                <td>{!! nl2br(e($plan->content)) !!}</td>
                            </tr>
                            <tr>
                                <td>料金</td>
                                <td>{{ $plan->price }}円</td>
                            </tr>
                            <tr>
                                <td>部屋数</td>
                                <td>{{ $plan->rooms_num }}部屋</td>
                            </tr>
                            </table>
                            </div>

                    <div class="p-3 mb-2 bg-secondary"><h5 style="font-weight: bold;">空き情報を確認する</h5></div>
                            <div class="container mt-2 mb-2 border rounded">
                            <p>予約したい日付と人数を入力してください</p>
                            <form action="{{ route('plans.show', $plan->id) }}" method="get">
                            <dl style="font-size: 14px; line-height:2;">
                            <dt>チェックイン日</dt>
                            <dd><input type="date" name="search_check_in" id="search_check_in" value="{{ request('search_check_in') }}"></dd>
                            <dt>チェックアウト日</dt>
                            <dd><input type="date" name="search_check_out" id="search_check_out" value="{{ request('search_check_out') }}"></dd>
                            <dt>部屋数</dt>
                            <dd><input type="number" name="search_rooms_num" id="search_rooms_num" value="{{ request('search_rooms_num') }}">部屋</dd>
                            </dl>
                            <input type="submit" value="検索" class="btn btn-warning">
                        </form>
                        <hr>
                            </div>
                            <div class="p-3 mb-2 bg-secondary"><h5 style="font-weight: bold;">検索結果</h5></div>
                            <div class="container mt-2 mb-2 border rounded">
                            @if (request('search_check_in') !== null && request('search_check_out') !== null && request('search_rooms_num') !== null) 
                            {{-- チェックイン日のほうがチェックアウト日よりも前の日程であれば表示 --}}
                            @if (request('search_check_in') < request('search_check_out'))
                                {{-- まだ空き部屋があれば予約ボタン表示 --}}
                                @if ($reserved_rooms_sum + request('search_rooms_num') <= $plan->rooms_num)
                                    <p>この日程で予約できます。</p>
                                    <form action="{{ route('orders.form.create') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                        <input type="hidden" name="search_check_in" value="{{ request('search_check_in') }}">
                                        <input type="hidden" name="search_check_out" value="{{ request('search_check_out') }}">
                                        <input type="hidden" name="search_rooms_num" value="{{ request('search_rooms_num') }}">
                                        <button type="submit">このプランを予約する</button>
                                    </form>
                                @else
                                    <p>この日程では予約できません。違う日程を選択してください。</p>
                                @endif
                            @else
                                <p>チェックアウト日はチェックイン日よりも後の日付を選択してください。</p>
                            @endif
                        @else
                            <p>検索項目が入力されていません。</p>
                        @endif
                      </div>
                    <hr/>
                    <a onClick="history.back()">　< 戻る</a>
                 </div>
            </div>
        </div>
    </div>

    <style>
        /* 追加 */
        table {
            margin-left: 30px;  
            line-height: 2;
            font-size:17px;
        }
        table th{
            font-size:20px;
        }
	</style>

@endsection