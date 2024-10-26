<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="singleDimenGenStyle.css">
    <link rel="stylesheet" href="bodyConBut.css">
    <title>Single Dimensional Array</title>
</head>
<body>
    <!-- Header -->
    <div class="header">    
        <h1>Welcome to My Single Dimensional Array Page</h1>
    </div>

    <div class="container">
    <div class="content">

        
<?php
// Parallel array of 10 people
$people = [
    ["name" => "Deonna", "age" => 22, "sex" => "Female", "nationality" => "American"],
    ["name" => "Ella", "age" => 20, "sex" => "Female", "nationality" => "Canadian"],
    ["name" => "Jewel", "age" => 21, "sex" => "Female", "nationality" => "British"],
    ["name" => "Rhianna", "age" => 24, "sex" => "Female", "nationality" => "Australian"],
    ["name" => "Shane", "age" => 22, "sex" => "Female", "nationality" => "Dutch"],
    ["name" => "William", "age" => 27, "sex" => "Male", "nationality" => "German"],
    ["name" => "GP", "age" => 29, "sex" => "Male", "nationality" => "Irish"],
    ["name" => "Lawrence", "age" => 29, "sex" => "Male", "nationality" => "Japanese"],
    ["name" => "Alprine", "age" => 31, "sex" => "Male", "nationality" => "Mexican"],
    ["name" => "John", "age" => 33, "sex" => "Male", "nationality" => "Indian"]
];

    // Function to sort the array by name
    function sortByName(&$array) {
        usort($array, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });
    }

    // Display the array in table format
    function displayTable($array) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
        foreach ($array as $person) {
            echo "<tr>
                    <td>{$person['name']}</td>
                    <td>{$person['age']}</td>
                    <td>{$person['sex']}</td>
                    <td>{$person['nationality']}</td>
                </tr>";
        }
        echo "</table>";    
        }

        // Display unsorted list
        echo "<h2>Unsorted List</h2>";
        displayTable($people);

        // Sort the array by name
        sortByName($people);

        // Display sorted list
        echo "<h2>Sorted List (by Name)</h2>";
        displayTable($people);
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
