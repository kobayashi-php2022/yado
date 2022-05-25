<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    @include('commons/flash')
    <form action="route('login')" method="post">
    @csrf
        <p><label><br><input type="email" name="email" placeholder="メールアドレス"></label></p>
        <p><label><br><input type="password" name="password" placeholder="パスワード"></label></p>
        <p><input type="submit" value="ログイン"></p>
        </form>
        <p>または</p>
        <p><a href="{{route('register')}}">新規会員登録</a></p>
</body>
</html>