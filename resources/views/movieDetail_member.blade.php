<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/movieDetail.css">

    <title>{{$detail->title}}</title>
</head>

<body class="bg-darkblue">
    <header>
        @include('includes.header');
    </header>


    <div class="container-flud container-main-custom bg-secondary">
        <div class="d-flex bg-blue" style="padding: 30px 30px 20px 20px">

            <div  style="width:250px">
                {{-- <div class="card-body" style="padding: 0; height: 70%">
                    --}}
                    <img class="card-img" src="{{ $detail->photo }}" alt="Card image" style="width:100%; height:auto">
                    {{--
                </div> --}}
            </div>

            <div class="container-custome">
                <h3 class="font-weight-bold" style="color: #EBCC2A">{{ $detail->title }}</h3>
                <h5  style="margin-top: 10px; color: #919CA7">Rating : {{ $detail->rating }}/5</h5>
                <h5 class="text-white"  style="margin-top: 10px">{{ $detail->description }}</h5>
                <h5 class="text-white"  style="margin-top: 100px">Kategori : <a
                        href="{{ url('genre/' . $detail->genre->name) }}">{{ $detail->genre->name }}</a></h5>
            </div>
            <div class="table-container-custom">
                <table class=" table table-striped table-bordered table-custome">
                    <thead>
                        <tr>
                            <th class="text-white" >Episode</th>
                            <th class="text-white" >Title</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($episodes as $episode)
                            <tr>

                                <td class="text-white" >episode {{ $episode->episode }}</td>
                                <td class="text-white" >{{ $episode->title }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $episodes->render() }}
            </div>

        </div>
    </div>


</body>

</html>
