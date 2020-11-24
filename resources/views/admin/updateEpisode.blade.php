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

  <div class="container" >
    <form class="mb-4"  action="/updateEpisode/{{$episode->id}}" method="POST" enctype="">
      @csrf
      @method('PATCH');
      <h1 class="text-center mb-4" style="color: white">Edit Episode</h1>
      

      <label class="mt-3"  for="" style="color: white">Episode {{ $episode->episode }}</label>
      <input type="text" class="form-control" value="{{$episode->title}}" name="episode_title">

      <button type="submit" name="button"  id="btn-submit" class="btn btn-primary mt-3" value="btnUpdateMovie">Submit</button>

    </form>
  </div>

</body>

</html>
