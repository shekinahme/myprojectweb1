<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="defineFuncGenStyle.css">
    <link rel="stylesheet" href="bodyConBut.css">
    <title>Defined Functions</title>
</head>
<body>
    <!-- Header -->
    <div class="header">    
        <h1>Welcome to My User Defined Functions Page</h1>
    </div>

    <div class="container">
        <div class="content">
           <h2>Enter any positive or negative integers in each box to calculate using defined functions</h2>
            <form method="POST">
                <input type="number" name="num1" required placeholder="Enter first number">
                <input type="number" name="num2" placeholder="Enter second number (if needed)">
                <button type="submit">Calculate All</button>
            </form>

            <?php
            // Function Definitions

            function add($a, $b) {
                return $a + $b;
            }

            function subtract($a, $b) {
                return $a - $b;
            }

            function multiply($a, $b) {
                return $a * $b;
            }

            function divide($a, $b) {
                if ($b == 0) {
                    return "Division by zero error!";
                }
                return $a / $b;
            }

            function modulus($a, $b) {
                return $a % $b;
            }

            function square($a) {
                return $a * $a;
            }

            function cube($a) {
                return $a * $a * $a;
            }

            function power($a, $b) {
                return pow($a, $b);
            }

            function sqrt_value($a) {
                return sqrt($a);
            }

            function absolute($a) {
                return abs($a);
            }

            // Display result table if form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = isset($_POST['num2']) && $_POST['num2'] !== '' ? $_POST['num2'] : 'N/A';

                echo "<table border='1' cellpadding='10' style='margin-top: 20px; width: 100%; text-align: center;'>
                    <tr>
                        <th>Operation</th>
                        <th>First Number</th>
                        <th>Second Number</th>
                        <th>Result</th>
                        <th>Explanation</th>
                    </tr>";

                // Array of operations and their results/explanations
                $operations = [
                    "Addition" => $num2 !== 'N/A' ? add($num1, $num2) : "N/A",
                    "Subtraction" => $num2 !== 'N/A' ? subtract($num1, $num2) : "N/A",
                    "Multiplication" => $num2 !== 'N/A' ? multiply($num1, $num2) : "N/A",
                    "Division" => $num2 !== 'N/A' ? divide($num1, $num2) : "N/A",
                    "Modulus" => $num2 !== 'N/A' ? modulus($num1, $num2) : "N/A",
                    "Square" => square($num1),
                    "Cube" => cube($num1),
                    "Power" => $num2 !== 'N/A' ? power($num1, $num2) : "N/A",
                    "Square Root" => sqrt_value($num1),
                    "Absolute Value" => absolute($num1)
                ];

                // Explanations for each operation
                $explanations = [
                    "Addition" => $num2 !== 'N/A' ? "We added $num1 and $num2 to get " : "Second number is not needed for addition.",
                    "Subtraction" => $num2 !== 'N/A' ? "We subtracted $num2 from $num1 to get " : "Second number is not needed for subtraction.",
                    "Multiplication" => $num2 !== 'N/A' ? "We multiplied $num1 and $num2 to get " : "Second number is not needed for multiplication.",
                    "Division" => $num2 !== 'N/A' ? ($num2 != 0 ? "We divided $num1 by $num2 to get " : "Division by zero is not allowed.") : "Second number is not needed for division.",
                    "Modulus" => $num2 !== 'N/A' ? "The remainder when $num1 is divided by $num2 is " : "Second number is not needed for modulus.",
                    "Square" => "We squared $num1 to get ",
                    "Cube" => "We cubed $num1 to get ",
                    "Power" => $num2 !== 'N/A' ? "We raised $num1 to the power of $num2 to get " : "Second number is not needed for power.",
                    "Square Root" => "The square root of $num1 is ",
                    "Absolute Value" => "The absolute value of $num1 is "
                ];

                // Iterate through operations to display the results
                foreach ($operations as $operation => $result) {
                    echo "<tr>
                        <td>$operation</td>
                        <td>$num1</td>
                        <td>$num2</td>
                        <td>$result</td>
                        <td>{$explanations[$operation]}$result</td>
                    </tr>";
                }

                echo "</table>";
            }
            ?>
            <a href="index.php" class="home-button">Home</a>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>Shekinah Mae O. Jubahib October 21, 2024.</p>
    </div>
</body>
</html>
