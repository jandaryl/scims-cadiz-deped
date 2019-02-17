@extends('layouts.frontend-bulma')

@section('title', 'Home')

@section('content')
    <div class="tile is-ancestor box">
        <div class="tile is-parent is-6">
          <div class="tile is-child box">
            <h3 class="text-center lg:pb-4 md:pb-4 sm:pb-2 pb-2 lg:text-xl md:text-xl sm:text-lg text-lg">History</h3>
            <p class="p-2 lg:text-base md:text-base sm:text-sm text-sm">Education in the Philippines has undergone several stages of development from the pre-Spanish times to the present. In meeting the needs of the society, education serves as focus of emphases/priorities of the leadership at certain periods/epochs in our national struggle as a race.</p>
            <p class="p-2 lg:text-base md:text-base sm:text-sm text-sm">As early as in pre-Magellanic times, education was informal, unstructured, and devoid of methods. Children were provided more vocational training and less academics (3 Rs) by their parents and in the houses of tribal tutors.</p>
            <p class="p-2 lg:text-base md:text-base sm:text-sm text-sm">The pre-Spanish system of education underwent major changes during the Spanish colonization. The tribal tutors were replaced by the Spanish Missionaries. Education was religion-oriented. It was for the elite, especially in the early years of Spanish colonization. Access to education by the Filipinos was later liberalized through the enactment of the Educational Decree of 1863 which provided for the establishment of at least one primary school for boys and girls in each town under the responsibility of the municipal government; and the establishment of a normal school for male teachers under the supervision of the Jesuits. Primary instruction was free and the teaching of Spanish was compulsory. Education during that period was inadequate, suppressed, and controlled.</p>
          </div>
        </div>
        <div class="tile is-parent is-vertical is-6">
          <div class="tile is-child box">
            <h3 class="text-center lg:pb-4 md:pb-4 sm:pb-2 pb-2 lg:text-xl md:text-xl sm:text-lg text-base">Vision</h3>
            <p class="lg:text-base md:text-base sm:text-sm text-sm">We dream of Filipinos who passionately love their country  and whose values and competencies  enable them to realize their full potential  and contribute meaningfully to building the nation.</p>
            <p class="pt-4 lg:text-base md:text-base sm:text-sm text-sm">As a learner-centered public institution, the Department of Education  continuously improves itself to better serve its stakeholders.</p>
          </div>
          <div class="tile is-child box">
            <h3 class="text-center lg:pb-4 md:pb-4 sm:pb-2 pb-2 lg:text-xl md:text-xl sm:text-lg text-base">Mission</h3>
            <p class="lg:text-base md:text-base sm:text-sm text-sm">To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:</p>
            <p class="lg:pl-8 md:pl-4 sm:pl-2 pl-2 lg:pt-2 md:pt-2 sm:pt-1 pt-1 text-left lg:text-base md:text-base sm:text-sm text-sm">Students learn in a child-friendly, gender-sensitive, safe, and motivating environment.</p>
            <p class="lg:pl-8 md:pl-4 sm:pl-2 pl-2 lg:pt-2 md:pt-2 sm:pt-1 pt-1 text-left lg:text-base md:text-base sm:text-sm text-sm">Teachers facilitate learning and constantly nurture every learner.</p>
            <p class="lg:pl-8 md:pl-4 sm:pl-2 pl-2 lg:pt-2 md:pt-2 sm:pt-1 pt-1 text-left lg:text-base md:text-base sm:text-sm text-sm">Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.</p>
            <p class="lg:pl-8 md:pl-4 sm:pl-2 pl-2 lg:pt-2 md:pt-2 sm:pt-1 pt-1 text-left lg:text-base md:text-base sm:text-sm text-sm">Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.</p>
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
