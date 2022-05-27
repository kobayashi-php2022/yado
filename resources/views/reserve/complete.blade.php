@extends('layouts.app')

@section('content')
    <h1>予約完了</h1>
    <p>予約が完了しました。予約の内容を確認するには右上の「マイページ」をクリックしてください。</p>
    <hr>
    <a href="{{ route('hotels.index') }}"><button>宿検索画面へ</button></a>
@endsection