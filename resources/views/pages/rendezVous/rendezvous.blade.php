@extends('layouts.master')

@section('content')
<h3 class="text-center mb-5 text-info">Enregistrement d'un rendez-vous :</h3>

<!-- Button trigger modal -->
<div class="d-flex justify-content-center mb-4">
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
        Nouveau rendez-vous
    </button>
</div>

<div class="col-12">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-light" aria-hidden="true">
            <thead>
                <th>Nom client</th>
                <th>Modele</th>
                <th>Motif</th>
                <th>Date</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody id="tbody">
                @foreach($rendez as $rdv)
                <tr>
                    <td>{{$rdv->Client->nom}} {{$rdv->Client->prenom}}</td>
                    <td>{{$rdv->Modele->nom_modele}}</td>
                    <td>{{$rdv->motif}}</td>
                    <td>{{$rdv->date}}</td>
                    <td class="text-center"><a href="{{ route ('gestion-rdv.edit', [$rdv->id]) }}"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a></td>
                    <td class="text-center"><a href="{{url ('destroyRdv/'.$rdv->id) }}"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h3 id="erreurMsg" style="display: none; color: red;">Aucun resultat trouvé</h3>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Enregistrement de rendez-vous</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('gestion-rdv.store')}}" method="POST" id="mt-form">
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
                                <textarea class="form-control champ @error('motif') is-invalid @enderror" name="motif" id="" cols="30" rows="3"></textarea>
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
                </div>
            </div>
        </div>
    </div>

    @endsection
