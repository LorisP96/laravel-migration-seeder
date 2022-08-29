@extends('layouts.app')

@section('home')
    <h1>Prossimi Viaggi</h1>
    
    @foreach ($travels as $travel)
    <h2>{{ $travel->city }}</h2>
    <div>Partenza il {{ $travel->date }}</div>
    <div>Adulti: {{ $travel->number_of_traveler }}</div>
    @endforeach
    
@endsection