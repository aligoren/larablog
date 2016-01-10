@extends('blog.layouts.master', ['meta_description' => 'Contact Form'])

@section('page-header')
	<div class="container">
		<h1>İletişim</h1>
	</div>
	<hr class="small">
@stop

@section('content')
	<div class="container">
		Aşağıdaki yorum kısmından iletişime geçebilirsiniz. 
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			@include('blog.partials.disqus')
		</div>
	</div>
	
@endsection
