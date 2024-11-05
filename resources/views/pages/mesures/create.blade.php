@extends('layouts.master')

@section('content')
<h3 class="text-center mb-5 text-info">Enregistrement d'une mesure :</h3>

<!-- Large modal -->
<div class="d-flex justify-content-center mb-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
        Nouvelle mesure
    </button>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Enregistrement d'une mesure</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('gestion-mesures.store')}}" method="POST" id="mt-form">
                @csrf
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-6">
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
                    <div class="col-6">
                        <label>Date:</label>
                        <input type="date" class="form-control champ @error('date') is-invalid @enderror" name="date" value="{{date('Y-m-d')}}" readonly>
                        @error('date')
                        <strong class="text-danger">{{$errors->first('date')}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-4">
                        <label>Epaule:</label>
                        <input type="number" class="form-control champ @error('epaule') is-invalid @enderror" name="epaule">
                        @error('epaule')
                        <strong class="text-danger">{{$errors->first('epaule')}}</strong>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label>Poitrine:</label>
                        <input type="number" class="form-control champ @error('poitrine') is-invalid @enderror" name="poitrine">
                    </div>
                    @error('poitrine')
                    <strong class="text-danger">{{$errors->first('poitrine')}}</strong>
                    @enderror
                    <div class="col-4">
                        <label>L manche:</label>
                        <input type="number" class="form-control champ @error('lng_manche') is-invalid @enderror" name="lng_manche">
                    </div>
                    @error('lng_manche')
                    <strong class="text-danger">{{$errors->first('lng_manche')}}</strong>
                    @enderror
                </div>

                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-4">
                        <label>T manche:</label>
                        <input type="number" class="form-control champ @error('tour_manche') is-invalid @enderror" name="tour_manche">
                        @error('tour_manche')
                        <strong class="text-danger">{{$errors->first('tour_manche')}}</strong>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label>L chemise:</label>
                        <input type="number" class="form-control champ @error('lng_chemise') is-invalid @enderror" name="lng_chemise">
                    </div>
                    @error('lng_chemise')
                    <strong class="text-danger">{{$errors->first('lng_chemise')}}</strong>
                    @enderror
                    <div class="col-4">
                        <label>Ceinture:</label>
                        <input type="number" class="form-control champ @error('ceinture') is-invalid @enderror" name="ceinture">
                    </div>
                    @error('ceinture')
                    <strong class="text-danger">{{$errors->first('ceinture')}}</strong>
                    @enderror
                </div>

                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-4">
                        <label>Bassin:</label>
                        <input type="number" class="form-control champ @error('bassin') is-invalid @enderror" name="bassin">
                        @error('bassin')
                        <strong class="text-danger">{{$errors->first('bassin')}}</strong>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label>Cuisse:</label>
                        <input type="number" class="form-control champ @error('cuisse') is-invalid @enderror" name="cuisse">
                    </div>
                    @error('cuisse')
                    <strong class="text-danger">{{$errors->first('cuisse')}}</strong>
                    @enderror
                    <div class="col-4">
                        <label>Poignet:</label>
                        <input type="number" class="form-control champ @error('poignet') is-invalid @enderror" name="poignet">
                    </div>
                    @error('poignet')
                    <strong class="text-danger">{{$errors->first('poignet')}}</strong>
                    @enderror
                </div>

                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-4">
                        <label>L pantalon:</label>
                        <input type="number" class="form-control champ @error('lng_pantalon') is-invalid @enderror" name="lng_pantalon">
                        @error('lng_pantalon')
                        <strong class="text-danger">{{$errors->first('lng_pantalon')}}</strong>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label>Tour taille:</label>
                        <input type="number" class="form-control champ @error('tour_taille') is-invalid @enderror" name="tour_taille">
                    </div>
                    @error('tour_taille')
                    <strong class="text-danger">{{$errors->first('tour_taille')}}</strong>
                    @enderror
                    <div class="col-4">
                        <label>Long taille:</label>
                        <input type="number" class="form-control champ @error('long_taille') is-invalid @enderror" name="long_taille">
                    </div>
                    @error('long_taille')
                    <strong class="text-danger">{{$errors->first('long_taille')}}</strong>
                    @enderror
                </div>

                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-4">
                        <label>Genoux:</label>
                        <input type="number" class="form-control champ @error('genoux') is-invalid @enderror" name="genoux">
                        @error('genoux')
                        <strong class="text-danger">{{$errors->first('genoux')}}</strong>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label>Bas:</label>
                        <input type="number" class="form-control champ @error('bas') is-invalid @enderror" name="bas">
                    </div>
                    @error('bas')
                    <strong class="text-danger">{{$errors->first('bas')}}</strong>
                    @enderror
                    <div class="col-4">
                        <label>Col:</label>
                        <input type="number" class="form-control champ @error('col') is-invalid @enderror" name="col">
                    </div>
                    @error('col')
                    <strong class="text-danger">{{$errors->first('col')}}</strong>
                    @enderror
                </div>

                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-4">
                        <label>Long camisole:</label>
                        <input type="number" class="form-control champ @error('lng_camisole') is-invalid @enderror" name="lng_camisole">
                        @error('lng_camisole')
                        <strong class="text-danger">{{$errors->first('lng_camisole')}}</strong>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label>Long jupe:</label>
                        <input type="number" class="form-control champ @error('log_jupe') is-invalid @enderror" name="log_jupe">
                    </div>
                    @error('log_jupe')
                    <strong class="text-danger">{{$errors->first('log_jupe')}}</strong>
                    @enderror
                    <div class="col-4">
                        <label>Pince:</label>
                        <input type="number" class="form-control champ @error('pince') is-invalid @enderror" name="pince">
                    </div>
                    @error('pince')
                    <strong class="text-danger">{{$errors->first('pince')}}</strong>
                    @enderror
                </div>

                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-4">
                        <label>Long robe:</label>
                        <input type="number" class="form-control champ @error('long_robe') is-invalid @enderror" name="long_robe">
                        @error('long_robe')
                        <strong class="text-danger">{{$errors->first('long_robe')}}</strong>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label>Dos:</label>
                        <input type="number" class="form-control champ @error('dos') is-invalid @enderror" name="dos">
                    </div>
                    @error('dos')
                    <strong class="text-danger">{{$errors->first('dos')}}</strong>
                    @enderror
                    <div class="col-4">
                        <label>Frappe:</label>
                        <input type="number" class="form-control champ @error('poignet2') is-invalid @enderror" name="poignet2">
                    </div>
                    @error('poignet2')
                    <strong class="text-danger">{{$errors->first('poignet2')}}</strong>
                    @enderror
                </div>

                <div class="col-12 mt-4 mb-3 d-flex">
                    <div class="col-12">
                        <button type="submit" class="btn btn-info mr-3">Enregistrer</button>
                        <button type="reset" class="btn btn-secondary">Annuler</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-light" aria-hidden="true">
            <thead>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Téléphone</th>
                <th>Detail</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody id="tbody">
                @foreach($mesures as $mesure)
                <tr>
                    <td>{{$mesure->Client->nom}}</td>
                    <td>{{$mesure->Client->prenom}}</td>
                    <td>{{$mesure->Client->telephone}}</td>
                    <td class="text-center"><a href="{{ route ('gestion-mesures.show', [$mesure->id]) }}"><i class="fa fa-eye text-success" aria-hidden="true"></i></a></td>
                    <td class="text-center"><a href="{{ route ('gestion-mesures.edit', [$mesure->id]) }}"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a></td>
                    <td class="text-center"><a href="{{url ('destroyMesure/'.$mesure->id) }}"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h3 id="erreurMsg" style="display: none; color: red;">Aucun resultat trouvé</h3>
    </div>

    @endsection
