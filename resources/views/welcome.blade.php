@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<h1>TITULO QUALQUER</h1>
@if (1 > 5)
    <p>A CONDIÇÃO FOI SATISFEITA</p>        
@endif

<p>{{$nome}}</p>

@if ($nome == "Mat-tomate")
    <p>nome do mat</p> 
@elseif ($nome == "Thassius")
    <p>Meu nome é {{$nome}} e minha idade é {{$idade}}</p>           
@endif

@for ($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }}</p>            
@endfor

@php
    $name = "Joao";
    echo $name;
@endphp
@endsection

