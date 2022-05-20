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
    {{-- 宿データの一覧 --}}
    @foreach ($hotels as $hotel)
        <div class="info_index">
            {{-- 宿写真と宿詳細 --}}
            <div class="info" style="display:flex; margin:40px;">
                @if ($hotel->image !== "")
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

            {{-- プラン --}}
            <div class="plan_index">
                {{-- プランってどうやって表示させるんだろう --}}
            </div>
            </a>   
        </div>
    @endforeach
{{ $hotels->appends(Request::All())->links('pagination::bootstrap-4') }}
@endsection