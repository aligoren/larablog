@extends('blog.layouts.master', [
  'title' => $post->title,
  'meta_description' => $post->meta_description ?: config('blog.description'),
])

@section('page-header')
  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="post-heading">
            <h1>{{ $post->title }}</h1>
            <!-- {{ $post->id }} nolu yazının kaynak kodunda işin ne. Bu sadece deneysel. Kararsızlık var bende.-->
            <h3></h3>
            <span class="meta">
              <!-- {{ $post->published_at->format('F j, Y') }} Tarihinde -->
              <p class="post-meta">
              
              @if ($post->tags->count())
                Kategori:&nbsp; 
                   {!! join(', ', $post->tagLinks()) !!}
              @endif
            </p>
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop

@section('content')
	<hr class="small"><hr class="large">
	{{-- The Post --}}
	<article>
		<div class="container">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				{!! $post->content_html !!}
			</div>
		</div>
	</article>
	<hr class="small"><hr class="large">
<div class="container">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    @include('blog.partials.disqus')
  </div>
</div>
  {{-- The Pager --}}
  <div class="container">
    <div class="row">
      <ul class="pager">
        @if ($tag && $tag->reverse_direction)
          @if ($post->olderPost($tag))
            <li class="previous">
              <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                <i class="fa fa-long-arrow-left fa-lg"></i>
                {{ $tag ? $tag->tag : $post->olderPost($tag)->title }}
              </a>
            </li>
          @endif
          @if ($post->newerPost($tag))
            <li class="next">
              <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                {{ $tag ? $tag->tag : $post->newerPost($tag)->title }}
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </li>
          @endif
        @else
          @if ($post->newerPost($tag))
            <li class="previous">
              <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                <i class="fa fa-long-arrow-left fa-lg"></i>
                {{ $tag ? $tag->tag : $post->newerPost($tag)->title }}
              </a>
            </li>
          @endif
          @if ($post->olderPost($tag))
            <li class="next">
              <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                {{ $tag ? $tag->tag : $post->olderPost($tag)->title }}
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </li>
          @endif
        @endif
      </ul>
    </div>

  </div>
@stop
