@extends('layout.base')

@section('content')
    <div class="row">
        <div class="col-xl-4"></div>
        <div class="col-xl-4">
            <h1>Créer un produit </h1>
            @if ($message = Session::get('error'))

            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
                
            @endif
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="name">Nom du produit</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Saisir le nom du produit ici">

                <label for="price">Prix du produit</label>
                <input type="number" class="form-control" name="price" id="price" min="100" max="1000000" value="0">

                <label for="description">Description du produit</label>
                <textarea name="decription" id="description" placeholder="Saisir la description ici" class="form-control" rows="4" class="form-control"></textarea><br/>

                <label for="file">Iamage de couverture</label>
                <div>
                    <input type="file" name="file" id="file" placeholder="Insérer un fichier" class="form-control">
                </div>
                <br/>



                <button type="submit" class="btn btn-primary">Publier</button>
            </form>

        </div>
        <div class="col-xl-4">
    </div>
        
    </div>
@endsection
