@extends('layouts.app')

@section('content')
    <h1>予約内容の確認</h1>
    <p>こちらの内容で予約します。内容を確認したら「予約」ボタンを押してください。</p>
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
                    <td>{{ request('check_in') }}</td>
                </tr>
                <tr>
                    <td>チェックアウト</td>
                    <td>{{ request('check_out') }}</td>
                </tr>
                <tr>
                    <td>宿泊人数</td>
                    <td>{{ request('num') }}人</td>
                </tr>
                <tr>
                    <td>部屋数</td>
                    <td>{{ request('room') }}部屋</td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td>{{ request('address') }}</td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td>{{ request('tel') }}</td>
                </tr>
            </table>
            <input type="hidden" name="check_in" id="check_in" value="{{ request('check_in') }}">
            <input type="hidden" name="check_out" id="check_out" value="{{ request('check_out') }}">
            <input type="hidden" name="num" id="num" value="{{ request('num') }}">
            <input type="hidden" name="room" id="room" value="{{ request('room') }}">
            <input type="hidden" name="address" id="address" value="{{ request('address') }}">
            <input type="hidden" name="tel" id="tel" value="{{ request('tel') }}">
            <input type="hidden" name="">
            <input type="submit" value="次へ">
        </form>
    </div>
    <hr>
    <button type="button" onClick="history.back()">戻る</button>
@endsection