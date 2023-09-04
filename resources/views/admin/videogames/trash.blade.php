@extends('layouts.app')

@section('title', 'trash')

@section('content')

    <div class="container">
        <div class="my-3">
            <h1>Cestino</h1>
            <div class="d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.videogames.index') }}" class="btn btn-primary">Torna alla Home</a>
            </div>
        </div>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Data di rilascio</th>
                    <th scope="col">Età minima</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videogames as $videogame)
                    <tr>
                        <th scope="row">{{ $videogame->id }}</th>
                        <td>{{ $videogame->title }}</td>
                        <td>{{ $videogame->release_date }}</td>
                        <td>{{ $videogame->min_age }}</td>
                        <td></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

{{-- @foreach ($videogames as $videogame)
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
            <a href="{{ route('admin.videogames.edit', $videogame) }}" class="btn btn-warning ms-2">Edit</a>
            <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                data-bs-target="#{{ $videogame->id }}">
                Delete
            </button>
            @include('admin.includes.modal_delete')
        </div>
    </div>
</div>
@endforeach --}}
