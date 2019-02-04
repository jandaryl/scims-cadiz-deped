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

<div class="pagination is-centered mt-8">
    {{ $posts->links() }}
</div>
