{{-- ヘッダーのコピペです。 --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

{{-- ロゴの横のメニューです --}}
    <div class="collapse navbar-collapse ml-auto" id="navbarNav">
      @if (Route::has('login'))
          <ul class="navbar-nav mr-10">
              @auth
                  <li class="nav-item"><a href="#" class="nav-link">マイページ</a></li>
                  <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">ログアウト</a></li>
              @else
                  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">ログイン</a></li>

                  @if (Route::has('register'))
                      <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">会員登録</a></li>
                  @endif
              @endauth
          </div>
      @endif
    </div>
</nav>
