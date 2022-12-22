@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="mb-4">COMICS</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 g-5">

        @forelse($comics as $comic)
        <div class="col">
            <div class="comic">
                <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
                <span>{{ $comic['title']}}</span>
            </div>
        </div>
        @empty
        <div class="col">
            <p>No comic to show yet!</p>
        </div>
        @endforelse
    </div>

</div>
@endsection