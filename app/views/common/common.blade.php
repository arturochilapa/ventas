<!DOCTYPE HTML>
<html>
<head>
	<title>@yield('titulo', 'Titulo')</title>
    {{ HTML::script('/assets/js/jquery.js') }}
    {{ HTML::style('/assets/jquery-ui/jquery-ui.min.css') }}
    {{ HTML::script('/assets/jquery-ui/jquery-ui.min.js') }}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
    <header class="top" role="header">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><!-- Logo--></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li {{(Request::is('/') ? 'class="active"' : '')}}><a href="/">Inicio</a></li>
                <li {{(Request::is('register') ? 'class="active"' : '')}}><a href="{{URL::to('/register')}}">Register</a></li>
                
              </ul>
              <form class="navbar-form navbar-left" role="search" method="post" action="/search">
                <div class="form-group">
                  <input type="text" value="" class="form-control" name="q" placeholder="B&uacute;scar" />
                </div>
                <button type="submit" class="btn btn-default">B&uacute;scar</button>
              </form>

              @if (!Auth::check())
                  <div >
                    <form class="navbar-form navbar-left" role="search" method="post" action="/login">
                      <div class="form-group">
                        <input type="text" value="@if(isset($data['email'])) {{$data['email']}} @endif" class="form-control" name="email" placeholder="@lang('users.email')" />
                        <input type="password" value="" class="form-control" name="password" placeholder="@lang('users.password')" />
                        @if(isset($data['email'])) {{$data['email']}} @endif
                        @if(isset($data['password'])) {{$data['password']}} @endif
                        @if(isset($data['message'])) {{$data['message']}} @endif
                      </div>
                      <button type="submit" class="btn btn-default">@lang('users.login')</button>
                    </form>
                  </div>
              @else
                <div>
                  <a href="/logout">@lang('users.logout')</a>
                </div>
              @endif

              @unless (Auth::check())
    You are not signed in.
@endunless
              
            </div>
          </div>
        </nav>
    </header>
    <div style="margin: 50px;">
    @yield('content')
    </div>

</body>
</html>