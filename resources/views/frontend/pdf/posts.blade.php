@extends('layouts.pdf')


@section('body_class', 'page-post')

@section('content')
        @foreach($posts as $post)
            <div class="m-4 shadow-md p-4">
                <div class="text-center m-4">
                    <h1 class="lg:text-2xl md:text-2xl sm:text-lg text-base">{{ $post->title }}</h1>
                    <p class="lg:text-lg md:text-base sm:text-sm text-xs">
                        @if ((isset($hide_owner) && $hide_owner) || !config('blog.show_post_owner'))
                            @lang('labels.frontend.blog.published_at', ['date' => $post->updated_at->formatLocalized('%A %d %B %Y')])
                        @else
                            {!!
                                __('labels.frontend.blog.published_at_with_owner_linkable', [
                                    'date' => $post->updated_at->formatLocalized('%A %d %B %Y'),
                                    'name' => $post->owner,
                                    'link' => route('blog.owner', 'test'),
                                ])
                            !!}
                        @endif
                    </p>
                </div>
                <div class="wysiwyg-content lg:text-lg md:text-base sm:text-sm text-xs">
                    {!! Purify::clean($post->body) !!}
                </div>

                <nav class="nav mt-8">
                    <span class="navbar-brand lg:text-lg md:text-lg sm:text-base text-base">@lang('labels.frontend.blog.tags')</span>

                    @foreach($post->tags as $tag)
                    <a class="nav-link lg:text-base md:text-base sm:text-sm text-sm" href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a>
                    @endforeach
                </nav>
            </div>
        @endforeach
@endsection
