
      @if (Route::has('login'))
      <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
      <div class="logo-container">
	            <div class="logo">
	                <a href="{{ route('admin') }}"><img src="/img/logo.png"alt="logo" style="width: 50%;"></a>
                </div>
	        </div>
  <div class="container">
    <div class="collapse navbar-collapse" id="navigation-doc">
		<ul  class="nav navbar-nav navbar-right">
        <li>
				<a href="{{ route('admin') }}">管理者画面TOP</a>
			</li>
			<li>
                <a href="{{ route('members.index') }}">会員検索</a>
            </li>
			<li>
                <a href="{{ route('hotels.index') }}">宿検索</a>
            </li>
            <li>
                <a href="#" onclick="logoutUser()"><input type="submit" value="ログアウト" class="btn btn-secondary"></a>
                <form action ="{{route('logout')}}" method="post" id="logout-form">
                    @csrf
                </form>
                <script type="text/javascript">
                function logoutUser(){
                    event.preventDefault();
                    if(window.confirm('ログアウトしますか？')){
                    document.getElementById('logout-form').submit();
                    }
                }
                </script>
            </li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>              @else
                  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">ログイン</a></li>

                  @if (Route::has('register'))
                      <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">会員登録</a></li>
                  @endif
              @endauth
          </div>
    </div>
</nav>
