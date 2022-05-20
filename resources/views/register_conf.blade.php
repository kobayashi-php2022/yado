@extends('layouts.app')

@section('content')
<form action="{{ route('login') }}" method='POST'>
    @csrf
    <input type="submit" value="ログアウト">
</form>
@endsectionS