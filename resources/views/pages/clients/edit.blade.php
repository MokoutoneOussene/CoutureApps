@extends('layouts.master')

@section('content')
<form action="{{ url ('updateClient', [$finds->id]) }}" method="POST" id="mt-form">
    @csrf
    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Nom client:</label>
            <input type="text" value="{{$finds->nom}}" class="form-control champ @error('nom') is-invalid @enderror" name="nom" require>
        </div>
        @error('nom')
        <strong class="text-danger">{{$errors->first('nom')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Prénom client:</label>
            <input type="text" value="{{$finds->prenom}}" class="form-control champ @error('prenom') is-invalid @enderror" name="prenom">
        </div>
        @error('prenom')
        <strong class="text-danger">{{$errors->first('prenom')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Sexe:</label>
            <select class="form-control champ @error('sexe') is-invalid @enderror" name="sexe" id="">
                <option value="{{$finds->sexe}}"> {{$finds->sexe}}</option>
                <option value="homme"> Homme</option>
                <option value="femme"> Femme</option>
            </select>
            @error('sexe')
            <strong class="text-danger">{{$errors->first('sexe')}}</strong>
            @enderror
        </div>
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Téléphone:</label>
            <input type="number" value="{{$finds->telephone}}" class="form-control champ @error('telephone') is-invalid @enderror" name="telephone">
        </div>
        @error('telephone')
        <strong class="text-danger">{{$errors->first('telephone')}}</strong>
        @enderror
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-info mr-3">Modifier</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
</form>
@endsection
