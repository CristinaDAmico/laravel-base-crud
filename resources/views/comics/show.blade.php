@extends('layouts.main')

@section('content')

    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <h3>{{ $comic->series }}</h3>
        <h4>{{ $comic->sale_date }}</h4>

        <div class="mb-5">
            <span class="badge bg-primary">{{ $comic->price}} €</span>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-6">
                {!! $comic->description !!}
            </div>
        </div>

        <a href="{{ route('comics.index') }}">Back to archive</a>
    </div>
    
@endsection