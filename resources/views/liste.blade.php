<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Liste</title>

    @include('layouts.styles')
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Matrimoniale</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Quartier</th>
                        <th scope="col">Pays</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listes as $item)
                        <tr>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->prenom }}</td>
                            <td>{{ $item->telephone }}</td>
                            <td>{{ $item->situation }}</td>
                            <td>{{ $item->statut }}</td>
                            <td>{{ $item->quartier }}</td>
                            <td>{{ $item->pays }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('layouts.scripts')
</body>

</html>
