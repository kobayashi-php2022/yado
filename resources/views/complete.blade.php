<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>会員登録完了</title>
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
                    <div class="card-header">会員登録完了</div>
                    <div class="card-body">

          <div class="form-group row">
              <div class="col-md-20 text-align: center;">
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 offset-md-2" style="text-align: center;">
              <h2>会員登録が完了しました</h2><br>
              <a href="{{route('login')}}"><input type="button" value="ログインする" class="btn btn-secondary"></a>
              </div>
            </div>
                     </div>
              </div>
              </div>
            </div>
        </div>
</body>
</html>