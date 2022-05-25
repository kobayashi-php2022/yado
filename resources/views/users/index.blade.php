@extends('layouts.app')

@section('content')
<h1>マイページ</h1>
<div class="p-3 mb-2 bg-secondary text-white">予約一覧</div>
 @if($user->orders()->count()) 
    @foreach($orders as $order)
        <div class="container mt-2 mb-2">
        <table class="border rounded">
            <tr>
                <td>ホテル名</td>
                <td>{{ $order->hotel->name }}</td>
            </tr>
            <tr>
                <td>プラン名</td>
                <td>{{$order->plan->name}}</td>
            </tr>
            <tr>
                <td>日程</td>
                <td>{{$order->check_in}} から {{$order->check_out}}</td>
            </tr>
            <tr>
                <td>人数</td>
                <td>{{$order->num}}人</td>
            </tr>
            <tr>
                <td>部屋数</td>
                <td>{{ $order->room }}部屋</td>
            </tr>
                {{--<a href="#" onclick="deleteUser()">この予約をキャンセルする</a>
                    <form action ="{{route('oders.destroy',$order)}}" method="post" id="delete-form">
        @csrf
        @method('delete')
        </form>
        <script type="text/javascript">
            function deleteUser(){
                event.preventDefault();
                if(window.confirm('本当にキャンセルしますか？')){
                    document.getElementById('delete-form').submit();
                }
            }
            </script>--}}
            </tr>
        </table>
        </div>
    @endforeach
@else
    <p>現在予約しているプランはありません。</p>
@endif 

<div class="p-3 mb-2 bg-secondary text-white">会員登録情報</div>
<div class="cotainer">
<div class="row justify-content-center mt-5">
<div class="col-md-8">
<div class="card">
                    <tr>
                        <td><div class="card-header">会員ID：{{$user->id}}
                            
                            </div>
                        </td>
            <div class="card-body">
    <td>お名前：{{$user->name}}<br></td>
    <td>住所：{{$user->address}}<br></td>
    <td>生年月日：{{$user->birth}}<br></td>
    <td>電話番号：{{$user->tel}}<br></td>
    <td>メールアドレス：{{$user->email}}</td>
</tr>
</div>
        </div>
        </div>
        </div>
<p class="text-center">
        <a href="{{route('users.edit', $user->id)}}"><input type="submit" value="変更" class="btn btn-secondary text-center"></a>
                            <a href="#" onclick="deleteUser()"><input type="submit" value="退会" class="btn btn-secondary text-center"></a>
                            <form action ="{{route('users.destroy',$user)}}" method="post" id="delete-form">
                            @csrf
                            @method('delete')
                            </form>
                                <script type="text/javascript">
                                function deleteUser(){
                                    event.preventDefault();
                                    if(window.confirm('本当に退会しますか？')){
                                    document.getElementById('delete-form').submit();
                                    }
                                }
                                </script>
                                </p>
                            
@endsection