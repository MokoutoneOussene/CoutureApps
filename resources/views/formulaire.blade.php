<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Formulaire</title>

    @include('layouts.styles')
</head>

<body>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
            <strong>{{ session()->get('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary p-5" data-toggle="modal" data-target="#exampleModal">
            RENSEIGNER VOS INFORMATIONS ICI
        </button>

        <!-- Modal create -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel">RENSEIGNER VOS INFORMATIONS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('enregistrement') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="nom" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Prénom</label>
                                    <input type="text" class="form-control" name="prenom" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Prénom 2 (facultatif)</label>
                                    <input type="text" class="form-control" name="prenom2">
                                </div>
                                <div class="col-lg-6 col-md-12" required>
                                    <label>Sexe</label>
                                    <select class="form-control" name="sexe">
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                        <option value="Autres">Autres</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Père</label>
                                    <input type="text" class="form-control" name="pere" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Mère</label>
                                    <input type="text" class="form-control" name="mere" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Situation matrimoniale</label>
                                    <select class="form-control" name="situation" required>
                                        <option value="Célibataire">Célibataire</option>
                                        <option value="Marie (e)">Marie (e)</option>
                                        <option value="Divorce (e)">Divorce (e)</option>
                                        <option value="Veuf (ve)">Veuf (ve)</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Conjoint (e)</label>
                                    <input type="text" class="form-control" name="conjoint" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Téléphone WhatSapp</label>
                                    <input type="text" class="form-control" name="telephone" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Date naissance</label>
                                    <input type="date" class="form-control" name="date_naiss" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Statut</label>
                                    <input type="text" class="form-control" name="statut" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Quartier</label>
                                    <input type="text" class="form-control" name="quartier" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Pays</label>
                                    <input type="text" class="form-control" name="pays" required>
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-success mr-2">Enregistrer</button>
                                <button type="reset" class="btn btn-danger">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.scripts')
</body>

</html>
