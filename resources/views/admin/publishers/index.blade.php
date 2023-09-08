@extends('layouts.app')

@section('title', 'Publisher')

@section('content')
    <h1>Publishers</h1>
    <div class="indexContent">
        <table class="table mb-4">
            <thead>
                @if ($publishers->isNotEmpty())
                    <tr>
                        <th scope="col" colspan="1">#</th>
                        <th scope="col" colspan="1">Label</th>
                        <th class="text-center" scope="col" colspan="1">Tasks</th>
                    </tr>
                @endif
            </thead>
            <tbody>
                @forelse($publishers as $publisher)
                    <tr>
                        <td>{{ $publisher->id }}</td>
                        <td>{{ $publisher->name_company }}</td>
                        <td>
                            <div class="indexButtons d-flex justify-content-center gap-3">
                                <a class="btn btn-primary" href="{{ route('admin.publishers.show', $publisher->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a class="btn btn-warning" href="{{ route('admin.publishers.edit', $publisher->id) }}">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>
                                <form action="{{ route('admin.publishers.destroy', $publisher->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <div>No Publishers yet...</div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
