<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Produit</title>
</head>
<body>
    <h2 align="center">Affichage et édition des devises</h2><br>
    <br><br>
    <div align="center"><a href={{route("accueiladmin")}}>Revenir à la page d'accueil</a></div><br><br>

        <table>
            <th>
                <td>Nom</td>
                <td>Description</td>
                <td>Public</td>
            </th>
            @forelse ($produits as $produit)
            <tr>            
                <td>{{$produit->nom}}</td>
                <td>{{$produit->description}}</td>
                <td>{{$produit->public}}</td>
                <td><a href="{{route("deleteproduit",[$produit->id])}}">supprimer</a></td>
                <td><a href="{{route("modifproduit",[$produit->id])}}">editer</a></td>
            </tr>
            @empty
            @endforelse
        </table>
        
    </body>
    </html>