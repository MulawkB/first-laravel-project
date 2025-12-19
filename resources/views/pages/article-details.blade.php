@extends('layouts.app')
@section('title', 'Article '. $article->title)
@section('content')
    <h2>{{ $article->title }}</h2>
    <span>{{$article->desc }}</span>
@endsection
