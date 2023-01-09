@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="cards">
                        <div class="cards-body">
                            <h1 class="cards-title">{{ $movie->title }}</h1>
                            <p class="cards-text">{{ $movie->original_title }}</p>
                            <p class="cards-text">{{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


{{-- "id" => 2
"title" => "Via Col Vento"
"original_title" => "Gone With The Wind"
"nationality" => "american"
"date" => "1939-12-15"
"vote" => 8.6 --}}
