{{-- ヘッダーのコピペです。 --}}

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

{{-- ロゴの横のメニューです --}}
       <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">マイページ</a>
          </li>
          {{--<li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}">ログアウト</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">商品一覧</a>
          </li>--}}
        </ul>
      </div> 
    </div>
  </nav>