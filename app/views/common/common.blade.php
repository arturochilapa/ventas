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
                 @if(Auth::check())
                 <li><a href="{{URL::to('/logout')}}">@lang('users.logout')</a></li> 
                 @endif
                
              </ul>

              @if (!Auth::check())
                  <div >
                    <form class="navbar-form navbar-right" role="search" method="post" action="/login">
                      <div class="form-group">
<<<<<<< HEAD
                        <input type="text" value="@if(isset($data['email'])) {{$data['email']}} @endif" class="form-control" name="email" placeholder="@lang('users.email')" />
                        <input type="password" value="" class="form-control" name="password" placeholder="@lang('users.password')" />
                        @if(isset($data['email'])) {{$data['email']}} @endif
                        @if(isset($data['password'])) {{$data['password']}} @endif
                        @if(isset($data['message'])) {{$data['message']}} @endif
=======
                        <input type="text" value="" class="form-control input-sm" name="email" placeholder="@lang('users.email')" />
<<<<<<< HEAD
                        <input type="password" value="" class="form-control input-sm" name="password" placeholder="@lang('users.password')" />
=======
                        <input type="text" value="" class="form-control input-sm" name="password" placeholder="@lang('users.password')" />
>>>>>>> ed28a433f0e644b218390431e11a62ec0a83fa36
>>>>>>> 22dfd3499e9a0ddf3ad8d3527789dc79f02f6a52
                      </div>
                      <button type="submit" class="btn btn-default btn-sm">@lang('users.login')</button>
                    </form>
                  </div>
<<<<<<< HEAD
              @else
                <div>
                  <a href="/logout">@lang('users.logout')</a>
                </div>
              @endif

              @unless (Auth::check())
    You are not signed in.
@endunless
              
=======
              @endunless
>>>>>>> ed28a433f0e644b218390431e11a62ec0a83fa36
            </div>
          </div>
        </nav>
    </header>
    <div style="margin: 50px;">
    @yield('content')
    </div>

</body>
</html>