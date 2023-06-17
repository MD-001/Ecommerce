<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Nouvelle commande</title>
</head>

<body>
    <h1>Nouvelle commande</h1>
    <h2 style="border-bottom: 2px">Détails de la commande :</h2>
    <p> <span style="font-weight: bolder">Nom du client :</span> {{ $data['name'] }}</p>
    <p><span style="font-weight: bolder">Prenom du client :</span> {{ $data['prenom'] }}</p>
    <p> <span style="font-weight: bolder">Adresse du client :</span> {{ $data['Adresse'] }}</p>
    <p> <span style="font-weight: bolder">Adresse e-mail du client :</span> {{ $data['phone_number']  }}</p>
    <p><span style="font-weight: bolder">Numéro de commande :</span> {{ $data['numCommande'] }}</p>
    <p><span style="font-weight: bolder">date de commande : </span>{{ $data['date_commande'] }}</p>
    <p><span style="font-weight: bolder">Totale d'achat :</span> {{ $data['total'] }}</p>
</body>

</html>

