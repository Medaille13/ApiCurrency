<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit Admin</title>
</head>
<body>
    <h2 align="center">Formulaire ajout produit admin</h2><br>
    <form action={{ session("produit")==""? route("adminproduit"):route("modificationproduit") }} method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div align="center"><input type="text" name="Nom" placeholder="Nom" value="{{session("produit")->nom??""}}"></div><br>
        <div align="center"><input type="number" name="Prix" placeholder="Prix" value="{{session("produit")->nom??""}}"></div><br>
        <div align="center"><input type="file" name="Photo" placeholder="Photo" ></div><br>
        <div align="center"><input type="text" name="Taille" placeholder="Taille" value="{{session("produit")->taille??""}}"></div><br>
        <div align="center"><input type="text" name="Reference" placeholder="Reference"  value="{{session("produit")->reference??""}}"></div><br>
        <div align="center"><input type="text" name="Description" placeholder="Description" value="{{session("produit")->description??""}}"></div><br>
        <div align="center"><input type="text" name="Categorie" placeholder="Categorie" value="{{session("produit")->categorie??""}}" ></div><br>
        <div align="center"><input type="text" name="Etat" placeholder="Etat"  value="{{session("produit")->etat??""}}"></div><br>
        <div align="center"><input type="text" name="Public" placeholder="Public"  value="{{session("produit")->public??""}}"></div><br>
        <div align="center"><input type="submit" value="Valider l'ajout du produit"></div><br><br><br>
        <div align="center"><a href={{route("accueiladmin")}}>Revenir à la page d'accueil</div><br>

</body>
</html>