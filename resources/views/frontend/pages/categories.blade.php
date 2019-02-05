@extends('layouts.frontend-bulma')

@section('title', 'Categories')

@section('content')
          <h2 class="lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-center mb-8 mt-4">List of Categories</h2>
        <div class="tile is-ancestor">
          <div class="inline-flex flex-wrap md:ml-24 tile is-parent">
            @foreach($tags as $tag)
              <div class="tile is-child">
                <div class="flex flex-col items-center h-auto w-auto font-mono font-medium box mb-4 mr-4 ml-4 text-center">
                  <a class="text-left lg:text-2xl md:text-xl sm:text-lg text-lg text-grey-darkest hover:underline" href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
@endsection
