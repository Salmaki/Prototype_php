<?php
$nombre1 = $nombre2 = $resultat = "";
$operation = "";
$erreur = "";
$type_operation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["nombre1"]) || !isset($_POST["nombre2"]) || $_POST["nombre1"] === "" || $_POST["nombre2"] === "") {
        $erreur = "Veuillez remplir les deux nombres.";
    } elseif (!is_numeric($_POST["nombre1"]) || !is_numeric($_POST["nombre2"])) {
        $erreur = "Les valeurs doivent être des nombres.";
    } else {
        $nombre1 = $_POST["nombre1"];
        $nombre2 = $_POST["nombre2"];
        $operation = $_POST["operation"];

        switch ($operation) {
            case "+":
                $resultat = $nombre1 + $nombre2;
                $type_operation = "Addition";
                break;
            case "-":
                $resultat = $nombre1 - $nombre2;
                $type_operation = "Soustraction";
                break;
            case "*":
                $resultat = $nombre1 * $nombre2;
                $type_operation = "Multiplication";
                break;
            case "/":
                if ($nombre2 == 0) {
                    $erreur = "Division par zéro impossible !";
                } else {
                    $resultat = $nombre1 / $nombre2;
                    $type_operation = "Division";
                }
                break;
            default:
                $erreur = "Opération non valide.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
</head>
<body>
    <h2>Calculatrice PHP</h2>

    <?php if (!empty($erreur)) : ?>
        <p style="color:red; font-weight:bold;"><?php echo $erreur; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label>Nombre 1 :</label>
        <input type="text" name="nombre1" value="<?php echo htmlspecialchars($nombre1); ?>"><br><br>

        <label>Nombre 2 :</label>
        <input type="text" name="nombre2" value="<?php echo htmlspecialchars($nombre2); ?>"><br><br>

        <label>Opération :</label>
        <select name="operation">
            <option value="+" <?php if ($operation == '+') echo 'selected'; ?>>Addition (+)</option>
            <option value="-" <?php if ($operation == '-') echo 'selected'; ?>>Soustraction (-)</option>
            <option value="*" <?php if ($operation == '*') echo 'selected'; ?>>Multiplication (*)</option>
            <option value="/" <?php if ($operation == '/') echo 'selected'; ?>>Division (/)</option>
        </select><br><br>

        <input type="submit" value="Calculer">
    </form>

    <?php if ($resultat !== "" && empty($erreur)) : ?>
        <hr>
        <h3>Résultat :</h3>
        <p>Opération : <strong><?php echo $type_operation; ?></strong></p>
        <p>Le résultat est : <input type="text" value="<?php echo $resultat; ?>" readonly style="font-weight:bold; color:green;"></p>
    <?php endif; ?>
</body>
</html>