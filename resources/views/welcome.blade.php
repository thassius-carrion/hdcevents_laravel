@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<h1>TITULO QUALQUER</h1>

@foreach ($events as $event)
    <p> {{$event->title}} -- {{$event->description}}</p>
@endforeach

@endsection

