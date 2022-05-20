<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
</head>
<body>
    <h1>新規会員登録</h1>
    <form action="register_conf.blade.php" method="POST">
    @csrf
        <p><label><br><input type="text" name="secondname" placeholder="名字"></label></p>
        <p><label><br><input type="text" name="firstname" placeholder="名前"></label></p>
        <p><label><br><input type="email" name="email" placeholder="メールアドレス"></label></p>
        <p><label><br><input type="password" name="password" placeholder="パスワード"></label></p>
        <p><label><br><input type="password" name="password_confirmation" placeholder="パスワード確認"></label></p>
        <p><input type="submit" value="入力内容を確認"></p>
        </form>
        <p>または</p>
        <p><a href="{{route('login')}}">ログイン</a></p>
</body>
</html>