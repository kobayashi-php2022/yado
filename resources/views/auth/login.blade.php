<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>ログイン</title>
</head>
<body>
    <div class="cotainer">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ログイン</div>
                    <div class="card-body">

          <form action="{{route('/home')}}" method="post" onsubmit="">
          @csrf
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="email" id="email" class="form-control" name="email" placeholder="メールアドレス" value="{{old('email')}}" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="password" id="password" class="form-control" name="password" placeholder="パスワード" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 offset-md-3">
              @if($errors->count())
            <ul class="alert" style="color:red; font-size:12px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
              <p><input type="submit" value="ログイン" class="btn btn-secondary"></p><br>
              <p>または</p>
              <p><a href="{{route('register')}}">新規会員登録</a></p>
              </div>
              </div>
          </form>
          </div>
            </div>
            </div>
            </div>
            </div>
</body>
</html>