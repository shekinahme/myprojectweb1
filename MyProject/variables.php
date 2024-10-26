<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="varGenStyle.css">
    <link rel="stylesheet" href="bodyConBut.css">
    <title>Variable Declarations</title>
</head>

<body>
    <!-- Header -->
    <div class="header">    
            <h1>Welcome to My Variable Declaration Page</h1>
    </div>

    <div class="container">
        <div class="content">
            <!-- Whole Numbers -->
            <h2>Whole Numbers</h2>
            <?php
            // Declare whole numbers relevant to your CV
            $var1 = 20;  // Example: Age
            $var2 = 3;   // Example: Years in College
            $var3 = 6;   // Example: Projects Completed
            $var4 = 10;  // Example: Courses this semester
            $var5 = 2;   // Example: Intramurals participated

            echo "<table>
                <tr><th>Variable</th><th>Value</th><th>Description</th></tr>
                <tr><td>\$var1</td><td>$var1</td><td>Your age</td></tr>
                <tr><td>\$var2</td><td>$var2</td><td>Years in college</td></tr>
                <tr><td>\$var3</td><td>$var3</td><td>Projects completed</td></tr>
                <tr><td>\$var4</td><td>$var4</td><td>Courses this semester</td></tr>
                <tr><td>\$var5</td><td>$var5</td><td>Intramurals participated</td></tr>
            </table>";
            ?>

            <!-- Floating Point Numbers -->
            <h2>Floating Point Numbers</h2>
            <?php
            // Declare floating-point numbers relevant to your CV
            $gpa = 1.35;
            $attendanceRate = 98.5;
            $projectScore = 92.75;
            $codingHours = 55.3;
            $teamworkRating = 4.8;

            echo "<table>
                <tr><th>Variable</th><th>Value</th><th>Description</th></tr>
                <tr><td>\$gpa</td><td>$gpa</td><td>Your current GPA</td></tr>
                <tr><td>\$attendanceRate</td><td>$attendanceRate%</td><td>Attendance rate</td></tr>
                <tr><td>\$projectScore</td><td>$projectScore%</td><td>Highest project score</td></tr>
                <tr><td>\$codingHours</td><td>$codingHours hours</td><td>Coding hours per week</td></tr>
                <tr><td>\$teamworkRating</td><td>$teamworkRating</td><td>Teamwork rating out of 5</td></tr>
            </table>";
            ?>

            <!-- Strings -->
                <h2>Strings</h2>
            <?php
            // Declare strings relevant to your CV
            $str1 = "Cebu Technological University";
            $str2 = "Information Systems";
            $str3 = "Web Development";
            $str4 = "Data Analytics";
            $str5 = "PHP";

            echo "<table>
                <tr><th>Variable</th><th>Value</th><th>Description</th></tr>
                <tr><td>\$str1</td><td>$str1</td><td>Current university</td></tr>
                <tr><td>\$str2</td><td>$str2</td><td>Your degree program</td></tr>
                <tr><td>\$str3</td><td>$str3</td><td>Field of expertise</td></tr>
                <tr><td>\$str4</td><td>$str4</td><td>Relevant skill</td></tr>
                <tr><td>\$str5</td><td>$str5</td><td>Programming language</td></tr>
            </table>";
            ?>

            <!-- Characters -->
            <h2>Characters</h2>
            <?php
            // Declare characters relevant to your CV context
            $gradeA = 'A';
            $gradeB = 'B';
            $gradeC = 'C';
            $gradeD = 'D';
            $gradeF = 'F';

            echo "<table>
                <tr><th>Variable</th><th>Value</th><th>Description</th></tr>
                <tr><td>\$gradeA</td><td>$gradeA</td><td>Excellent performance</td></tr>
                <tr><td>\$gradeB</td><td>$gradeB</td><td>Good performance</td></tr>
                <tr><td>\$gradeC</td><td>$gradeC</td><td>Average performance</td></tr>
                <tr><td>\$gradeD</td><td>$gradeD</td><td>Below average performance</td></tr>
                <tr><td>\$gradeF</td><td>$gradeF</td><td>Failing grade</td></tr>
            </table>";
            ?>
             <a href="index.php" class="home-button">Home</a>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>Shekinah Mae O. Jubahib October 15, 2024.</p>
    </div>
</body>
</html>
