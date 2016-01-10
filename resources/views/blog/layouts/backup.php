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
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

        {{-- The Posts --}}
        @foreach ($posts as $post)
          <div class="post-preview">
            <a href="{{ $post->url($tag) }}">
              <h2 class="post-title">{{ $post->title }}</h2>
              @if ($post->subtitle)
                <h3 class="post-subtitle">{{ $post->subtitle }}</h3>
              @endif
            </a>
            <p class="post-meta">
              Posted on {{ $post->published_at->format('F j, Y') }}
              @if ($post->tags->count())
                in
                {!! join(', ', $post->tagLinks()) !!}
              @endif
            </p>
          </div>
          
        @endforeach

        {{-- The Pager --}}
        <ul class="pager">

          {{-- Reverse direction --}}
          @if ($reverse_direction)
            @if ($posts->currentPage() > 1)
              <li class="previous">
                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                  <i class="fa fa-long-arrow-left fa-lg"></i>
                  {{ $tag ? $tag->tag : $posts->currentPage() - 1 }} .sayfa
                </a>
              </li>
            @endif
            @if ($posts->hasMorePages())
              <li class="next">
                <a href="{!! $posts->nextPageUrl() !!}">
                  {{ $tag ? $tag->tag : $posts->currentPage() + 1 }} .sayfa
                  <i class="fa fa-long-arrow-right"></i>
                </a>
              </li>
            @endif
          @else
            @if ($posts->currentPage() > 1)
              <li class="previous">
                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                  <i class="fa fa-long-arrow-left fa-lg"></i>
                  {{ $tag ? $tag->tag : $posts->currentPage() - 1 }} .sayfa
                </a>
              </li>
            @endif
            @if ($posts->hasMorePages())
              <li class="next">
                <a href="{!! $posts->nextPageUrl() !!}">
                  {{ $tag ? $tag->tag : $posts->currentPage() + 1 }} .sayfa
                  <i class="fa fa-long-arrow-right"></i>
                </a>
              </li>
            @endif
          @endif
        </ul>
      </div>

    </div>
  </div>
@stop
