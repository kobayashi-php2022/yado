@extends('layouts.app')

@section('content')
    <h2>プラン詳細</h2>
    <table>
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
    <hr>
    <h2>空き情報を確認する</h2>
    <p>予約したい日付と人数を入力してください</p>
    <form action="{{ route('plans.show', $plan->id) }}" method="get">
        <dl>
            <dt>チェックイン日</dt>
            <dd><input type="date" name="search_check_in" id="search_check_in" value="{{ request('search_check_in') }}"></dd>
            <dt>チェックアウト日</dt>
            <dd><input type="date" name="search_check_out" id="search_check_out" value="{{ request('search_check_out') }}"></dd>
            <dt>部屋数</dt>
            <dd><input type="number" name="search_rooms_num" id="search_rooms_num" value="{{ request('search_rooms_num') }}">部屋</dd>
        </dl>
        <input type="submit" value="検索">
    </form>
    <hr>
    <h2>検索結果</h2
    @if (request('search_check_in') !== null && request('search_check_out') !== null && request('search_rooms_num') !== null) 
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
                        <button type="submit">このプランを予約する</button>
                    </form>
                @else
                    <p>満室のためこの日程では予約できません。違う日程を選択してください。</p>
                @endif
            @else
                <p>チェックイン日は明日以降の日程を指定してください。</p>
            @endif
        @else
            <p>チェックアウト日はチェックイン日よりも後の日付を選択してください。</p>
        @endif
    @else
        <p>検索項目が入力されていません。</p>
    @endif
<hr>
<button type="button" onClick="history.back()">戻る</button>
@endsection