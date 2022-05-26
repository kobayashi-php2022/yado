@extends('layouts.app1')

@section('content')
<form action="" method="get">
    @csrf
    <h1>宿情報を検索</h1>
    <dl>
        <dt>名前検索：</dt>
        <dl><input type="text" name="name" id="name" value=""></dl>

        <dt>住所検索：</dt>
        <dl><input type="text" name="address" id="address" value=""></dl>

        <dt>宿分類検索：</dt>
        <dl>

        </dl>

        <p><input type="submit" value="検索"></p>
    </form>
    <hr>
    <p>検索結果を表示</p>
    {{-- 宿データの一覧 --}}

                <table style="margin-left: 30px;">
                    <tr>
                        <th>宿名</th>
                        <th><a href=""></a></th>
                    </tr>
                    <tr>
                        <td>宿分類</td>
                    </tr>
                    <tr>
                        <td>住所</td>
                    </tr>
                    <tr>
                        <td>電話番号</td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                    </tr>
                    <tr>
                        <td>登録日</td>
                    </tr>
                    <tr>
                        <td>最終更新日</td>
                    </tr>
                </table>
            </div>
        </div>
@endsection