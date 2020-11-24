
  <div class="title-container">
    <h1 class="font-weight-bolder" style="color: #E1AF00">BeeFlix</h1>

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
              <a href="{{ url('/menu') }}" 
                class="btn btn-light btn-outline-secondary">
                LIHAT SEMUA FILM
              </a>
            @endif
          @endauth
      </div>
    @endif
      {{-- @if (Route::has('login'));

        @if (Auth::user()->email == 'admin@gmail.com')
        <a href="{{ url('/admin') }}" 
          class="btn btn-light btn-outline-secondary">
          LIHAT SEMUA FILM
        </a>
        @else
        <a href="{{ url('/menu') }}" 
          class="btn btn-light btn-outline-secondary">
          LIHAT SEMUA FILM
        </a>
      @endif
          
      @endif --}}



      
  </div>



  </div>

