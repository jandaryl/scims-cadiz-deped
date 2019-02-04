@extends('layouts.frontend-bulma')

@section('title', 'Home')

@section('content')
    <div class="tile is-ancestor box">
        <div class="tile is-parent is-7">
          <div class="tile is-child box">
            <h3>History</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
          </div>
        </div>
        <div class="tile is-parent is-vertical is-5">
          <div class="tile is-child box">
            <h3>Vision</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="tile is-child box">
            <h3>Mission</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
    </div>
    <div class="pt-4 pb-2">
      <div class="is-divider" data-content="Latest Posts"></div>
    </div>
    <div class="flex flex-col lg:items-stretch md:items-stretch sm:items-center items-center">
        @if(!empty($posts))
          @foreach($posts->chunk(4) as $chunk)
              <div class="tile is-ancestor">
                  <div class="inline-flex flex-wrap md:ml-24 tile is-parent">
                  @foreach($chunk as $post)
                      <div class="tile is-child">
                          <div class="flex flex-col items-center h-auto w-64 font-mono font-medium box mb-4 mr-4">
                          @if ($post->featured_image_url)
                            <img class="h-32 w-64 rounded-none mb-4" src="{{ $post->featured_image_url }}" alt="{{ $post->title }}">
                          @else
                            <img class="h-32 w-64 rounded-none mb-4" src="{{ asset('/images/placeholder.png') }}" alt="{{ $post->title }}">
                          @endif

                            <a class="text-left lg:text-xl md:text-xl sm:text-lg text-lg text-grey-darkest hover:underline" href="{{ route('blog.show', ['post' => $post->slug]) }}">{{ str_limit($post->title, 15) }}</a>
                            <p class="text-left lg:text-sm md:text-sm sm:text-xs text-xs">
                                @include('frontend.blog.partials.publication-infos')
                            </p>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
          @endforeach
      @endif
    </div>

@endsection
