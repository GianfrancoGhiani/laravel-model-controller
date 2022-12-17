@extends('layout.app')

@section('body')
<h1 class="text-center">Movie List</h1>
    <div class="row row-cols-5 g-3">
    @forelse ($movies as $movie)

        <div class="col">
            <div class="card">
                <div class="card-img">
                    <img src="{{$movie->image}}" alt="{{$movie->title}} image">
                </div>
                <div class="details">
                    <div class="name-sec text-capitalize">titolo:</div>
                    <h3>{{$movie->title}}</h3>
                    @if ($movie->title != $movie->original_title)
                        <div class="name-sec text-capitalize">titolo originale:</div>
                        <h5>{{$movie->original_title}}</h5>
                    @endif
                    <div class="name-sec text-capitalize">voto:</div>
                    <h5>{{$movie->vote}}</h5>
                    <div class="name-sec text-capitalize">data uscita:</div>
                    <h5>{{$movie->date}}</h5>
                </div>
            </div>
        </div>
    @empty
        <div>Empty Movie Data</div>
    
    @endforelse

    </div>

@endsection