<header class="hero is-info">
    <!-- Start Hero Body -->
    <div class="hero-body">
      <div class="level">
        <div class="level-item">
            <figure class="image is-128x128 mr-6">
              <img class="is-rounded" src="https://i.imgur.com/AHIuanj.png" alt="DepEd Logo">
            </figure>
            <h1 class="title has-text-left has-text-weight-semibold">
              <!-- <div class="lg:block hidden"></div> TODO: For the mobile responsiveness...-->
                <span class="lg:text-2xl md:text-xl sm:text-lg text-sm is-uppercase">Republic of the Philippines</span>
                <hr class="-mb-0 -mt-0">
                <span class="lg:text-4xl md:text-3xl sm:text-2xl text-lg is-uppercase">Department of Education</span>
                <br>
                <span class="lg:text-3xl md:text-2xl sm:text-xl text-base">Division of Cadiz City</span>
            </h1>
        </div>
      </div>
    </div>
    <!-- End Hero Body -->
    <!-- Start Hero Footer -->
    <div class="hero-foot">
      <nav class="tabs is-boxed is-fullwidth">
        <div class="container">
          <ul class="lg:text-xl md:text-lg sm:text-base text-sm has-text-weight-semibold no-underline">
            <li class="{{ active_class(if_route('home')) }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ active_class(if_route('blog.index')) }}"><a href="{{ route('blog.index') }}">Curriculars</a></li>
            <li class="{{ active_class(if_route('schools')) }}"><a href="{{ route('schools') }}"> Schools</a></li>
            <li class="{{ active_class(if_route('categories'))}}"><a href="{{ route('categories') }}">Categories</a></li>
            <li class="{{ active_class(if_route('contact'))}}"><a href="{{ route('contact') }}">Contact Us</a></li>
            @guest
              <li><a href="{{ route('admin.login') }}">Login</a></li>
            @else
              <li><a href="{{ route('logout') }}">Logout</a></li>
            @endif
          </ul>
        </div>
      </nav>
    </div>
    <!-- End Hero Footer -->
</header>

