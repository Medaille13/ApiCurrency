<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
</head>
<body>
    <h2 align="center">Page accueil admin</h2><br>
    <div align="center"><a href={{route("editproduit")}}>Liste Produit et edition</div><br>
    <div align="center"><a href={{route("formulaire")}}>Formulaire ajout Produit</div><br>   
    <!--<div align="center"><a href="">Liste Utilisateurs et edition</div><br><br><br>-->
    <div align="center"><a href={{route("logoutadmin")}}>Deconnexion</div><br>
          
</body>
</html>

