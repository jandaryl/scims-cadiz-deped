@extends('layouts.frontend-bulma')

@section('title', __('labels.frontend.titles.blog'))

@section('content')
        <div class="flex flex-col lg:items-stretch md:items-stretch sm:items-center items-center mt-8">
          <h2 class="lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-center mb-8">List of School Curriculars </h2>
            @include('frontend.blog.partials.published-posts')
        </div>
@endsection
