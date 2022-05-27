@extends('layouts.app')

@section('content')
    <h1>予約内容の入力</h1>
    <p>必要な情報を入力し、「次へ」ボタンを押してください。予約が完了すると宿泊契約が成立します。</p>
    @include('commons/error_flash')
    <hr>
    <div class="create">
        <form action="{{ route('orders.confirm') }}" method="post">
            @csrf
            <p>予約するプラン</p>
            <table>
                <tr>
                    <td>宿泊施設名</td>
                    <td>{{ $plan->hotel->name }}</td>
                    <input type="hidden" name="hotel_id" value="{{ $plan->hotel_id }}">
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
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <td>住所</td>
                    {{-- 郵便番号での住所検索したい --}}
                    <td><input type="text" name="address" id="address" value="{{ Auth::user()->address }}"></td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td><input type="tel" name="tel" id="tel" value="{{ Auth::user()->tel }}"></td>
                </tr>
            </table>
            <hr>
            <p>予約内容</p>
            <table>
                <tr>
                    <td>チェックイン日</td>
                    <td>{{ request('search_check_in') }}</td>
                    <input type="hidden" name="check_in" id="check_in" value="{{ request('search_check_in') }}">
                </tr>
                <tr>
                    <td>チェックアウト日</td>
                    <td>{{ request('search_check_out') }}</td>
                    <input type="hidden" name="check_out" id="check_out" value="{{ request('search_check_out') }}">
                </tr>
                <tr>
                    <td>部屋数</td>
                    <td>{{ request('search_rooms_num') }}部屋</td>
                    <input type="hidden" name="room" id="room" value="{{ request('search_rooms_num') }}">
                </tr>
                <tr>
                    <td>宿泊人数</td>
                    <td><input type="number" name="num" id="num" value="{{ request('num') }}">人</td>
                </tr>
            </table>
            <input type="submit" value="次へ">
        </form>
    </div>
    <hr>
    <button type="button" onClick="history.back()">戻る</button>
@endsection