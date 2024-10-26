<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="twoDimenGenStyle.css">
    <link rel="stylesheet" href="bodyConBut.css">
    <title>Two Dimensional Array</title>
</head>
<body>
    <!-- Header -->
    <div class="header">    
        <h1>Welcome to My Two Dimensional Array Page</h1>
    </div>

    <div class="container">
    <div class="content">
 
        
<?php
// Set the size of the array (N x N)
$N = 3;  // You can change N to any size
$array = [];

// Generate the NxN array with random integers
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        $array[$i][$j] = rand(1, 100);  // Random integers between 1 and 100
    }
}

// Function to display the 2D array
function displayArray($array, $N) {
    echo "<table>";
    for ($i = 0; $i < $N; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $N; $j++) {
            echo "<td>{$array[$i][$j]}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Calculate the sum, average, min, and max of rows and columns
function calculateStats($array, $N) {
    $rowSums = $rowAvgs = $rowMin = $rowMax = [];
    $colSums = $colAvgs = $colMin = $colMax = array_fill(0, $N, 0);
    $overallSum = 0;
    $overallMin = PHP_INT_MAX;
    $overallMax = PHP_INT_MIN;

    // Initialize rowMin, rowMax, colMin, colMax
    for ($i = 0; $i < $N; $i++) {
        $rowMin[$i] = PHP_INT_MAX;
        $rowMax[$i] = PHP_INT_MIN;
        $colMin[$i] = PHP_INT_MAX;
        $colMax[$i] = PHP_INT_MIN;
    }

    // Calculate row/column sums, min, and max
    for ($i = 0; $i < $N; $i++) {
        $rowSums[$i] = 0;
        for ($j = 0; $j < $N; $j++) {
            $rowSums[$i] += $array[$i][$j];
            $colSums[$j] += $array[$i][$j];
            $overallSum += $array[$i][$j];
            
            // Row min/max
            if ($array[$i][$j] < $rowMin[$i]) $rowMin[$i] = $array[$i][$j];
            if ($array[$i][$j] > $rowMax[$i]) $rowMax[$i] = $array[$i][$j];
            
            // Column min/max
            if ($array[$i][$j] < $colMin[$j]) $colMin[$j] = $array[$i][$j];
            if ($array[$i][$j] > $colMax[$j]) $colMax[$j] = $array[$i][$j];

            // Overall min/max
            if ($array[$i][$j] < $overallMin) $overallMin = $array[$i][$j];
            if ($array[$i][$j] > $overallMax) $overallMax = $array[$i][$j];
        }
        $rowAvgs[$i] = $rowSums[$i] / $N;
    }

    for ($j = 0; $j < $N; $j++) {
        $colAvgs[$j] = $colSums[$j] / $N;
    }

    $overallAvg = $overallSum / ($N * $N);

    // Return the calculated statistics
    return [
        'rowSums' => $rowSums, 'rowAvgs' => $rowAvgs, 'rowMin' => $rowMin, 'rowMax' => $rowMax,
        'colSums' => $colSums, 'colAvgs' => $colAvgs, 'colMin' => $colMin, 'colMax' => $colMax,
        'overallSum' => $overallSum, 'overallAvg' => $overallAvg, 'overallMin' => $overallMin, 'overallMax' => $overallMax
    ];
}

// Calculate diagonal sums and averages
function calculateDiagonalStats($array, $N) {
    $mainDiagonalSum = $secondaryDiagonalSum = 0;

    for ($i = 0; $i < $N; $i++) {
        $mainDiagonalSum += $array[$i][$i];
        $secondaryDiagonalSum += $array[$i][$N - $i - 1];
    }

    $mainDiagonalAvg = $mainDiagonalSum / $N;
    $secondaryDiagonalAvg = $secondaryDiagonalSum / $N;

    return [
        'mainDiagonalSum' => $mainDiagonalSum,
        'mainDiagonalAvg' => $mainDiagonalAvg,
        'secondaryDiagonalSum' => $secondaryDiagonalSum,
        'secondaryDiagonalAvg' => $secondaryDiagonalAvg
    ];
}

// Display NxN array
echo "<h2>Original NxN Array</h2>";
displayArray($array, $N);

// Get statistics
$stats = calculateStats($array, $N);
$diagonalStats = calculateDiagonalStats($array, $N);

// Display statistics in a table with two columns
echo "<h2>Statistics</h2>";
echo "<table class='stats-table'>";
echo "<tr><th>Statistic</th><th>Value</th></tr>";
echo "<tr><td>Row Sums</td><td>" . implode(", ", $stats['rowSums']) . "</td></tr>";
echo "<tr><td>Row Averages</td><td>" . implode(", ", $stats['rowAvgs']) . "</td></tr>";
echo "<tr><td>Row Minimums</td><td>" . implode(", ", $stats['rowMin']) . "</td></tr>";
echo "<tr><td>Row Maximums</td><td>" . implode(", ", $stats['rowMax']) . "</td></tr>";
echo "<tr><td>Column Sums</td><td>" . implode(", ", $stats['colSums']) . "</td></tr>";
echo "<tr><td>Column Averages</td><td>" . implode(", ", $stats['colAvgs']) . "</td></tr>";
echo "<tr><td>Column Minimums</td><td>" . implode(", ", $stats['colMin']) . "</td></tr>";
echo "<tr><td>Column Maximums</td><td>" . implode(", ", $stats['colMax']) . "</td></tr>";
echo "<tr><td>Main Diagonal Sum</td><td>{$diagonalStats['mainDiagonalSum']}</td></tr>";
echo "<tr><td>Main Diagonal Average</td><td>{$diagonalStats['mainDiagonalAvg']}</td></tr>";
echo "<tr><td>Secondary Diagonal Sum</td><td>{$diagonalStats['secondaryDiagonalSum']}</td></tr>";
echo "<tr><td>Secondary Diagonal Average</td><td>{$diagonalStats['secondaryDiagonalAvg']}</td></tr>";
echo "<tr><td>Overall Sum</td><td>{$stats['overallSum']}</td></tr>";
echo "<tr><td>Overall Average</td><td>{$stats['overallAvg']}</td></tr>";
echo "<tr><td>Overall Minimum</td><td>{$stats['overallMin']}</td></tr>";
echo "<tr><td>Overall Maximum</td><td>{$stats['overallMax']}</td></tr>";
echo "</table>";
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
