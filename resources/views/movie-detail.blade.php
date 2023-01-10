@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="cards">
                <div class="cards-body">
                    <h1 class="text-white">{{ $movie->title }}</h1>
                    <p class="text-white">original title: {{ $movie->original_title }}</p>
                    <p class="cards-text">nationality: {{ $movie->nationality }}</p>
                    <p class="cards-text">date: {{ $movie->date }}</p>
                    <p class="cards-text">vote: {{ $movie->vote }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- "id" => 2
"title" => "Via Col Vento"
"original_title" => "Gone With The Wind"
"nationality" => "american"
"date" => "1939-12-15"
"vote" => 8.6 --}}
