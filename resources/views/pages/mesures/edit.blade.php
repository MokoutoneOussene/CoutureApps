@extends('layouts.master')

@section('content')
<form action="{{ url ('updateMesure', [$modif->id]) }}" method="POST" id="mt-form">
    @csrf
    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-6">
            <label>Nom client:</label>
            <select name="id_client" class="form-control champ @error('id_client') is-invalid @enderror" readonly>
                @foreach($clients as $client)
                <option value="{{$client->id}}">{{$modif->Client->nom}} {{$modif->Client->prenom}}</option>
                @endforeach
            </select>
        </div>
        @error('id_client')
        <strong class="text-danger">{{$errors->first('id_client')}}</strong>
        @enderror

        <div class="col-6">
            <label>Date:</label>
            <input type="date" value="{{$modif->date}}" class="form-control champ @error('date') is-invalid @enderror" name="date" value="{{date('Y-m-d')}}" readonly>
            @error('date')
            <strong class="text-danger">{{$errors->first('date')}}</strong>
            @enderror
        </div>
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-4">
            <label>Epaule:</label>
            <input type="number" value="{{$modif->epaule}}" class="form-control champ @error('epaule') is-invalid @enderror" name="epaule">
            @error('epaule')
            <strong class="text-danger">{{$errors->first('epaule')}}</strong>
            @enderror
        </div>
        <div class="col-4">
            <label>Poitrine:</label>
            <input type="number" value="{{$modif->poitrine}}" class="form-control champ @error('poitrine') is-invalid @enderror" name="poitrine">
        </div>
        @error('poitrine')
        <strong class="text-danger">{{$errors->first('poitrine')}}</strong>
        @enderror
        <div class="col-4">
            <label>L manche:</label>
            <input type="number" value="{{$modif->lng_manche}}" class="form-control champ @error('lng_manche') is-invalid @enderror" name="lng_manche">
        </div>
        @error('lng_manche')
        <strong class="text-danger">{{$errors->first('lng_manche')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-4">
            <label>T manche:</label>
            <input type="number" value="{{$modif->tour_manche}}" class="form-control champ @error('tour_manche') is-invalid @enderror" name="tour_manche">
            @error('tour_manche')
            <strong class="text-danger">{{$errors->first('tour_manche')}}</strong>
            @enderror
        </div>
        <div class="col-4">
            <label>L chemise:</label>
            <input type="number" value="{{$modif->lng_chemise}}" class="form-control champ @error('lng_chemise') is-invalid @enderror" name="lng_chemise">
        </div>
        @error('lng_chemise')
        <strong class="text-danger">{{$errors->first('lng_chemise')}}</strong>
        @enderror
        <div class="col-4">
            <label>Ceinture:</label>
            <input type="number" value="{{$modif->ceinture}}" class="form-control champ @error('ceinture') is-invalid @enderror" name="ceinture">
        </div>
        @error('ceinture')
        <strong class="text-danger">{{$errors->first('ceinture')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-4">
            <label>Bassin:</label>
            <input type="number" value="{{$modif->bassin}}" class="form-control champ @error('bassin') is-invalid @enderror" name="bassin">
            @error('bassin')
            <strong class="text-danger">{{$errors->first('bassin')}}</strong>
            @enderror
        </div>
        <div class="col-4">
            <label>Cuisse:</label>
            <input type="number" value="{{$modif->cuisse}}" class="form-control champ @error('cuisse') is-invalid @enderror" name="cuisse">
        </div>
        @error('cuisse')
        <strong class="text-danger">{{$errors->first('cuisse')}}</strong>
        @enderror
        <div class="col-4">
            <label>Poignet:</label>
            <input type="number" value="{{$modif->poignet}}" class="form-control champ @error('poignet') is-invalid @enderror" name="poignet">
        </div>
        @error('poignet')
        <strong class="text-danger">{{$errors->first('poignet')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-4">
            <label>L pantalon:</label>
            <input type="number" value="{{$modif->lng_pantalon}}" class="form-control champ @error('lng_pantalon') is-invalid @enderror" name="lng_pantalon">
            @error('lng_pantalon')
            <strong class="text-danger">{{$errors->first('lng_pantalon')}}</strong>
            @enderror
        </div>
        <div class="col-4">
            <label>Tour taille:</label>
            <input type="number" value="{{$modif->tour_taille}}" class="form-control champ @error('tour_taille') is-invalid @enderror" name="tour_taille">
        </div>
        @error('tour_taille')
        <strong class="text-danger">{{$errors->first('tour_taille')}}</strong>
        @enderror
        <div class="col-4">
            <label>Long taille:</label>
            <input type="number" value="{{$modif->long_taille}}" class="form-control champ @error('long_taille') is-invalid @enderror" name="long_taille">
        </div>
        @error('long_taille')
        <strong class="text-danger">{{$errors->first('long_taille')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-4">
            <label>Genoux:</label>
            <input type="number" value="{{$modif->genoux}}" class="form-control champ @error('genoux') is-invalid @enderror" name="genoux">
            @error('genoux')
            <strong class="text-danger">{{$errors->first('genoux')}}</strong>
            @enderror
        </div>
        <div class="col-4">
            <label>Bas:</label>
            <input type="number" value="{{$modif->bas}}" class="form-control champ @error('bas') is-invalid @enderror" name="bas">
        </div>
        @error('bas')
        <strong class="text-danger">{{$errors->first('bas')}}</strong>
        @enderror
        <div class="col-4">
            <label>Col:</label>
            <input type="number" value="{{$modif->col}}" class="form-control champ @error('col') is-invalid @enderror" name="col">
        </div>
        @error('col')
        <strong class="text-danger">{{$errors->first('col')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-4">
            <label>Long camisole:</label>
            <input type="number" value="{{$modif->lng_camisole}}" class="form-control champ @error('lng_camisole') is-invalid @enderror" name="lng_camisole">
            @error('lng_camisole')
            <strong class="text-danger">{{$errors->first('lng_camisole')}}</strong>
            @enderror
        </div>
        <div class="col-4">
            <label>Long jupe:</label>
            <input type="number" value="{{$modif->log_jupe}}" class="form-control champ @error('log_jupe') is-invalid @enderror" name="log_jupe">
        </div>
        @error('log_jupe')
        <strong class="text-danger">{{$errors->first('log_jupe')}}</strong>
        @enderror
        <div class="col-4">
            <label>Pince:</label>
            <input type="number" value="{{$modif->pince}}" class="form-control champ @error('pince') is-invalid @enderror" name="pince">
        </div>
        @error('pince')
        <strong class="text-danger">{{$errors->first('pince')}}</strong>
        @enderror
    </div>

    <div class="col-12 mb-3 d-flex justify-content-center">
        <div class="col-4">
            <label>Long robe:</label>
            <input type="number" value="{{$modif->long_robe}}" class="form-control champ @error('long_robe') is-invalid @enderror" name="long_robe">
            @error('long_robe')
            <strong class="text-danger">{{$errors->first('long_robe')}}</strong>
            @enderror
        </div>
        <div class="col-4">
            <label>Dos:</label>
            <input type="number" value="{{$modif->dos}}" class="form-control champ @error('dos') is-invalid @enderror" name="dos">
        </div>
        @error('dos')
        <strong class="text-danger">{{$errors->first('dos')}}</strong>
        @enderror
        <div class="col-4">
            <label>Frappe:</label>
            <input type="number" value="{{$modif->frp}}" class="form-control champ @error('frp') is-invalid @enderror" name="frp">
        </div>
        @error('frp')
        <strong class="text-danger">{{$errors->first('frp')}}</strong>
        @enderror
    </div>

    <div class="col-12 mt-4 mb-3 d-flex">
        <div class="col-12">
            <button type="submit" class="btn btn-info mr-3">Enregistrer</button>
            <button type="reset" class="btn btn-secondary">Annuler</button>
        </div>
    </div>
</form>
@endsection
