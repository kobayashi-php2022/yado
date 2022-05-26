@extends('layouts.app')

@section('content')
    <p><a href="{{ route('hotels.index') }}">宿情報検索へ</a></p>
    <p><a href="{{ route('members.index') }}">会員情報検索へ</a></p>
@endsection