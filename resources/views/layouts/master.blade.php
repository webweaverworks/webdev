<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link href="/css/app.css" rel="stylesheet">
<title>My Application</title>

</head>

<body>
@include('layouts.nav')
<div class="container">
      <div class="row">

	@yield('content')
        @include('layouts.sidebar')
	@include('layouts.footer')
   
       </div><!-- /.row -->
</div><!-- /.container -->
</body>
</html>
