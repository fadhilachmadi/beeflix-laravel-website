<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/home.css">

    <title>{{$genreName}} Films</title>
</head>

<body class="bg-darkblue">

  @include('headers.navbar_guest')
  @include('headers.header')
  
  <div class="container-fluid  bg-secondary container-main-custome">
    <div class="container-white-custome bg-light">

      <div class="container-movie-custome">
        <h2 style="color: #EBCC2A">{{$genreName}}</h2>
        @foreach ($movies as $movie)
            <div class="card card-custome">
                <img class="card-img-top" src="{{ $movie->photo }}" alt="Card image" style="width:100%; height:25vw">
                <div class="card-body" style="padding: 15px 0px 0px 0px">
                    <h4 class="card-title" style="text-align: center">{{ $movie->title }}</h4>
                    <a href="{{ url('movie/'.$movie->title) }}" class="btn btn-primary btn-custom">LIHAT FILM</a>
                </div>
            </div>
        @endforeach
      </div>

    </div>

  </div>
  
</body>

</html>
