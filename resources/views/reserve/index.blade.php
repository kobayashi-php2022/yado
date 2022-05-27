@extends('layouts.app1')

@section('content')
<form action="{{ route('hotels.index') }}" method="get">
    @csrf
    <h1>宿情報を検索</h1>
    <dl>
        <dt>名前検索：</dt>
        <dl><input type="text" name="name" id="name" value="{{ request('name') }}"></dl>

        <dt>住所検索：</dt>
        <dl><input type="text" name="address" id="address" value="{{ request('address') }}"></dl>

        <dt>宿分類検索：</dt>
        <dl>
            <select name="category" id="category">
                <option value=""></option>
                @foreach ($categories as $category)
                {{-- 検索した内容を残したい --}}
                    <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </dl>

        <p><input type="submit" value="検索"></p>
    </form>
    <hr>
    <p>検索結果を表示</p>
    {{-- 宿データの一覧 --}}
    @foreach ($hotels as $hotel)
        <div class="info_index">
            {{-- 宿写真と宿詳細 --}}
            <div class="info" style="display:flex; margin:40px;">
                @if (!is_null($hotel->image))
                <img src="{{ \Storage::url($hotel->image) }}" width="100" height="100">
                @else
                <img src="{{ \Storage::url('items/no_image.png') }}" width="100" height="100">
                @endif
                
                <table style="margin-left: 30px;">
                    <tr>
                        <th>宿名</th>
                        <th><a href="{{ route('hotels.show', $hotel->id) }}">{{ $hotel->name }}</a></th>
                    </tr>
                    <tr>
                        <td>宿分類</td>
                        <td>{{ $hotel->category->name }}</td>
                    </tr>
                    <tr>
                        <td>住所</td>
                        <td>{{ $hotel->address }}</td>
                    </tr>
                    <tr>
                        <td>電話番号</td>
                        <td>{{ $hotel->tel }}</td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td>{{ $hotel->email }}</td>
                    </tr>
                    <tr>
                        <td>登録日</td>
                        <td>{{ $hotel->created_at }}</td>
                    </tr>
                    <tr>
                        <td>最終更新日</td>
                        <td>{{ $hotel->updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endforeach
{{ $hotels->appends(Request::All())->links('pagination::bootstrap-4') }}
@endsection