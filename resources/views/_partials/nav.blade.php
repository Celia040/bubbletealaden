<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm py-3 fs-4 w-100">
  <div class="container p-2">
    <a class="navbar-brand fs-3" href="/">
    <img src="{{url('/')}}/images/bubble-tea-logo-orig.png" alt="logo" width="160" height="160">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
       <ul class="navbar-nav me-auto"> 
        <li class="nav-item {{Request::is('/') ? 'bg-danger' : ''}}">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item {{Request::is('about') ? 'bg-danger' : ''}}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {{Request::is('menu') ? 'bg-danger' : ''}}">
          <a class="nav-link" href="/menu">Menükarte</a>
        </li>
        <li class="nav-item {{Request::is('comment*') ? 'bg-danger' : ''}}">
          <a class="nav-link" href="{{url('comment')}}">Kommentare</a>
          
        </li>
        <li class="nav-item {{Request::is('contact') ? 'bg-danger' : ''}}">
          <a class="nav-link" href="/contact">Kontakt</a>
        </li>
       </ul>

       <ul class="navbar-nav ms-auto">
        
       @if (Route::has('login'))
          @auth <!-- wenn angemeldet -->
          <li class="nav-item text-danger"><b>Hallo {{ explode(" ", auth()->user()->name)[0] }}</b></li>
          <li class="nav-item mx-1">
            <a class="btn btn-secondary opacity-50" href="{{ url('/dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
                    @csrf
              <button class="btn btn-secondary opacity-25">Logout</button>
          </form>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
        @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endif
          @endauth
        @endif
       </ul>
    </div>
  </div>
</nav>