<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Données du client</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }
        th, td {
            border: 1px solid #000; /* الكادر كحل */
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2; /* لون خفيف للعناوين */
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h3>Données du client</h3>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $cp = $_POST['cp'];
    ?>

    <table>
        <tr>
            <th>Champ</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Nom</td>
            <td><?php echo htmlspecialchars($nom); ?></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><?php echo htmlspecialchars($prenom); ?></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><?php echo htmlspecialchars($adresse); ?></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><?php echo htmlspecialchars($ville); ?></td>
        </tr>
        <tr>
            <td>Code postal</td>
            <td><?php echo htmlspecialchars($cp); ?></td>
        </tr>
    </table>

    <?php
    } else {
        echo "<p>Aucune donnée reçue. Veuillez remplir le formulaire.</p>";
    }
    ?>

</body>
</html>