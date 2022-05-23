<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>会員登録内容の確認</title>
</head>
<body>
    <div class="cotainer">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                <div class="card">
                    <div class="card-header">会員登録内容の確認</div>
                    <div class="card-body">

        <form action="{{route('complete')}}" method="POST">
          @csrf
          <div class="form-group row">
              <div class="col-md-4 col-form-label text-md-right">氏名</div>
              <div class="col-md-6">
                <p class="form-control">{{ request()->name }}</p>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-4 col-form-label text-md-right">メールアドレス</div>
              <div class="col-md-6">
              <p class="form-control">{{ request()->email }}</p>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-4 col-form-label text-md-right">パスワード</div>
              <div class="col-md-6">
              <p class="form-control">{{ request()->password }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 offset-md-4">
              <input type="button" value="戻る" class="btn btn-secondary" onClick="history.back()">
              <input type="submit" class="btn btn-secondary ml-12" value="登録">
              </div>
              </div>
          </form>
          </div>
              </div>
              </div>
              </div>
              </div>
        <input type="hidden" name="name"value="{{ request()->name }}">
        <input type="hidden" name="email"value="{{ request()->email }}">
        <input type="hidden" name="password"value="{{ request()->password }}">
        </form>
</body>
</html>