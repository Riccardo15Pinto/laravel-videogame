@extends('layouts.app')

@section('title', $publisher->name_company)

@section('content')
    <h1>{{ $publisher->name_company }}</h1>
    <div class="showContent">

    </div>
@endsection
