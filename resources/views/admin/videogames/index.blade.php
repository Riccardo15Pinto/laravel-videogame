@extends('layouts.app')

@section('title', 'videogames')

@section('content')
    <header>
        <div class="text-center">
            <h1 class="my-4">videogames List</h1>
        </div>
        <div class="d-flex justify-content-end my-3">
            <a href="{{ route('admin.videogames.create') }}" class="btn btn-success ms-2">Create new videogame</a>
            <a href="{{ route('admin.videogames.trash') }}" class="btn btn-warning ms-2">Trash</a>
        </div>
    </header>


    <div class="indexContent">
        <table class="table mb-4">
            <thead>
                <tr>
                    <th scope="col" colspan="1" width="10%">Id</th>
                    <th scope="col" colspan="1" width="60%">Title</th>
                    <th scope="col" colspan="1" width="60%">Azienda</th>
                    <th scope="col" colspan="1" width="60%">Developer</th>
                    <th class="text-center" scope="col" colspan="1" width="30%">Tasks</th>
                </tr>
            </thead>
            <tbody>
                @forelse($videogames as $videogame)
                    <tr>
                        <td>{{ $videogame->id }}</td>
                        <td>{{ $videogame->title }}</td>
                        <td>{{ $videogame->publisher->name_company }}</td>
                        <td>{{ $videogame->developer->name }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-3">
                                <a href="{{ route('admin.videogames.show', $videogame) }}" class="btn btn-primary ms-2">Go
                                    to
                                    the videogame</a>
                                <a href="{{ route('admin.videogames.edit', $videogame) }}"
                                    class="btn btn-warning ms-2">Edit</a>
                                <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                                    data-bs-target="#{{ $videogame->id }}">
                                    Delete
                                </button>
                                @include('admin.includes.modal_delete')
                            </div>
                        </td>
                    </tr>
                @empty
                    <h3>No Videogames available at this moment...</h3>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
