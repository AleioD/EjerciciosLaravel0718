@extends('home')

@section('titleHome')
  {{'Detalle de Película'}}
@endsection

@section('css')
  {{'/css/detallePelicula.css'}}
@endsection

@section('bodyHome')
  @if (isset($pelicula))
    Titulo:  {{ $pelicula[0] }} Rating: {{ $pelicula[1] }}
  @else
    {{$error}}
  @endif
@endsection
