@extends('blog.layouts.master')

@section('page-header')
  <header >
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h1><a href="/">{{ config('blog.name') }}</a></h1>
            <hr class="small">
            <hr class="small">
          </div>
        </div>
      </div>
    </div>
  </header>
@stop

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10">
        {{-- The Posts --}}
        @foreach ($posts as $post)
          <div class="post-preview falanca">
            <a href="{{ $post->url($tag) }}">
              <h2 class="post-title">{{ $post->title }}</h2>
            </a>
            
            {!! str_limit($post->subtitle, 100, '...') !!}<p><a href="{{ $post->url($tag) }}">Devamı</a></p>
            <p class="post-meta">
              
              @if ($post->tags->count())
                Kategori: 
                {!! join(', ', $post->tagLinks()) !!}
              @endif
            </p>
          </div>
          
        @endforeach

        {{-- The Pager --}}
        <ul class="pager">

          {!! $posts->render() !!}
          
        </ul>
        
      </div>

    </div>
  </div>
@stop
