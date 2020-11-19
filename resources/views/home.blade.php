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

  <header>
    @include('includes.header');
  </header>
     
  <div class="container-fluid bg-secondary container-main-custome">
    <div class="container-white-custome bg-light">
      <div  class="container-movie-custome"  >
        @foreach ($genres as $genre)
          <h2 style="color: #EBCC2A">{{$genre->name}}</h2>
          @foreach ($genre->movie as $movie1)
            <div class="card card-custome">

              <img class="card-img-top" 
                src="{{ $movie1->photo }}" 
                alt="Card image" 
                style="width:100%; height:25vw">

              <div class="card-body" style="padding: 15px 0px 0px 0px">
                <h4 class="card-title" style="text-align: center">
                  {{ $movie1->title }}
                </h4>

                <a href="{{ url('movie/'.$movie1->title) }}" 
                  class="btn btn-primary btn-custom">
                  LIHAT FILM
                </a>

              </div>
            </div> 
          @endforeach

          <hr class="bg-white"/>
          
        @endforeach
      </div>
    </div>
  </div>
  
</body>

</html>
