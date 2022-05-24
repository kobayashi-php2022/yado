@extends('layouts.app')

@section('content')
    <h1>予約内容の入力</h1>
    <p>必要な情報を入力し、「次へ」ボタンを押してください。予約が完了すると宿泊契約が成立します。</p>
    @include('commons/error_flash')
    <div class="create">
        <form action="{{ route('orders.complete') }}" method="post">
            @csrf
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
                    <td>チェックイン</td>
                    <td><input type="date" name="checkin_date" id="checkin_date"></td>
                </tr>
                <tr>
                    <td>チェックアウト</td>
                    <td><input type="date" name="checkout_date" id="checkout_date"></td>
                </tr>
                <tr>
                    <td>宿泊人数</td>
                    <td><input type="number" name="stayers_num" id="stayers_num">人</td>
                </tr>
                <tr>
                    <td>部屋数</td>
                    <td><input type="number" name="rooms_num" id="rooms_num">部屋</td>
                </tr>
                <tr>
                    <td>住所</td>
                    {{-- 郵便番号での住所検索したい --}}
                    <td><input type="text" name="address" id="address"></td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td><input type="tel" name="tel" id="tel"></td>
                </tr>
            </table>
            <input type="hidden" name="">
            <input type="submit" value="次へ">
        </form>
    </div>
    <hr>
    <button type="button" onClick="history.back()">戻る</button>
@endsection