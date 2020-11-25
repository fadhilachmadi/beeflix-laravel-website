
    {{-- @if (Route::has('login'))
  <div class="top-right links">
      @auth
          <a href="{{ url('/home') }}">Home</a>
      @else
          <a href="{{ route('login') }}">Login</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}">Register</a>
          @endif
      @endauth
  </div>
@endif --}}
  
<div class="title-container">

  <div class ="btn-group">
      <a href="javascript:history.back()" 
        class="btn btn-secondary"> 
        <i class="arrow left"></i>   
        KEMBALI
      </a>

      @if (Route::has('login'))
        <div class="top-right links">
          @auth
            @if (Auth::user()->email == 'admin@gmail.com')
              <a href="{{ url('/admin') }}" 
                class="btn btn-light btn-outline-secondary">
                LIHAT SEMUA FILM
              </a>

              @else
              <a href="{{ url('/') }}" 
                class="btn btn-light btn-outline-secondary">
                LIHAT SEMUA FILM
              </a>

            @endif

            @else
              <a href="{{ url('/') }}" 
                class="btn btn-light btn-outline-secondary">
                LIHAT SEMUA FILM
              </a>
          @endauth
          
        </div>
      @endif

    </div>
  </div>

