@extends('layouts.master')

@section('content')
<form action="{{ url ('updatePerso', [$finds->id]) }}" method="POST" id="mt-form">
    @csrf
    <div class="col-12">
        <label>Nom personnel:</label>
        <input type="text" value="{{$finds->nom}}" class="form-control champ @error('nom') is-invalid @enderror" name="nom" require>
    </div>
    @error('nom')
    <strong class="text-danger">{{$errors->first('nom')}}</strong>
    @enderror

    <div class="col-12 mt-2">
        <label>Prénom personnel:</label>
        <input type="text" value="{{$finds->prenom}}" class="form-control champ @error('prenom') is-invalid @enderror" name="prenom">
    </div>
    @error('prenom')
    <strong class="text-danger">{{$errors->first('prenom')}}</strong>
    @enderror

    <div class="modal-footer">
        <button type="submit" class="btn btn-info mr-3">Modifier</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
</form>
@endsection
