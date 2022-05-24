<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>新規会員登録</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </nav>
    </div>
    </header>
        <div class="cotainer">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                <div class="card">
                    <div class="card-header">新規会員登録</div>
                    <div class="card-body">

          <form action="{{route('conf')}}" method="post" onsubmit="">
          @csrf
          <div class="form-group row">
              <label for="name" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="text" id="name" class="form-control" name="name" placeholder="氏名" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="email" id="email" class="form-control" name="email" placeholder="メールアドレス" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="password" id="password" class="form-control" name="password" placeholder="パスワード" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="confirm-password" class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-6">
                <input type="password" id="confirm-password" class="form-control" name="confirm-password" placeholder="パスワード確認" required>
                <div class="valid-feedback">O.K.</div>
                <div class="invalid-feedback">入力されたパスワードが一致しません。</div>
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
              <p><input type="submit" value="入力内容を確認" class="btn btn-secondary"></p><br>
              <p>または　<a href="{{route('login')}}">ログイン</a></p>
              </div>
              </div>
          </form>
          </div>
            </div>
            </div>
            </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

            <script type="text/javascript">
            var elm_pass = $('#password');
            var elm_confirm = $('#confirm-password');
            elm_confirm.on('keyup', function() {
                // まだパスワード（確認）を入力していない
                if (elm_confirm.val() === "") {
                elm_confirm.removeClass("is-valid");
                elm_confirm.removeClass("is-invalid");
                return;
                }
                var array_pass_chars = elm_pass.val().split("");
                var array_confirm_chars = elm_confirm.val().split("");
                $.each(array_confirm_chars, function(index, char) {
                if (array_pass_chars[index] === char){
                    // 先頭から一文字ずつ一致している場合には中途でも何も表示しない
                    elm_confirm.removeClass("is-valid");
                    elm_confirm.removeClass("is-invalid");
                }
                else{
                    // 一文字でも異なる場合はInvalid
                    elm_confirm.removeClass("is-valid");
                    elm_confirm.addClass("is-invalid");
                    return false;
                }
                });
                // 完全一致したらValid
                if (elm_pass.val() === elm_confirm.val()) {
                elm_confirm.addClass("is-valid");
                }
                else {
                elm_confirm.addClass("is-invalid");
                }
            });
            elm_confirm.on('blur', function() {
                if (elm_pass.val() === elm_confirm.val()) {
                elm_confirm.removeClass("is-invalid");
                elm_confirm.addClass("is-valid");
                }
                else {
                elm_confirm.removeClass("is-valid");
                elm_confirm.addClass("is-invalid");
                }
            });
            </script>
</body>
</html>