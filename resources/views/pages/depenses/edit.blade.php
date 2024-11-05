@extends('layouts.master')

@section('content')
<form action="{{ url ('updateDeps', [$finds->id]) }}" method="POST" id="mt-form">
    @csrf
    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Nom personnel:</label>
            <select name="id_personnel" class="form-control champ @error('id_personnel') is-invalid @enderror" id="">
                @foreach($personnels as $perso)
                <option value="{{$perso->id}}">{{$perso->nom}} {{$perso->prenom}}</option>
                @endforeach
            </select>
        </div>
        @error('id_personnel')
        <strong class="text-danger">{{$errors->first('id_personnel')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Montant:</label>
            <input type="number" value="{{$finds->montant}}" class="form-control champ @error('montant') is-invalid @enderror" name="montant">
        </div>
        @error('montant')
        <strong class="text-danger">{{$errors->first('montant')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-12">
            <label>Description :</label>
            <textarea class="form-control champ @error('description') is-invalid @enderror" name="description" cols="30" rows="3">{{$finds->description}}</textarea>
        </div>
        @error('description')
        <strong class="text-danger">{{$errors->first('description')}}</strong>
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
        <button type="submit" class="btn btn-info mr-3">Modifier</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
</form>
@endsection
