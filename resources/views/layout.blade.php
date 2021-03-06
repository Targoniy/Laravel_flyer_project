<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<title>Project Flyer</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
	</head>
	<body>
	    <nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">ProjectFlyer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li id="All"><a href="/all">All flyers</a></li>
            <li><a href="/flyers/create/" class="btn">Create a Flyer</a></li>
            <li id="About"><a href="/about">About</a></li>
            <li id="Contact"><a href="/contact">Contact</a></li>
            <li id="Contact"><a href="/auth/logout">Logout</a></li>
            @if ($signedIn)
            <p class="navbar-text navbar-right">
                Hello, {{ $user->name }}
            </p>
            @endif
          </ul>
        </div>
      </div>
    </nav>
		<div class="container">
  		@yield('content')
		</div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script src="/js/libs.js"></script>
    @yield('scripts.footer')
        
    @include('flash')

	</body>
</html>