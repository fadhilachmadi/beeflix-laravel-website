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


  @include('headers.navbar_guest')
  @include('headers.header')


{{-- <div class="container mt-4 mb-4">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <h1 class="text-center m-4" style="color: white">Tambah Film</h1>


          <form class="mt-4"  action="/addEpisode" method="POST" enctype="multipart/form-data">
            @csrf
            
            

            <div class="form-group mb-4 mt-4 row">
              <label for="name" class="col-md-4 col-form-label" style="color: white">{{ __('Judul') }}</label>
              
              <div class="col-md-6">
                <input type="text" class="form-control"  name="movie_title">
              </div>

            </div>

            <div class="form-group mb-4 mt-4 row">
              <label for="email" class="col-md-4 col-form-label" style="color: white">{{ __('Deskripsi') }}</label>

              <div class="col-md-6">
                <input type="text" class="form-control" name="movie_description">
              </div>

            </div>

            <div class="form-group mb-4 mt-4 row">
              <label for="password" class="col-md-4 col-form-label" style="color: white">{{ __('Rating') }}</label>

              <div class="col-md-6">
                <input type="number" class="form-control" name="movie_rating" >
              </div>

            </div>

            <div class="form-group mb-4 mt-4 row">
              <label for="password" class="col-md-4 col-form-label" style="color: white">{{ __('Genre') }}</label>

              <div class="col-md-6">
                <select name="genre_id" id="" class="form-control">
                  @foreach ($genres as $genre)
                  <option value=""></option>
                    <option value="{{$genre->id }}">{{$genre->name}}</option>
                  @endforeach
                </select>
              </div>

            </div>

            <div class="form-group mb-4 mt-4 row">
              <label for="password" class="col-md-4 col-form-label" style="color: white">{{ __('Photo') }}</label>

              <div class="col-md-6">
                <input type="file"  class="form-control"  name="movie_photo">
              </div>

            </div>
            


            <div class="form-group mb-4 mt-4 row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Tambah Episode') }}
                  </button>
              </div>
            </div>

          </form>


    </div>
  </div>
</div> --}}



  <div class="container mt-4" >
    <form class="mb-4 p-4"  action="/addEpisode" method="POST" enctype="multipart/form-data">
      @csrf
      @method('POST');
      <h1 class="text-center mb-4" style="color: white">Tambah Film</h1>
      <div class="form-group">
        <label for="" style="color: white">Judul</label>
        <input type="text" class="form-control"  name="movie_title">
      </div>
      <div class="form-group">
        <label for=""  style="color: white">Deskripsi</label>
        <input type="text" class="form-control" name="movie_description">
      </div>
      <div class="form-group">
        <label for="" style="color: white">Rating</label>
        <input type="number" class="form-control" name="movie_rating" >
      </div>
      <div class="form-group">
        <label for="" style="color: white">Genre</label>
        <select name="genre_id" id="" class="form-control">
          @foreach ($genres as $genre)
          <option value=""></option>
            <option value="{{$genre->id }}">{{$genre->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="image" style="color: white">Masukkan Foto</label>
        <input type="file"  class="form-control"  name="movie_photo">
      </div>

      <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Tambah Episode</button>
    </form>
  </div>

</body>

</html>
