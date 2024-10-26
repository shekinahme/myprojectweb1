<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="mathFunctionGenStyle.css">
    <link rel="stylesheet" href="bodyConBut.css">
    <title>Math Functions</title>
   
</head>
<body>
    <!-- Header -->
    <div class="header">    
            <h1>Welcome to My Math Functions Page</h1>
    </div>

    <div class="container">
        <div class="content">
            <?php
                 // Declare 5 floating point numbers
                $float1 = 3.14;
                $float2 = 9.81;
                $float3 = 2.718;
                $float4 = -5.25;
                $float5 = 1.414;

                // Declare 5 whole numbers
                $int1 = 25;
                $int2 = 64;
                $int3 = -9;
                $int4 = 7;
                $int5 = 100;

                // Display original values
                echo "<h2>Original Values</h2>";
                echo "<table>
                        <tr><th>Variable</th><th>Value</th></tr>
                        <tr><td>\$float1</td><td>$float1</td></tr>
                        <tr><td>\$float2</td><td>$float2</td></tr>
                        <tr><td>\$float3</td><td>$float3</td></tr>
                        <tr><td>\$float4</td><td>$float4</td></tr>
                        <tr><td>\$float5</td><td>$float5</td></tr>
                        <tr><td>\$int1</td><td>$int1</td></tr>
                        <tr><td>\$int2</td><td>$int2</td></tr>
                        <tr><td>\$int3</td><td>$int3</td></tr>
                        <tr><td>\$int4</td><td>$int4</td></tr>
                        <tr><td>\$int5</td><td>$int5</td></tr>
                    </table>";

                // Apply math functions
                echo "<h2>Math Function Results</h2>";
                echo "<table>
                        <tr><th>Function</th><th>Input</th><th>Result</th></tr>";

                // 1. Absolute value
                echo "<tr><td>abs()</td><td>$int3</td><td>" . abs($int3) . "</td></tr>";

                // 2. Square root
                echo "<tr><td>sqrt()</td><td>$int2</td><td>" . sqrt($int2) . "</td></tr>";

                // 3. Exponential (e^x)
                echo "<tr><td>exp()</td><td>$float3</td><td>" . exp($float3) . "</td></tr>";

                // 4. Natural logarithm (ln)
                echo "<tr><td>log()</td><td>$float3</td><td>" . log($float3) . "</td></tr>";

                // 5. Base-10 logarithm
                echo "<tr><td>log10()</td><td>$int5</td><td>" . log10($int5) . "</td></tr>";

                // 6. Maximum of two values
                echo "<tr><td>max()</td><td>$int1, $int4</td><td>" . max($int1, $int4) . "</td></tr>";

                // 7. Minimum of two values
                echo "<tr><td>min()</td><td>$float4, $float5</td><td>" . min($float4, $float5) . "</td></tr>";

                // 8. Round to nearest integer
                echo "<tr><td>round()</td><td>$float1</td><td>" . round($float1) . "</td></tr>";

                // 9. Ceiling (round up)
                echo "<tr><td>ceil()</td><td>$float4</td><td>" . ceil($float4) . "</td></tr>";

                // 10. Floor (round down)
                echo "<tr><td>floor()</td><td>$float4</td><td>" . floor($float4) . "</td></tr>";

                // 11. Power (x^y)
                echo "<tr><td>pow()</td><td>$int4, 2</td><td>" . pow($int4, 2) . "</td></tr>";

                // 12. Cosine
                echo "<tr><td>cos()</td><td>$float1</td><td>" . cos($float1) . "</td></tr>";

                // 13. Sine
                echo "<tr><td>sin()</td><td>$float1</td><td>" . sin($float1) . "</td></tr>";

                // 14. Tangent
                echo "<tr><td>tan()</td><td>$float1</td><td>" . tan($float1) . "</td></tr>";

                // 15. Random number
                echo "<tr><td>rand()</td><td>n/a</td><td>" . rand(1, 100) . "</td></tr>";

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
