@extends('layouts.mapp1')

@section('content')
<div class="components-page">
            <div class="wrapper">
                        <div class="header header-filter" style="background-image: url('{{ \Storage::url($plan->hotel->image) }}');">
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
                                <th colspan="2">{{ $plan->name }}</th>
                            </tr>
                            <tr>
                                <td>プランの説明：</td>
                                <td>{!! nl2br(e($plan->content)) !!}</td>
                            </tr>
                            <tr>
                                <td>料金：</td>
                                <td>{{ $plan->price }}円</td>
                            </tr>
                            <tr>
                                <td>部屋数：</td>
                                <td>{{ $plan->rooms_num }}部屋</td>
                            </tr>
                            </table>
                            </div><br>

                    <div class="p-3 mb-2 bg-secondary"><h5 style="font-weight: bold;">空き情報を確認する</h5></div>
                            <div class="container mt-2 mb-2 border rounded">
                            <p>予約したい日付と人数を入力して「検索」を押してください。<br>
                            予約可能であれば「検索結果」の下に予約ボタンが表示されます。</p><br>
                            <form action="{{ route('plans.show', $plan->id) }}" method="get">
                            <dl style="font-size: 14px; line-height:2;">
                            <dt>チェックイン日：<input type="date" name="search_check_in" id="search_check_in" value="{{ request('search_check_in') }}"></dt><br>
                            <dt>チェックアウト日：<input type="date" name="search_check_out" id="search_check_out" value="{{ request('search_check_out') }}"></dt><br>
                            <dt>部屋数：<input type="number" name="search_rooms_num" id="search_rooms_num" value="{{ request('search_rooms_num') }}" style="width:4rem"> 部屋</dt>
                            </dl>
                            <input type="submit" value="検索" class="btn btn-warning">
                        </form>
                        <hr>
                        </div>
                        @if (request('search_check_in') !== null && request('search_check_out') !== null && request('search_rooms_num') !== null)     
                            <div class="p-3 mb-2 bg-secondary"><h5 style="font-weight: bold;">検索結果</h5></div>
                            <div class="container mt-2 mb-2 border rounded">
                            {{-- チェックイン日のほうがチェックアウト日よりも前の日程であれば表示 --}}
                            @if (request('search_check_in') < request('search_check_out'))
                                {{-- 今日以降の日程であれば表示 --}}
                                @if (request('search_check_in') >= date('Y-m-d'))
                                    {{-- まだ空き部屋があれば予約ボタン表示 --}}
                                    @if ($reserved_rooms_sum + request('search_rooms_num') <= $plan->rooms_num)
                                        <p>この日程で予約できます。</p>
                                        <form action="{{ route('orders.form.create', $plan->id) }}" method="get">
                                            @csrf
                                            <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                            <input type="hidden" name="search_check_in" value="{{ request('search_check_in') }}">
                                            <input type="hidden" name="search_check_out" value="{{ request('search_check_out') }}">
                                            <input type="hidden" name="search_rooms_num" value="{{ request('search_rooms_num') }}">
                                            <button type="submit" class="btn btn-primary">このプランを予約する</button>
                                        </form>
                                    @else
                                        <p>
                                            満室です。違う日程を選択するか、別のプランを選んでください。<br>
                                            残り部屋数：{{ $plan->rooms_num - $reserved_rooms_sum }}部屋
                                        </p>
                                    @endif
                                @else
                                    <p>この日程では予約できません。今日以降の日程を選択してください。</p>
                                @endif
                            @else
                                <p>この日程では予約できません。チェックアウト日はチェックイン日よりも後の日付を選択してください。</p>
                            @endif
                        @else
                            <p>検索項目が入力されていません。</p>
                        @endif
                      </div>
                    <hr/>
                    <a href="#" onclick="history.back(-1);return false;">　< 戻る</a>
                 </div>
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