@extends('layouts.master')

@section('content')

<h3 class="text-center mb-5 text-info">Enregistrement un modele</h3>

<!-- Button trigger modal -->
<div class="d-flex justify-content-center mb-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Nouveau modele
    </button>
</div>
<div class="col-md-12 col-sm-12">
    <div class="row" id="myItems" style="display:flex;justify-content:space-around;">
        @foreach($modeles as $modele)
        <div class="card shadow mb-3 col-md-4 " id="card">
            <!-- Card Header - Accordion -->
            <div class="d-block card-header py-3">
                <h6 class="card-title m-0 font-weight-bold text-primary text-center">{{$modele->nom_modele}}</h6>
            </div>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body text-center">
                    <img class="d-center"  src="{{asset($modele->img)}}" style="width:30vh;max-width:100%;height:30vh;" alt="">
                    <hr>
                    <div class="text-center">
                        <a href="{{ route ('gestion-modeles.edit', [$modele->id]) }}"><i class="fa fa-edit text-warning" aria-hidden="true"> Modifier</i> |</a>
                        <a href="{{url ('destroyModele/'.$modele->id) }}"><i class="fa fa-window-close text-danger" aria-hidden="true"> Supprimer</i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enregistrement un modele</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gestion-modeles.store')}}" method="POST" id="mt-form" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 mb-3">
                        <label>Nom modele:</label>
                        <input type="text" class="form-control champ @error('nom_modele') is-invalid @enderror" name="nom_modele" require>
                    </div>
                    @error('nom_modele')
                    <strong class="text-danger">{{$errors->first('nom_modele')}}</strong>
                    @enderror

                    <div class="col-12 mb-3">
                        <label>Image modele:</label>
                        <input type="file" class="form-control champ @error('img') is-invalid @enderror" name="img">
                    </div>
                    @error('img')
                    <strong class="text-danger">{{$errors->first('img')}}</strong>
                    @enderror

                    <div class="row col-12 mt-4 d-flex">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info mr-3">Enregistrer</button>
                            <button type="reset" class="btn btn-secondary">Annuler</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
