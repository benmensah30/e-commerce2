@extends('layout.base')

@section('content')
    <h1>Liste produits</h1>
    <a href="{{ route('product.create') }}" class="btn-primary">Créer un produit</a>
@endsection
