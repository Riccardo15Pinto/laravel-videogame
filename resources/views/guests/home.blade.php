@extends('layouts.app')

@section('title', 'videogames')

@section('content')
    <header>
        <div class="text-center">
            <h1 class="my-4">Welcome Videogamers!</h1>
            <h3>The best Videogames website</h3>
        </div>
    </header>

    <div class="row">
        @foreach ($videogames as $videogame)
            <div class="col-md-4 my-4">
                <div class="card mb-4 h-100 d-flex flex-column">
                    <img src="{{ $videogame->img_path }}" class="card-img-top" alt="{{ $videogame->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $videogame->title }}</h5>
                        <p class="card-text">{{ $videogame->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Data di uscita:</strong> {{ $videogame->release_date }}</li>
                        <li class="list-group-item"><strong>Età minima:</strong> {{ $videogame->min_age }} anni</li>
                    </ul>
                    <div class="card-footer d-flex">
                        <a href="{{ route('admin.videogames.show', $videogame) }}" class="btn btn-primary ms-2">Go to
                            the videogame</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
