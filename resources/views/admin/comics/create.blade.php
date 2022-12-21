@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Create a new comic</h1>
    <form action="{{route('comics.store')}}" method="post" class="card p-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="titolo fumetto" aria-describedby="titleHlper">
            <small id="titleHlper" class="text-muted">Add the comic title here</small>
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">comic Image</label>
            <input type="text" name="src" id="src" class="form-control" placeholder="immagine fumetto" aria-describedby="srcHlper">
            <small id="srcHlper" class="text-muted">Add the comic image here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="serie" aria-describedby="seriesHlper">
            <small id="seriesHlper" class="text-muted">Add the comic type here</small>
        </div>
        <div class="mb-3">
            <label for="prezzo" class="form-label">prezzo</label>
            <input type="text" name="prezzo" id="prezzo" class="form-control" placeholder="prezzo" aria-describedby="prezzoHlper">
            <small id="prezzoHlper" class="text-muted">Add the comic prezzo here</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="tipo di fumetto" aria-describedby="typeHlper">
            <small id="typeHlper" class="text-muted">Add the product type here</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">comic sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Linguine corte" aria-describedby="sale_dateHlper">
            <small id="sale_dateHlper" class="text-muted">Add the comic sale date here</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection