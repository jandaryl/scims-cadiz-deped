<footer class="container is-fullhd bg-grey-lightest mt-12">
  <div class="columns">
    <div class="column">
      <div class="flex flex-col justify-center">
        <a class="lg:ml-32 md:ml-24 lg:text-left md:text-left text-center sm:ml-0 py-1 lg:mt-32 md:mt-24 sm:mt-0 lg:text-xl md:text-lg text-sm text-grey-darkest hover:text-blue" href="{{ route('home') }}">Home</a>
        <a class="lg:ml-32 md:ml-24 lg:text-left md:text-left text-center sm:ml-0 py-1 mt-12 lg:text-xl md:text-lg text-sm text-grey-darkest hover:text-blue -mt-1" href="{{ route('blog.index') }}">Curriculars</a>
        <a class="lg:ml-32 md:ml-24 lg:text-left md:text-left text-center sm:ml-0 py-1 mt-12 lg:text-xl md:text-lg text-sm text-grey-darkest hover:text-blue -mt-1" href="{{ route('schools') }}">Schools</a>
        <a class="lg:ml-32 md:ml-24 lg:text-left md:text-left text-center sm:ml-0 py-1 mt-12 lg:text-xl md:text-lg text-sm text-grey-darkest hover:text-blue -mt-1" href="{{ route('categories') }}">Categories</a>
        <a class="lg:ml-32 md:ml-24 lg:text-left md:text-left text-center sm:ml-0 py-1 mt-12 lg:text-xl md:text-lg text-sm text-grey-darkest hover:text-blue -mt-1" href="{{ route('contact') }}">Contact Us</a>
        @guest
          <a class="lg:ml-32 md:ml-24 lg:text-left md:text-left text-center sm:ml-0 py-1 mt-12 lg:text-xl md:text-lg text-sm text-grey-darkest hover:text-blue -mt-1" href="{{ route('admin.login') }}">Login</a>
        @else
          @can('access backend')
            <a class="lg:ml-32 md:ml-24 lg:text-left md:text-left text-center sm:ml-0 py-1 mt-12 lg:text-xl md:text-lg text-sm text-grey-darkest hover:text-blue -mt-1" href="{{ route('admin.home') }}">Admin</a>
          @endcan
            <a class="lg:ml-32 md:ml-24 lg:text-left md:text-left text-center sm:ml-0 py-1 mt-12 lg:text-xl md:text-lg text-sm text-grey-darkest hover:text-blue -mt-1" href="{{ route('logout') }}">Logout</a>
        @endif
      </div>
    </div>
    <div class="column">
      <div class="flex flex-col lg:mt-12 md:mt-12 sm:mt-6 mt-6 items-center">
        <p class="text-center lg:text-2xl md:text-lg text-base">
          Want to get the latest updates?
        </p>
        @if ($message = Session::get('success'))
        <div class="inline-flex lg:h-14 md:h-16 h-10 w-64 bg-green-lightest border border-green-light text-green-dark px-3 md:py-1 py-1 rounded-lg relative mr-4" role="alert">
          <span class="block md:inline lg:pt-0 pb-2 md:pt-1 sm:pt-0 pt-1 lg:text-lg md:text-base text-sm">{{ $message }}</span>
          <span class="px-2 lg:pt-2 pb-2 md:pt-1 pt-0">
            <svg class="fill-current lg:h-6 lg:w-6 md:h-5 md:w-5 sm:h-4 sm:w-4 h-4 w-4 text-sm text-green" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="inline-flex lg:h-14 md:h-16 h-10 w-64 bg-red-lightest border border-red-light text-red-dark px-3 md:py-1 py-1 rounded-lg relative mr-4" role="alert">
          <span class="block md:inline lg:pt-0 pb-2 md:pt-1 sm:pt-0 pt-1 lg:text-lg md:text-base text-sm">{{ $message }}</span>
          <span class="px-2 lg:pt-2 pb-2 md:pt-1 pt-0">
            <svg class="fill-current lg:h-6 lg:w-6 md:h-5 md:w-5 sm:h-4 sm:w-4 h-4 w-4 text-sm text-red" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>
        @endif
        <form action="{{ route('email.subscribe') }}" method="POST">
        @csrf
          <div class="inline-flex mt-4 justify-center">
            <div class="field">
              <p class="control has-icons-left mr-2">
                <input class="input is-info is-rounded" name="email" id="email" type="email" placeholder="Email">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
              </p>
            </div>
            <button type="submit" class="button is-info is-outlined is-rounded"><span class="lg:text-base md:text-base text-sm">Submit</span></button>
          </div>
        </form>
      </div>
    </div>
    <div class="column">
      <div class="flex flex-col lg:ml-24 lg:mt-32 md:mt-24 sm:mt-0">
        <p class="text-center lg:text-xl md:text-lg text-sm">
          Connect With Us:
        </p>
        <div class="inline-flex flex-row justify-center">
          <a class="text-grey-darkest hover:text-blue rounded-full h-8 w-8 flex items-center justify-center mr-1" target="_blank" href="https://www.facebook.com/deped.cadizcity">
            <i class="fab fa-facebook-f"></i></a>
          <a class="text-grey-darkest hover:text-blue rounded-full h-8 w-8 flex items-center justify-center mr-1" target="_blank" href="https://twitter.com/DepEd_PH">
            <i class="fab fa-twitter"></i></a>
          <a class="text-grey-darkest hover:text-blue rounded-full h-8 w-8 flex items-center justify-center mr-1" target="_blank" href="https://www.instagram.com/explore/tags/depedph/?hl=en">
            <i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center lg:text-xl md:text-lg text-sm lg:mt-16 md:mt-12 sm:mt-6 mt-6 lg:mb-24 md:mb-24 sm:mb-12 mb-6">
    <p>Copyright &copy; 2019</p>
  </div>
</footer>
