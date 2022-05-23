@extends('layouts.app')

@section('content')
<div class="header_image">
    @if ($hotel->image !== null)
    <img src="{{ \Storage::url($hotel->image) }}" width="600" height="400">
    @else
    <img src="{{ \Storage::url('items/no_image.png') }}" width="100" height="100" style="text-align: center;">
    @endif
</div>
<h1>宿情報詳細</h1>
<p>
    <a href="{{ route('hotels.edit', $hotel->id) }}">編集する</a>
    |
    <a href="#" onclick="deleteHotel()">削除する</a>
    <form action="{{ route('hotels.destroy', $hotel) }}" method="post" id="delete-form">
        @csrf
        @method('delete')
    </form>
    <script type="text/javascript">
        function deleteHotel() {
            event.preventDefault();
            if(window.confirm('本当に削除しますか？')) {
                document.getElementById('delete-form').submit();
            }
        }
    </script>
</p>
<table style="margin-left: 30px;">
    <tr>
        <th>宿名</th>
        <th>{{ $hotel->name }}</a></th>
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

{{-- プラン一覧・追加 --}}
<a href="">プランを追加する</a>

<hr>
<a href="/hotels">一覧に戻る</a>
@endsection