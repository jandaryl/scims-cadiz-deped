@extends('layouts.frontend-bulma')

@section('title', $user->name)

@section('content')
        <div class="flex flex-col lg:items-stretch md:items-stretch sm:items-center items-center mt-8">
          <h2 class="lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-center mb-8">List of Posts by {{ $user->name }}</h2>
            @include('frontend.blog.partials.published-posts', ['hide_owner' => true])
        </div>
@endsection
