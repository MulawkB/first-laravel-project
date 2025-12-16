@extends('layouts.app')
@section('title' , 'Accueil')
@section('content')
    <h2>Bienvenue sur le site de {{ $name }} !</h2>
    @foreach ($titles as $title)
    <li>
        {{ $title['title'] }} : {{ $title['desc'] }}
    </li>
    @endforeach
@endsection