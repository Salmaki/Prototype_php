
<?php

if (isset($_POST['calculate'])) {
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if (empty($number1) || empty($number2)) {
        echo "Error : All fields are required!";
    } else if (!is_numeric($number1) || !is_numeric($number2)) {
        echo "Error: Please enter valid numbers!";
    } else if ($operation == 'div' && $number2 == 0) {
        echo "Error : Cannot divide by zero!";
    } else {
        switch ($operation) {
            case 'add':
                $finalResult = $number1 + $number2;
                break;

            case 'sub':
                $finalResult = $number1 - $number2; 
                break;

            case 'mul':
                $finalResult = $number1 * $number2;
                break;

            case 'div':
                $finalResult = $number1 / $number2;
                break;
        }
    }
}

?>



<form method="POST">

    <h2>Calculator</h2>
    <input type="number" name="num1" id="num1">
    <input type="number" name="num2" id="num2">

    <select name="operation" id="operation">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select>
    <label>Final Result</label>
    <input type="text" name="result" id="result" value="<?php echo isset($finalResult) ? $finalResult : ''; ?>" readonly>

    <button type="submit" name="calculate">Calculate</button>

</form>
