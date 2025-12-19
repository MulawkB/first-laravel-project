@extends('layouts.app')
@section('title', 'Article')
@section('content')
    <x-article :title="$article['title']" :desc="$article['desc']"/>
@endsection
