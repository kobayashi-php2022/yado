@extends('layouts.app')

@section('content')
<form action="{{ route('hotels.index') }}" method="get">
    @csrf
    <h1>宿情報を検索</h1>
    <a href="{{ route('hotels.create') }}">新規登録</a>
    <dl>
        <dt>名前検索：</dt>
        <dl><input type="text" name="name" id="name" value="{{ request('name') }}"></dl>

        <dt>住所検索：</dt>
        <dl><input type="text" name="address" id="address" value="{{ request('address') }}"></dl>

        {{-- なんか複雑になりそうなので保留 --}}
        {{-- <dt>日付検索：</dt>
        <dl><input type="date" name="date" id="date" value="{{ request('date') }}"></dl> --}}

        {{-- プラン検索は保留！ --}}
        {{-- <dt>プラン検索：</dt>
            <dl><select name="plan" id="plan" value="{{ request('plan') }}">
                <option value=""></option>
                @foreach ($plans as $plan)
                    <option value="{{ $plan->id }}" @if(request('plan') == $plan->id) selected @endif >
                        {{ $plan->name }}
                    </option>
                @endforeach
            </select>
        </dt> --}}

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
    {{-- 宿データ・画像表示もしたい --}}
    @foreach ($hotels as $hotel)
        <div class="info_index">
            <div class="info">
                {{-- 画像表示
                @if ($item->image !=='')
                <img src="{{ \Storage::url($item->image) }}" width="25%">
                @else
                <img src="{{ \Storage::url('items/no_image.png') }}">
                @endif
                参考：http://taustation.com/laravel-uploaded-image-display/
                --}}
                
                <h2>{{ $hotel->name }}</h2>
                <p>宿分類：{{ $hotel->category->name }}</p>
                <p>住所：{{ $hotel->address }}</p>
                <p>電話番号：{{ $hotel->tel }}</p>
                <p>メールアドレス{{ $hotel->email }}</p>
                <p>登録日{{ $hotel->created_at }}</p>
                <p>最終更新日{{ $hotel->updated_at }}</p>
            </div>

            <div class="plan_index">
                {{-- プランってどうやって表示させるんだろう --}}
            </div>
        </div>
    @endforeach
{{ $hotels->appends(Request::All())->links('pagination::bootstrap-4') }}
@endsection