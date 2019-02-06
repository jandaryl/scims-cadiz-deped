@extends('layouts.frontend')

@section('body_class', 'page-post')

@section('content')
    <div class="text-center m-4">
        <h1 class="lg:text-2xl md:text-2xl sm:text-lg text-base">{{ $post->title }}</h1>
        <p class="lg:text-lg md:text-base sm:text-sm text-xs">
            @include('frontend.blog.partials.publication-infos')
        </p>
    </div>
    <div class="wysiwyg-content">
        {!! Purify::clean($post->body) !!}
    </div>

    <nav class="nav mt-8">
        <span class="navbar-brand lg:text-lg md:text-lg sm:text-base text-base">@lang('labels.frontend.blog.tags')</span>

        @foreach($post->tags as $tag)
        <a class="nav-link lg:text-base md:text-base sm:text-sm text-sm" href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a>
        @endforeach
    </nav>
@endsection
