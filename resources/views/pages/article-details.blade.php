@extends('layouts.app')

@section('title', 'Détails de l\'article ' . $id)

@section('content')
    <h2>Article portant l'identifiant {{ $id }}</h2>
@endsection
