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

  <div class="container mt-5" >
    <form class="mb-4"  action="/createEpisode" method="POST" enctype="multipart/form-data">
      @csrf

      <h1 class="text-center mb-4" style="color: white">Tambah Episode</h1>

      <div class="form-group">
        <label for="" style="color: white">Id Film</label>
        <input type="text" class="form-control" name="movie_id" value="{{$movieId}}">
      </div>

      <div class="form-group">
        <label for="" style="color: white">Nomor Episode (1, 2, 3, ...)</label>
        <input type="number" class="form-control" name="episodes_episode" >
      </div>

      <div class="form-group">
        <label for="" style="color: white">Judul Episode</label>
        <input type="text" class="form-control" name="episodes_title" >
      </div>

      <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Tambahkan</button>
    </form>
  </div>

</body>

</html>
