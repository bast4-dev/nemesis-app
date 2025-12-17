@extends('layouts.app')

@section('title', 'Détails de l\'article n°' . $article->id)

@section('content')
     <x-article :title="$article->title" :description="$article->description"/>
@endsection
