@extends('layouts.mapp1')
@section('title', '新宿トラベル')
@section('content')
<div class="components-page2">
<div class="wrapper">
    <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
        <div class="container">
            <div class="row">
            <form action="{{ route('hotels.index') }}" method="get">
                <div class="col-md-6 col-md-offset-3 text-center" style="background-color:rgba(255,255,255,0.25); text-shadow: 1px 1px 7px black;">
            @csrf
            <h2 style="color: white;">宿情報の検索</h2><br>
    <dl>
        <dt><strong style="color: white; font-size:16px;">名前検索：</strong><input type="text" name="name" id="name" value="{{ request('name') }}"></dt><br>
        <dt><strong style="color: white; font-size:16px;">住所検索：</strong><input type="text" name="address" id="address" value="{{ request('address') }}"></dt><br>
        <dt><strong style="color: white; font-size:16px;">宿分類検索：</strong>
            <select name="category" id="category">
                <option value=""></option>
                @foreach ($categories as $category)
                {{-- 検索した内容を残したい --}}
                    <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select></dt>
    </dl>
        <button class="btn btn-primary btn-lg" type="submit">検索</button><br>
        </div>
    </form>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
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
                    {{-- <tr>
                        <td>電話番号</td>
                        <td>{{ $hotel->tel }}</td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td>{{ $hotel->email }}</td>
                    </tr> --}}
                </table>
            </div>
        </div>
    @endforeach
    {{ $hotels->appends(Request::All())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection