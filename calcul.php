<?php

if (isset($_POST['calculer'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    if (empty($number1) || empty($number2)) {
        echo "Erreur : Tous les champs sont obligatoires !";
    } else if (!is_numeric($number1) || !is_numeric($number2)) {
        echo "Erreur : Veuillez entrer des nombres valides !";
    } else if ($operation == 'div' && $number2 == 0) {
        echo "Erreur : Impossible de diviser par zéro !";
    } else {

        switch ($operation) {
            case '+':
                $finalResult = $number1 + $number2;
                break;

            case '-':
                $finalResultat = $number1 - $number2;
                break;

            case '*':
                $finalResultat = $number1 * $number2;
                break;

            case '/':
                $finalResultat = $number1 / $number2;
                break;
        }
    }
}

?>



<form method="POST">

    <h2>Calculator</h2>
    <input type="number" name="number1" id="number1">
    <input type="number" name="number2" id="number2">

    <select name="operation" id="operation">
        <option value="+"> Adittion</option>
        <option value="-">Soustraction</option>
        <option value="*">Multiplication</option>
        <option value="/">Division</option>
    </select>
    <label>Final Resultqt</label>
    <input type="text" name="resultat" id="resultat" value="<?php echo isset($finalResultat) ? $finalResultat : ''; ?>" readonly>

    <button type="submit" name="calculer">Calculer</button>

</form>