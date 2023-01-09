@extends('layouts.main')


@section('content')
    <div class="container text-center text-danger">
        <h1> ERROR 404 || PAGE NOT FOUND </h1>
        <h2>
            {{ $exception->getMessage() }}
        </h2>
    </div>
@endsection
