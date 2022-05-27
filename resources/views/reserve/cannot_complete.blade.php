@extends('layouts.app')

@section('content')
    <h1>予約エラー</h1>
    <p>予約に失敗しました。プランは最大5件まで予約できます。</p>
    <hr>
    <a href="{{ route('hotels.index') }}"><button>宿検索画面へ</button></a>
@endsection