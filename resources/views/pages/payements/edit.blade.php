@extends('layouts.master')

@section('content')

<div class="col-12 d-flex mb-4" style="border-bottom: 1px solid black;">
    <div class="col-6">
        <h4>Nom du client :</h4>
        <h5 class="text-danger">{{$finds->Client->nom}} {{$finds->Client->prenom}}</h5>
    </div>
    <div class="col-6">
        <h4>Nom du modele:</h4>
        <h5 class="text-danger">{{$finds->Modele->nom_modele}}</h5>
    </div>
</div>

<form action="{{ url ('updatePayement', [$finds->id]) }}" method="POST" id="mt-form">
    @csrf

    <input type="text" value="{{$finds->id_client}}" name="id_client" class="champ @error('id_client') is-invalid @enderror" hidden>
    <input type="text" value="{{$finds->id_modele}}" name="id_modele" class="champ @error('id_modele') is-invalid @enderror" hidden>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Montant total:</label>
            <input type="number" value="{{$finds->somme}}" class="form-control champ @error('somme') is-invalid @enderror" name="somme" readonly>
            @error('somme')
            <strong class="text-danger">{{$errors->first('somme')}}</strong>
            @enderror
        </div>
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Faire une avance :</label>
            <input type="number" class="form-control champ @error('avance') is-invalid @enderror" name="avance">
        </div>
        @error('avance')
        <strong class="text-danger">{{$errors->first('avance')}}</strong>
        @enderror
    </div>


    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Motif :</label>
            <textarea class="form-control  champ @error('motif') is-invalid @enderror" name="motif" id="" cols="30" rows="3">{{$finds->motif}}</textarea>
        </div>
        @error('motif')
        <strong class="text-danger">{{$errors->first('motif')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Reste à payer :</label>
            <input type="number" value="{{$finds->reste}}" class="form-control champ @error('reste') is-invalid @enderror" name="reste" readonly>
        </div>
        @error('reste')
        <strong class="text-danger">{{$errors->first('reste')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Date :</label>
            <input type="date" class="form-control champ @error('date') is-invalid @enderror" name="date" value="{{date('Y-m-d')}}" readonly>
        </div>
        @error('date')
        <strong class="text-danger">{{$errors->first('date')}}</strong>
        @enderror
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-info mr-3">Regler</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
</form>
</div>
@endsection
