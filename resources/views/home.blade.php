@extends('layouts.main')


@section('content')
    <div class="container">
        <h1>
            BENVENUTO NEL NOSTRO SITO STREAMING
        </h1>
        <div class="row">
            @foreach ($movies as $movie )
            <div class="col-4 py-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"> {{$movie->title}} </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a class="text-primary" href=" {{route('descriptionMovie', $movie->id)}} ">
                        MORE DESCRIPTION
                      </a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
