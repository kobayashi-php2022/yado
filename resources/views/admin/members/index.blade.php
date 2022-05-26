@extends('layouts.app')

@section('content')

<form action="{{ route('members.index') }}" method="get">
    @csrf
    <h1>会員情報を検索</h1>
    <dl>
        <dt>ID検索：</dt>
        <dl><input type="number" name="id" id="id" min="1" max="300" value="{{ request('id') }}"></dl>
        <dt>名前検索：</dt>
        <dl><input type="text" name="name" id="name" value="{{ request('name') }}"></dl>
        <p><input type="submit" value="検索"></p>
    </form>
    <p>検索結果を表示</p>
    @foreach ($users as $member)
        <div class="info_index">
                <table style="margin-left: 30px;">
                    <tr>
                        <th>id</th>
                        <th><a href="{{ route('members.show', $member->id) }}">{{ $member->id }}</a></th>
                    </tr>
                    <tr>
                        <td>名前</td>
                        <td>{{ $member->name }}</td>
                    </tr>
                </table>
        </div>
    @endforeach
{{ $users->appends(Request::all())->links('pagination::bootstrap-4') }}
@endsection