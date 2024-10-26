<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="selectStatementGenStyle.css">
    <link rel="stylesheet" href="bodyConBut.css">
    <title>Selection Statements</title>
    <style>
        /* Add table styling for consistency */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
            background-color: #2d2d2d;
            color: #fafafa;
        }

        th, td {
            border: 1px solid #901ffa;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #901ffa;
            color: #fafafa;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">    
        <h1>Welcome to My Selection Statements Page</h1>
    </div>

    <div class="container">
    <div class="content">
        <!-- Display String Variables -->
        <h2>String Variables</h2>
        <?php
        // Initialize string variables
        $strings = ["Shine", "Jonathan", "Elizabeth", "Nannis", "Milagros"];
        echo "<div class='box'>
                <div class='box-header'>Original</div>
                <div class='box-content'>" . implode(", ", $strings) . "</div>
              </div>";
        
        // Manual sorting of strings in ascending order
        for ($i = 0; $i < 5; $i++) {
            for ($j = $i + 1; $j < 5; $j++) {
                if ($strings[$i] > $strings[$j]) {
                    $temp = $strings[$i];
                    $strings[$i] = $strings[$j];
                    $strings[$j] = $temp;
                }
            }
        }
        echo "<div class='box'>
                <div class='box-header'>Ascending</div>
                <div class='box-content'>" . implode(", ", $strings) . "</div>
              </div>";

        // Manual sorting of strings in descending order
        for ($i = 0; $i < 5; $i++) {
            for ($j = $i + 1; $j < 5; $j++) {
                if ($strings[$i] < $strings[$j]) {
                    $temp = $strings[$i];
                    $strings[$i] = $strings[$j];
                    $strings[$j] = $temp;
                }
            }
        }
        echo "<div class='box'>
                <div class='box-header'>Descending</div>
                <div class='box-content'>" . implode(", ", $strings) . "</div>
              </div>";
        ?>

        <!-- Display Integer Variables and Calculations -->
        <h2>Integer Variables and Calculations</h2>
        <?php
        // Initialize integer variables
        $numbers = [16, 48, 51, 27, 4];
        echo "<div class='box'>
                <div class='box-header'>Original Numbers</div>
                <div class='box-content'>" . implode(", ", $numbers) . "</div>
              </div>";

        // Check if the first number is divisible by the fifth number
        if ($numbers[0] % $numbers[4] == 0) {
            $sum = array_sum($numbers);
            $product = array_product($numbers);
            $average = $sum / count($numbers);

            // Display results in a single table without the surrounding box-header
            echo "<div class='box-content'>
                    <table>
                        <tr>
                            <th>Calculation</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                            <td>Sum</td>
                            <td>$sum</td>
                        </tr>
                        <tr>
                            <td>Product</td>
                            <td>$product</td>
                        </tr>
                        <tr>
                            <td>Average</td>
                            <td>$average</td>
                        </tr>
                    </table>
                  </div>";
        } else {
            // Manual sorting of numbers in ascending order
            for ($i = 0; $i < 5; $i++) {
                for ($j = $i + 1; $j < 5; $j++) {
                    if ($numbers[$i] > $numbers[$j]) {
                        $temp = $numbers[$i];
                        $numbers[$i] = $numbers[$j];
                        $numbers[$j] = $temp;
                    }
                }
            }

            echo "<div class='box'>
                    <div class='box-header'>Ascending Order</div>
                    <div class='box-content'>" . implode(", ", $numbers) . "</div>
                  </div>";
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
