<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark border-bottom border-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="/">Inkwell Library</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/catalog">Catalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#about-inkwell-library">About</a>
          </li>
        </ul>
        <div class="d-flex gap-3 text-center align-items-center text-white justify-content-center">
          @if(Auth::check())
            @if(Auth::user()->admin == 1)
              <a class="" href="/admin/home">Admin</a>
            @endif
          @endif

          @guest
          @if (Route::has('login'))
                  <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
          @endif

          @if (Route::has('register'))
              <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
          @else
          <a href="/profile/home">
              Profile
          </a>

          <div class="">
              <a class="" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
          @endguest
        </div>
      </div>
    </div>
  </nav>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentUrl = "{{ Request::url() }}";
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(function(navLink) {
            navLink.classList.remove('active');
            if (navLink.href === currentUrl) {
                navLink.classList.add('active');
            }
        });
    });
</script>