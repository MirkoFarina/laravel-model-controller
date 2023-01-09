@extends('layouts.main')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"> {{$movie->title}} </h5>
                      <h6 class="card-subtitle mb-2 text-muted"> {{$movie->original_title}} </h6>
                      <p class="card-text">
                        {{$movie->nationality}}
                      </p>
                      <span class="d-block">
                         DATA: {{$movie->date}}
                      </span>
                      <span>
                         VOTO: {{$movie->vote}}
                      </span>
                    </div>
                  </div>
            </div>
        </div>
        <a class="btn btn-primary my-5" href="{{route('home')}}"> <-- INDIETRO </a>
    </div>
@endsection
