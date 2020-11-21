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
    <form class="mb-4"  action="/update/{{$movie->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH');
      <h1 class="text-center mb-4" style="color: white">Edit Film</h1>
      <div class="form-group">
        <label for="" style="color: white">Title</label>
      <input type="text" class="form-control" value="{{$movie->title}}" name="movie_title">
      </div>
      <div class="form-group">
        <label for=""  style="color: white">Description</label>
        <input type="text" class="form-control" value="{{$movie->description}}" name="movie_description">
      </div>
      <div class="form-group">
        <label for="" style="color: white">Rating</label>
        <input type="number" class="form-control" value="{{$movie->rating}}" name="movie_rating">
      </div>
      <div class="form-group">
        <label for="" style="color: white">Genre</label>
        <select value="{{$movie->genre_id}}" id="" class="form-control" name="genre_id">
          @foreach ($genres as $genre)
            <option value="{{$genre->id }}">{{$genre->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="image" style="color: white">Choose Image</label>
        <input type="file"  class="form-control"  value="{{$movie->photo}}" name="movie_photo">
      </div>
      <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Ubah Film</button>
    </form>
  </div>

</body>

</html>
