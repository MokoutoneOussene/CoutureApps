@extends('layouts.master')

@section('content')
<h3 class="text-center mb-5 text-info">Liste des credits</h3>

<div class="col-12">
    <table class="table table-bordered table-striped table-hover table-light" aria-hidden="true">
        <thead>
            <th>Nom client</th>
            <th>Nom modele</th>
            <th>Montant total</th>
            <th>Avance</th>
            <th>Reste à payer</th>
            <th>Detail</th>
            <th>Regler</th>
            <th>Supprimer</th>
        </thead>
        <tbody id="tbody">
            @foreach($credit as $pay)
            <tr>
                <td>{{$pay->Client->nom}} {{$pay->Client->prenom}}</td>
                <td>{{$pay->Modele->nom_modele}}</td>
                <td>{{$pay->somme}}</td>
                <td>{{$pay->avance}}</td>
                <td>{{$pay->reste}}</td>
                <td class="text-center"><a href="{{ route ('gestion-payement.show', [$pay->id]) }}"><i class="fa fa-eye text-success" aria-hidden="true"></i></a></td>
                <td class="text-center"><a href="{{ route ('gestion-payement.edit', [$pay->id]) }}"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a></td>
                <td class="text-center"><a href="{{url ('destroyPayement/'.$pay->id) }}"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3 id="erreurMsg" style="display: none; color: red;">Aucun resultat trouvé</h3>
</div>
@endsection
