@extends('layouts.app')

@section('title', 'Bienvenue')

@section('content')

<h2>Bienvenue sur le site de {{ $name }}</h2>

@forelse ($articles as $article)
<a href="/articles/{{ $article->id }}">
    <x-article :title="$article->title" :description="$article->description" />
</a>
@empty
<p>Aucun article disponible pour le moment</p>
@endforelse

@endsection