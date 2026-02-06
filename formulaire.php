<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Saisie Adresse Client</title>
    <style>
        fieldset {
            width: 50%; 
            margin: 20px;
            padding: 20px;
            border: 1px solid #000;
        }
        legend {
            font-weight: bold;
        }
        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            margin-left: 100px;
            padding: 5px 15px;
        }
    </style>
</head>
<body>

    <form action="traitement.php" method="post">
        <fieldset>
            <legend>Adresse client</legend>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required><br>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required><br>

            <label for="cp">Code postal :</label>
            <input type="text" id="cp" name="cp" required><br><br>

            <input type="submit" value="Envoyer">
        </fieldset>
    </form>

</body>
</html>