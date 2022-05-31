      @if (Route::has('login'))
      <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
      <a href="{{ route('reserve.index') }}">
	         <div class="logo-container">
	            <div class="logo">
                    <img src="/img/logo.png" alt="logo" style="width: 50%;">
	            </div>
	        </div>
          </a>
  <div class="container">
    <div class="collapse navbar-collapse" id="navigation-doc">
		<ul  class="nav navbar-nav navbar-right">
      @auth
        <li>
				<a href="{{ route('reserve.index') }}">TOPページ</a>
			</li>
			<li>
                <a href="{{ route('users.index') }}">マイページ</a>
            </li>
        @else
                  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">ログイン</a></li>
                  @if (Route::has('register'))
                      <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">会員登録</a></li>
                  @endif
              @endauth
            </ul>
          </div>
    </div>
</nav>
@endif