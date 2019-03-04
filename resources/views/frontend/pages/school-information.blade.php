@extends('layouts.frontend-bulma')

@section('title', 'School Information')

@section('content')
    <div class="mt-12">
      <div class="tile is-ancestor box">
        <div class="tile is-parent is-6">
          <div class="tile is-child box lg:h-64">
            <img class="h-full w-full rounded-none" src="{{ $school->featured_image_url }}" alt="Gelato De Naction Product">
            <p class="text-center lg:text-lg md:text-md text-sm">Address : {{ $school->address }}</p>

          </div>
        </div>
        <div class="tile is-parent is-vertical is-6">
          <div class="tile is-child box">
            <div class="flex flex-col text-left lg:text-lg md:text-md text-sm">
                <p class="">School Name : {{ $school->school_name }}</p>
                <p class="pt-1">School ID : {{ $school->school_id }}</p>
                <p class="pt-1">District : {{ $school->district }}</p>
                <p class="pt-1">Principal Name : {{ $school->principal_name }}</p>
                <p class="pt-1">No. of Students : {{ $school->no_of_students }}</p>
                <p class="pt-1">No. of Teachers : {{ $school->no_of_teachers }}</p>
                <p class="pt-1">No. of Classrooms : {{ $school->no_of_classrooms }}</p>
                <p class="pt-1">Contact No. : {{ $school->contact_no }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Latest Posts -->
    <div class="pt-4 pb-2">
    <div class="is-divider" data-content="Latest Posts"></div>
    </div>
    @if(empty($posts))
    <div class="flex justify-center">
    <p class="lg:text-3xl md:text-2xl sm:text-xl text-lg text-grey-dark">No Publish Post Yet...</p>
    </div>
    @endif
    @if(!empty($posts))
      @foreach($posts->chunk(4) as $chunk)
        @foreach($chunk as $post)
          @foreach($post->tags as $tag)
            @if($tag->name === 'Announcements')
    <h1 class="lg:text-3xl md:text-2xl sm:text-xl text-lg mb-4 ml-4">Annoucements</h1>
    <div class="flex flex-col lg:items-stretch md:items-stretch sm:items-center items-center">
          <div class="tile is-ancestor">
              <div class="inline-flex flex-wrap md:ml-24 tile is-parent">
                    <div class="tile is-child">
                      <div class="flex flex-col items-center h-auto w-64 font-mono font-medium box mb-4 mr-4">

                      @if ($post->featured_image_url)
                        <img class="h-32 w-64 rounded-none mb-4" src="{{ $post->featured_image_url }}" alt="{{ $post->title }}">
                      @endif

                        <a class="text-left lg:text-xl md:text-xl sm:text-lg text-lg text-grey-darkest hover:underline" href="{{ route('blog.show', ['post' => $post->slug]) }}">{{ str_limit($post->title, 15) }}</a>
                        <p class="text-left lg:text-sm md:text-sm sm:text-xs text-xs">
                            @include('frontend.blog.partials.publication-infos')
                        </p>
                      </div>
                    </div>
                  @endif
                @endforeach
              @endforeach
            </div>
          </div>
        @endforeach
    </div>
    @endif
    @if(empty($posts))
    <div class="flex justify-center">
    <p class="lg:text-3xl md:text-2xl sm:text-xl text-lg text-grey-dark">No Publish Post Yet...</p>
    </div>
    @endif
    @if(!empty($posts))
      @foreach($posts->chunk(4) as $chunk)
        @foreach($chunk as $post)
          @foreach($post->tags as $tag)
            @if($tag->name === 'Achievements')
        <h1 class="lg:text-3xl md:text-2xl sm:text-xl text-lg mb-4 ml-4">Achievements</h1>
        <div class="flex flex-col lg:items-stretch md:items-stretch sm:items-center items-center">
          <div class="tile is-ancestor">
              <div class="inline-flex flex-wrap md:ml-24 tile is-parent">
                  <div class="tile is-child">
                    <div class="flex flex-col items-center h-auto w-64 font-mono font-medium box mb-4 mr-4">

                    @if ($post->featured_image_url)
                      <img class="h-32 w-64 rounded-none mb-4" src="{{ $post->featured_image_url }}" alt="{{ $post->title }}">
                    @endif

                      <a class="text-left lg:text-xl md:text-xl sm:text-lg text-lg text-grey-darkest hover:underline" href="{{ route('blog.show', ['post' => $post->slug]) }}">{{ str_limit($post->title, 15) }}</a>
                      <p class="text-left lg:text-sm md:text-sm sm:text-xs text-xs">
                          @include('frontend.blog.partials.publication-infos')
                      </p>
                    </div>
                  </div>
                  @endif
                @endforeach
              @endforeach
            </div>
          </div>
        @endforeach
    </div>
    @endif
    @if(!empty($posts))
      @if(empty($posts))
      <div class="flex justify-center">
      <p class="lg:text-3xl md:text-2xl sm:text-xl text-lg text-grey-dark">No Publish Post Yet...</p>
      </div>
      @endif
      @foreach($posts->chunk(4) as $chunk)
        @foreach($chunk as $post)
          @foreach($post->tags as $tag)
            @if($tag->name === 'Events')
    <h1 class="lg:text-3xl md:text-2xl sm:text-xl text-lg mb-4 ml-4">Events</h1>
    <div class="flex flex-col lg:items-stretch md:items-stretch sm:items-center items-center">
          <div class="tile is-ancestor">
              <div class="inline-flex flex-wrap md:ml-24 tile is-parent">
                  <div class="tile is-child">
                    <div class="flex flex-col items-center h-auto w-64 font-mono font-medium box mb-4 mr-4">

                    @if ($post->featured_image_url)
                      <img class="h-32 w-64 rounded-none mb-4" src="{{ $post->featured_image_url }}" alt="{{ $post->title }}">
                    @endif

                      <a class="text-left lg:text-xl md:text-xl sm:text-lg text-lg text-grey-darkest hover:underline" href="{{ route('blog.show', ['post' => $post->slug]) }}">{{ str_limit($post->title, 15) }}</a>
                      <p class="text-left lg:text-sm md:text-sm sm:text-xs text-xs">
                          @include('frontend.blog.partials.publication-infos')
                      </p>
                    </div>
                  </div>
                  @endif
                @endforeach
              @endforeach
            </div>
          </div>
        @endforeach
    </div>
    @endif
    @if(!empty($posts))
    <div class="flex justify-center">
        <button class="bg-blue hover:bg-blue-dark text-white text-sm font-bold py-2 px-4 h-10 w-auto rounded mb-4">
                        @php
                          $slug_school = str_slug($school->school_name);
                        @endphp
                        <a class="text-white hover:text-white" href="{{ route('blog.school', $slug_school) }}"><i class="fas fa-eye fa-1x mr-2"></i>View All</a>
        </button>
    </div>
    @else
      <div class="flex justify-center">
      <p class="lg:text-3xl md:text-2xl sm:text-xl text-lg text-grey-dark">Sorry, No Publish Post Yet...</p>
      </div>
    @endif
    <!-- End Latest Posts -->
@endsection
