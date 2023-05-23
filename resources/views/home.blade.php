@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Home page</h1>
        <div class="card" style="width: 18rem;">
            @foreach ($movies as $movie)
                {{-- <img src="{{$movie->image}}" class="card-img-top" alt="..."> --}}
                <div class="card-body">
                <h3 class="card-text">{{$movie->title}}</h3>
                <h6 class="card-text">{{$movie->original_title}}</h6>
                <p class="card-text">{{$movie->nationality}}</p>
                <p class="card-text">{{$movie->date}}</p>
                <p class="card-text">{{$movie->vote}}</p>
                </div>
            @endforeach
          </div>
        {{-- <ul>
            @foreach ($movies as $movie)
                <li>{{$movie->title}}</li>
            @endforeach
        </ul> --}}
    </section>
@endsection
