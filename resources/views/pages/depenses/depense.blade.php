@extends('layouts.master')

@section('content')
<h3 class="text-center mb-5 text-info">Enregistrement d'une depense :</h3>

<!-- Button trigger modal -->
<div class="d-flex justify-content-center mb-4">
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
        Nouvelle depense
    </button>
</div>

<div class="col-12">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-light" aria-hidden="true">
            <thead>
                <th>Nº</th>
                <th>Motif</th>
                <th>Montant</th>
                <th>Date</th>
                <th>Personnel</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody id="tbody">
                @foreach($depenses as $deps)
                <tr>
                    <td>{{$deps->id}}</td>
                    <td>{{$deps->description}}</td>
                    <td>{{$deps->montant}}</td>
                    <td>{{$deps->date}}</td>
                    <td>{{$deps->Personnel->nom }} {{$deps->Personnel->prenom }}</td>
                    <td class="text-center"><a href="{{ route ('gestion-depense.edit', [$deps->id]) }}"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a></td>
                    <td class="text-center"><a href="{{url ('destroyDeps/'.$deps->id) }}"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h3 id="erreurMsg" style="display: none; color: red;">Aucun resultat trouvé</h3>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Enregistrement d'une depense</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gestion-depense.store')}}" method="POST" id="mt-form">
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
                            <input type="number" class="form-control champ @error('montant') is-invalid @enderror" name="montant">
                        </div>
                        @error('montant')
                        <strong class="text-danger">{{$errors->first('montant')}}</strong>
                        @enderror
                    </div>

                    <div class="col-12 mb-3 d-flex justify-content-center">
                        <div class="col-12">
                            <label>Description :</label>
                            <textarea class="form-control champ @error('description') is-invalid @enderror" name="description" cols="30" rows="3"></textarea>
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
                        <button type="submit" class="btn btn-info mr-3">Enregistrer</button>
                        <button type="reset" class="btn btn-secondary">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
