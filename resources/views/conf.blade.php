<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録内容の確認</title>
</head>
<body>
    <h1>会員登録内容の確認</h1>
    <form action="{{route('complete')}}" method="GET">
    <!doctype html>
<head>
    <meta charset="utf-8">
    <title>Laravelのフォーム表示</title>
    <div>
        <dl>
            <dt>名字</dt>
            <dd>{{ 'secondname' }}</dd>
        </dl>
        <dl>
            <dt>名前</dt>
            <dd>{{ 'firstname' }}</dd>
        </dl>
        <dl>
            <dt>メールアドレス</dt>
            <dd>{{ 'email' }}</dd>
        </dl>
        <dl>
            <dt>パスワード</dt>
            <dd>{{ 'password' }}</dd>
        </dl>
    </div>
        <p><input type="submit" value="登録" ></p>
        <p><input type="button" onClick="history.back()" value="再入力" ></p>
        </form>
</body>
</html>