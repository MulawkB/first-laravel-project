@extends('layouts.app')
@section('title' , 'Accueil')
@section('content')
    <h2>Bienvenue sur le site de {{ $name }} !</h2>
    @foreach ($titles as $title)
    <x-article :title="$title['title']" :desc="$title['desc']">
        {{ $title['title'] }} : {{ $title['desc'] }}
    </x-article>
    @endforeach
@endsection