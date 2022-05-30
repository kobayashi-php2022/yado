@extends('layouts.app')

@section('content')

<form action="{{ route('members.index') }}" method="get">
    @csrf
    <div class="p-3 mb-2 bg-secondary text-white">会員検索</div>
    <dl>
        <dt>ID検索：</dt>
        <dl><input type="number" name="id" id="id" min="1" max="10" value="{{ request('id') }}"></dl>
        <dt>名前検索：</dt>
        <dl><input type="text" name="name" id="name" minlength="1" maxlength="100" value="{{ request('name') }}"></dl>
        <p><input type="submit" value="検索"></p>
    </form>
    <div class="p-3 mb-2 bg-secondary text-white">会員一覧</div>
    @foreach ($users as $member)
        <div class="info_index">
                <table style="margin-left: 10px;">
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
</div>
<p style="margin-left: 80px;"><a href="{{route('admin')}}">管理者トップに戻る</a></p>

@endsection