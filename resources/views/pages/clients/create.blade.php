@extends('layouts.master')

@section('content')
<h3 class="text-center mb-5 text-info">Enregistrement un client :</h3>

<!-- Button trigger modal -->
<div class="d-flex justify-content-center mb-4">
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
        Nouveau client
    </button>
</div>
<div class="col-12">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-light" aria-hidden="true">
            <thead>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Téléphone</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody id="tbody">
                @foreach($clients as $client)
                <tr>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->telephone}}</td>
                    <td class="text-center"><a href="{{ route ('gestion_clients.show', [$client->id]) }}"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a></td>
                    <td class="text-center"><a href="{{url ('destroyClient/'.$client->id) }}"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h3 id="erreurMsg" style="display: none; color: red;">Aucun resultat trouvé</h3>
    </div>

    <!-- Modal create -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Enregistrement d'un client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('gestion_clients.store')}}" method="POST" id="mt-form">
                        @csrf
                        <div class="col-12 mb-3 d-flex justify-content-center">
                            <div class="col-12">
                                <label>Nom client:</label>
                                <input type="text" class="form-control champ @error('nom') is-invalid @enderror" name="nom">
                            </div>
                            @error('nom')
                            <strong class="text-danger">{{$errors->first('nom')}}</strong>
                            @enderror
                        </div>

                        <div class="col-12 mb-3 d-flex justify-content-center">
                            <div class="col-12">
                                <label>Prénom client:</label>
                                <input type="text" class="form-control champ @error('prenom') is-invalid @enderror" name="prenom">
                            </div>
                            @error('prenom')
                            <strong class="text-danger">{{$errors->first('prenom')}}</strong>
                            @enderror
                        </div>

                        <div class="col-12 mb-3 d-flex justify-content-center">
                            <div class="col-12">
                                <label>Sexe:</label>
                                <select class="form-control champ @error('sexe') is-invalid @enderror" name="sexe">
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
                                <input type="number" class="form-control champ @error('telephone') is-invalid @enderror" name="telephone">
                            </div>
                            @error('telephone')
                            <strong class="text-danger">{{$errors->first('telephone')}}</strong>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info mr-3">Enregistrer</button>
                            <button type="reset" class="btn btn-secondary">Annuler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
