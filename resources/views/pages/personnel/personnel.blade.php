@extends('layouts.master')

@section('content')
<h3 class="text-center mb-5 text-info">Enregistrement d'un personnel :</h3>

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
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody id="tbody">
                @foreach($personnels as $perso)
                <tr>
                    <td>{{$perso->nom}}</td>
                    <td>{{$perso->prenom}}</td>
                    <td class="text-center"><a href="{{ route ('gestion-personnel.edit', [$perso->id]) }}"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a></td>
                    <td class="text-center"><a href="{{url ('destroyPers/'.$perso->id) }}"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
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
                <h5 class="modal-title text-danger" id="exampleModalLabel">Enregistrement d'un personnel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gestion-personnel.store')}}" method="POST" id="mt-form">
                    @csrf
                    <div class="col-12">
                        <label>Nom personnel:</label>
                        <input type="text" class="form-control champ @error('nom') is-invalid @enderror" name="nom" require>
                    </div>
                    @error('nom')
                    <strong class="text-danger">{{$errors->first('nom')}}</strong>
                    @enderror

                    <div class="col-12 mt-2">
                        <label>Prénom personnel:</label>
                        <input type="text" class="form-control champ @error('prenom') is-invalid @enderror" name="prenom">
                    </div>
                    @error('prenom')
                    <strong class="text-danger">{{$errors->first('prenom')}}</strong>
                    @enderror

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
