<header class="nav-type-1 dark-nav">
      <nav class="navbar navbar-fixed-top">
        <div class="navigation">
          <div class="container relative">

            <div class="row">

              <div class="col-md-12 nav-wrap">
                <a href="/" id="logo">Sample App</a>
                <div class="collapse navbar-collapse text-center" id="navbar-collapse" style="max-height: 949px;">

                  <ul class="nav navbar-nav navbar-right">
                     @if (Auth::check())
            <li><a href="#">用户列表</a></li>
            <li><a href="#">帮助</a></li>
            <li><a href="#">关于</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {{ Auth::user()->name }} <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                <li><a href="#">编辑资料</a></li>
                <li class="divider"></li>
                <li>
                  <a id="logout" href="#">
                    <form action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                    </form>
                  </a>
                </li>
              </ul>
            </li>
          @else
            <li><a href="{{ route('help') }}">帮助</a></li>
            <li><a href="{{ route('login') }}">登录</a></li>
          @endif

                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->

            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
      <title>Home</title>
    </header>