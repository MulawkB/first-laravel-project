@extends('layouts.app')
@section('title' , 'Accueil')
@section('content')
    <h2>Bienvenue sur le site de {{ $name }} !</h2>
    @foreach ($articles as $article)
    @if ($loop->last)
        @break
    @endif
    <a href="{{ route('article.show', ['id' => $article['id']]) }}">
    <x-article :title="$article['title']" :desc="$article['desc']"/>
    @endforeach
@endsection