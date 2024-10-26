<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="loopGenStyle.css">
    <link rel="stylesheet" href="bodyConBut.css">
    <title>Loop Statements</title>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>Welcome to My Loop Statements Page</h1>
    </div>

    <div class="container">
        <div class="content">
            <h2>Loop Statements - Multiplication Table, Fibonacci Series, and Factorial</h2>
            <form method="POST">
                <!-- Input for n -->
                <div class="form-group">
                    <label for="n">Enter value for n:</label>
                    <input type="number" name="n" id="n" required placeholder="e.g., 5">
                </div>

                <!-- Input for m -->
                <div class="form-group">
                    <label for="m">Enter value for m:</label>
                    <input type="number" name="m" id="m" required placeholder="e.g., 8">
                </div>

                <!-- Submit button -->
                <button type="submit">Calculate</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $n = intval($_POST['n']);
                $m = intval($_POST['m']);

                echo "<div class='result'>";
                echo "<h2>n x m Multiplication Table</h2>";
                echo "<table>";
                for ($i = 1; $i <= $n; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= $m; $j++) {
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";

                echo "<h2>Fibonacci Series for n</h2>";
                echo "<p style='text-align: center;'>" . fibonacci_series($n) . "</p>";

                echo "<h2>Fibonacci Series for m</h2>";
                echo "<p style='text-align: center;'>" . fibonacci_series($m) . "</p>";

                echo "<h2>Factorial of n</h2>";
                echo "<p style='text-align: center;'>" . factorial($n) . "</p>";

                echo "<h2>Summation of m</h2>";
                echo "<p style='text-align: center;'>" . summation($m) . "</p>";
                echo "</div>";
            }

            // Function to generate Fibonacci series
            function fibonacci_series($num) {
                $fib = [0, 1];
                $result = "0, 1";
                $a = 0;
                $b = 1;
                while (count($fib) < $num) {
                    $next = $a + $b;
                    $fib[] = $next;
                    $result .= ", " . $next;
                    $a = $b;
                    $b = $next;
                }
                return $result;
            }

            // Function to calculate factorial
            function factorial($num) {
                $fact = 1;
                for ($i = 1; $i <= $num; $i++) {
                    $fact *= $i;
                }
                return $fact;
            }

            // Function to calculate summation
            function summation($num) {
                $sum = 0;
                for ($i = 1; $i <= $num; $i++) {
                    $sum += $i;
                }
                return $sum;
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
