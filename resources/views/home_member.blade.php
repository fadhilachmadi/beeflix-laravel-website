<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/home.css">

    <title>Beeflix</title>
</head>

<body class="bg-darkblue">

  @if (Route::has('login'))
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
@endif

  <header>
    @include('includes.header');
  </header>

  <div>
    <form class="form-inline"  method="get">
      <div class="form-group">
        <input type="text"
          class="form-control" style="width: 10vw"  name="search" id="" placeholder="Search Here (title / genre)">
          <button type="submit" class="btn bg-primaryDark">Search</button>
      </div>
    </form>
  </div>

     
  <div class="container-fluid bg-secondary container-main-custome">
    <div class="container-white-custome bg-light">
      <div  class="container-movie-custome"  >
          <h2 style="color: #EBCC2A">Daftar film</h2>
          @foreach ($movies as $movie1)
            <div class="card card-custome">

              <img class="card-img-top" 
                src="{{ $movie1->photo }}" 
                alt="Card image" 
                style="width:100%; height:25vw">

              <div class="card-body" style="padding: 15px 0px 0px 0px">
                
                <h4 class="card-title" style="text-align: center">
                  {{ $movie1->title }}
                </h4>

                <div class="btn-group btn-custom" >
                  <form  class="btn-custom" action="{{ url('member/movie/'.$movie1->title) }}">
                      <button
                        type="submit"
                        class="btn btn-primary btn-custom">
                        Lihat
                      </button>
                    </form>

                </div>

              </div>
            </div> 
          @endforeach

          <hr class="bg-white"/>
          
        {{-- @endforeach --}}
      </div>
    </div>
  </div>
  
</body>

</html>
