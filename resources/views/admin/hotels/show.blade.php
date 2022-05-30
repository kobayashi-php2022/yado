@extends('layouts.app')

@section('title', '新宿トラベル_宿の詳細情報')
@section('content')


<div class="components-page">
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('{{ \Storage::url($hotel->image) }}');">
		<div class="container">
        <div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
			@csrf
			<h2 style="color: white;">宿の詳細情報</h2><br>
            </div>
			</div>
		</div>
	</div>
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">

<div class="header_image">
    @if (!is_null($hotel->image))
    <img src="{{ \Storage::url($hotel->image) }}" width="600" height="400">
    @else
    <img src="{{ \Storage::url('items/no_image.png') }}" width="100" height="100">
    @endif
</div>
<p>
    <a href="{{ route('hotels.edit', $hotel->id) }}">編集する</a>
    |
    <a href="#" onclick="deleteHotel()">削除する</a>
    <form action="{{ route('hotels.destroy', $hotel) }}" method="post" id="hotels-delete-form">
        @csrf
        @method('delete')
    </form>
    <script type="text/javascript">
        function deleteHotel() {
            event.preventDefault();
            if(window.confirm('この宿にお客様の予約がある場合、自動的に削除されます。\r\n本当に削除しますか？')) {
                document.getElementById('hotels-delete-form').submit();
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
<h2>プラン一覧</h2>
{{-- @if(\Auth::user()->auth == "管理者") --}}
<form action="{{ route('plans.create') }}">
    @csrf
    <input type="hidden" name="hotel_id" value={{ $hotel->id }}>
    <input type="submit" value="プランを追加する">
</form>
{{-- @endif --}}
@foreach ($plans as $plan)
<table style="margin-left: 30px;">
    <tr>
        <th>プラン名</th>
        <th>
            {{ $plan->name }}
            <a href="{{ route('plans.edit', $plan->id) }}"><button>編集する</button></a>
        </th>
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
    <tr>
        <td>登録日</td>
        <td>{{ $plan->created_at }}</td>
    </tr>
    <tr>
        <td>最終更新日</td>
        <td>{{ $plan->updated_at }}</td>
    </tr>
</table>
@endforeach
<hr>
<a href="#" onclick="history.back(-1);return false;">< 一覧に戻る</a>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

    <style>
        /* 追加 */
        table {
            margin-left: 30px;  
            line-height: 2;
            font-size:17px;
        }
        table th{
            font-size:20px;
        }
	</style>
@endsection