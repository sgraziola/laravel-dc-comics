@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Edit comic: {{$comic->title}}</h1>
    @include('partials.error')

    <form action="{{route('comics.update', $comic->id)}}" method="post" class="card p-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="titolo fumetto" aria-describedby="titleHlper" value="{{$comic->title}}">
            <small id="titleHlper" class="text-muted">Add the comic title here</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">comic Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="immagine fumetto" aria-describedby="thumbHlper" value="{{$comic->thumb}}">
            <small id="thumbHlper" class="text-muted">Add the comic image here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="serie" aria-describedby="seriesHlper" value="{{$comic->series}}">
            <small id="seriesHlper" class="text-muted">Add the comic type here</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">prezzo</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="price" aria-describedby="priceHlper" value="{{$comic->price}}">
            <small id="priceHlper" class="text-muted">Add the comic prezzo here</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="tipo di fumetto" aria-describedby="typeHlper" value="{{$comic->type}}">
            <small id="typeHlper" class="text-muted">Add the product type here</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">comic sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="sale date" aria-describedby="sale_dateHlper" value="{{$comic->sale_date}}">
            <small id="sale_dateHlper" class="text-muted">Add the comic sale date here</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection