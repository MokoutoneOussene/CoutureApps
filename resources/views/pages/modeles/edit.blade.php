@extends('layouts.master')

@section('content')
<form action="{{ url ('updateModele', [$finds->id]) }}" method="POST" id="mt-form" enctype="multipart/form-data">
    @csrf
    <div class="col-12 mb-3">
        <label>Nom modele:</label>
        <input type="text" value="{{$finds->nom_modele}}" class="form-control champ @error('nom_modele') is-invalid @enderror" name="nom_modele" require>
    </div>
    @error('nom_modele')
    <strong class="text-danger">{{$errors->first('nom_modele')}}</strong>
    @enderror

    <div class="col-12 mb-3">
        <label>Image modele:</label>
        <input type="file" value="{{$finds->img}}" class="form-control champ @error('img') is-invalid @enderror" name="img">
    </div>
    @error('img')
    <strong class="text-danger">{{$errors->first('img')}}</strong>
    @enderror

    <div class="row col-12 mt-4 d-flex">
        <div class="col-12">
            <button type="submit" class="btn btn-info mr-3">Enregistrer</button>
            <button type="reset" class="btn btn-secondary">Annuler</button>
        </div>
    </div>
</form>
@endsection
