@extends('layouts.master')

@section('content')
<form action="{{ url ('updateRdv', [$finds->id]) }}" method="POST" id="mt-form">
    @csrf
    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Nom client:</label>
            <select name="id_client" class="form-control champ @error('id_client') is-invalid @enderror" id="">
                @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                @endforeach
            </select>
        </div>
        @error('id_client')
        <strong class="text-danger">{{$errors->first('id_client')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Nom modele:</label>
            <select name="id_modele" class="form-control champ @error('id_modele') is-invalid @enderror" id="">
                @foreach($modeles as $client)
                <option value="{{$client->id}}">{{$client->nom_modele}}</option>
                @endforeach
            </select>
        </div>
        @error('id_modele')
        <strong class="text-danger">{{$errors->first('id_modele')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Detail :</label>
            <textarea class="form-control champ @error('motif') is-invalid @enderror" name="motif" cols="30" rows="3">{{$finds->motif}}</textarea>
        </div>
        @error('motif')
        <strong class="text-danger">{{$errors->first('motif')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Date:</label>
            <input type="date" class="form-control champ @error('date') is-invalid @enderror" name="date">
        </div>
        @error('date')
        <strong class="text-danger">{{$errors->first('date')}}</strong>
        @enderror
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-info mr-3">Enregistrer</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
</form>
@endsection
