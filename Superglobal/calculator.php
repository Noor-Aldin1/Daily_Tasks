<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <label for="operator">Operation:</label>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['calculate'])) {
        // Retrieve form data
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        // Validate and perform calculation based on operator
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                // Check if divisor is not zero
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
            default:
                $result = "Invalid operator";
                break;
        }

        // Display the result
        echo "<br><strong>Result:</strong> $result";
    }
    ?>
</body>

</html>