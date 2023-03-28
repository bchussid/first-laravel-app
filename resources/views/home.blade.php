@extends('layouts/main')
@section('content')
        <article>
@foreach($games as $game)
    @include('partials/_game', ['game'=> $game])
@endforeach
        </article>

@endsection

