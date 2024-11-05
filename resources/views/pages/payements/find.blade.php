@extends('layouts.master')

@section('content')
<div class="col-12">
<h4 class="text-center text-danger mb-4">RATE STYLE</h4>
    <div class="col-12 d-flex mb-4">
        <div class="col-4">
        <h5>Rue : 29 - Dagnoen - en face du juvenant saint camille fille</h5>
            <p>Tél : 76838737 / 79310587 / 62003939 </p>
        </div>

        <div class="col-4">
            <h4>Reçu de payement N° {{$finds->id}}</h4>
        </div>

        <div class="col-4">
            <img class="w-50" src="{{asset($finds->Modele->img)}}" alt="">
        </div>
    </div>
    <div class="col-12 d-flex mb-4">
        <div class="col-6">
            <h4>Nom du client : <span class="text-danger">{{$finds->Client->nom}} {{$finds->Client->prenom}}</span></h4>
        </div>
        <div class="col-6">
            <h4>Date du payement : <span class="text-danger">{{$finds->date}}</span></h4>
        </div>
    </div>

    <div class="col-12 d-flex mb-4 pt-4" style="border-bottom: 1px solid black; border-top: 1px solid black;">
        <div class="col-6">
            <h4>Montant total :</h4>
        </div>
        <div class="col-6">
            <h5 class="text-danger">{{$finds->somme}} FCFA</h5>
        </div>
    </div>

    <div class="col-12 d-flex mb-4" style="border-bottom: 1px solid black;">
        <div class="col-6">
            <h4>Avance :</h4>
        </div>
        <div class="col-6">
            <h5 class="text-danger">{{$finds->avance}} FCFA</h5>
        </div>
    </div>

    <div class="col-12 d-flex mb-4" style="border-bottom: 1px solid black;">
        <div class="col-6">
            <h4>Reste à payer :</h4>
        </div>
        <div class="col-6">
            <h5 class="text-danger">{{$finds->reste}} FCFA</h5>
        </div>
    </div>

    <button type="button" class="btn btn-info m-5">Imprimer</button>
</div>
@endsection
