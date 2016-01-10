<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('blog.title') }} Admin</title>

	<link href="/assets/css/admin.css" rel="stylesheet">
	<link href="/assets/css/bootstrap_markdown.css" rel="stylesheet">
  @yield('styles')

  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed"
              data-toggle="collapse" data-target="#navbar-menu">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id=navbar-menu">
      @include('admin.partials.navbar')
    </div>
  </div>
</nav>

@yield('content')

	<script src="/assets/js/admin.js"></script>
	<script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- <script src="/assets/js/bootstrap.min.js"></script> -->
	<script src="/assets/js/markdown.js"></script>
	<script src="/assets/js/to-markdown.js"></script>
	<script src="/assets/js/bootstrap-markdown.js"></script>
	<script src="/assets/js/bootstrap-markdown.tr.js"></script>
	<script src="/assets/js/jquery.hotkeys.js"></script>
	<script src="/assets/js/main.js"></script>

	@yield('scripts')

</body>
</html>