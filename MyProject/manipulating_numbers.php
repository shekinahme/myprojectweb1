<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="manipulateNumsGenStyle.css">
    <link rel="stylesheet" href="bodyConBut.css">
    <title>Grade Calculation</title>
</head>
<body>

<!-- Header -->
<div class="header">    
    <h1>Welcome to My Manipulating Numbers Page</h1>
</div>

<div class="container">
    <div class="content">   
        <h2 class="title">Grade Calculation</h2>

        <form method="POST">
            <h2>Midterm Grade Calculation</h2>
            <!-- Input for midterm quizzes -->
            <div class="form-group">
                <label for="midtermQuizzes">Enter 3 to 5 quiz scores for Midterm (comma-separated):</label>
                <input type="text" id="midtermQuizzes" name="midtermQuizzes" required placeholder="e.g., 85, 90, 78">
            </div>

            <!-- Input for midterm projects -->
            <div class="form-group">
                <label for="midtermProjects">Enter 1 to 2 project scores for Midterm (comma-separated):</label>
                <input type="text" id="midtermProjects" name="midtermProjects" required placeholder="e.g., 90, 85">
            </div>

            <!-- Input for midterm exam -->
            <div class="form-group">
                <label for="midtermExam">Enter Midterm Exam score:</label>
                <input type="number" id="midtermExam" name="midtermExam" required placeholder="e.g., 88">
            </div>

            <h2>Tentative Grade Calculation</h2>
            <!-- Input for tentative quizzes -->
            <div class="form-group">
                <label for="tentativeQuizzes">Enter 3 to 5 quiz scores for Tentative (comma-separated):</label>
                <input type="text" id="tentativeQuizzes" name="tentativeQuizzes" required placeholder="e.g., 85, 90, 78">
            </div>

            <!-- Input for tentative projects -->
            <div class="form-group">
                <label for="tentativeProjects">Enter 1 to 2 project scores for Tentative (comma-separated):</label>
                <input type="text" id="tentativeProjects" name="tentativeProjects" required placeholder="e.g., 90, 85">
            </div>

            <!-- Input for tentative major exam -->
            <div class="form-group">
                <label for="tentativeExam">Enter Tentative Exam score:</label>
                <input type="number" id="tentativeExam" name="tentativeExam" required placeholder="e.g., 91">
            </div>

            <!-- Submit button -->
            <button type="submit">Calculate Grades</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Capture user input for midterm
            $midtermQuizzesInput = $_POST['midtermQuizzes'];
            $midtermProjectsInput = $_POST['midtermProjects'];
            $midtermExam = (float) $_POST['midtermExam'];

            // Capture user input for tentative
            $tentativeQuizzesInput = $_POST['tentativeQuizzes'];
            $tentativeProjectsInput = $_POST['tentativeProjects'];
            $tentativeExam = (float) $_POST['tentativeExam'];

            // Convert comma-separated values to arrays for midterm
            $midtermQuizzes = array_map('floatval', explode(',', $midtermQuizzesInput));
            $midtermProjects = array_map('floatval', explode(',', $midtermProjectsInput));

            // Convert comma-separated values to arrays for tentative
            $tentativeQuizzes = array_map('floatval', explode(',', $tentativeQuizzesInput));
            $tentativeProjects = array_map('floatval', explode(',', $tentativeProjectsInput));

            // Ensure valid input
            if (
                count($midtermQuizzes) < 3 || count($midtermQuizzes) > 5 || 
                count($midtermProjects) < 1 || count($midtermProjects) > 2 ||
                count($tentativeQuizzes) < 3 || count($tentativeQuizzes) > 5 || 
                count($tentativeProjects) < 1 || count($tentativeProjects) > 2
            ) {
                echo "<p style='color: red;'>Please enter 3 to 5 quizzes and 1 to 2 projects for both Midterm and Tentative calculations.</p>";
            } else {
                // Calculate averages for midterm
                $averageMidtermQuizzes = array_sum($midtermQuizzes) / count($midtermQuizzes);
                $averageMidtermProjects = array_sum($midtermProjects) / count($midtermProjects);

                // Calculate midterm grade
                $midtermGrade = ($averageMidtermQuizzes * 0.30) + ($averageMidtermProjects * 0.20) + ($midtermExam * 0.50);

                // Calculate averages for tentative
                $averageTentativeQuizzes = array_sum($tentativeQuizzes) / count($tentativeQuizzes);
                $averageTentativeProjects = array_sum($tentativeProjects) / count($tentativeProjects);

                // Calculate tentative grade
                $tentativeGrade = ($averageTentativeQuizzes * 0.30) + ($averageTentativeProjects * 0.20) + ($tentativeExam * 0.50);

                // Calculate the final-final grade
                $finalFinalGrade = ($midtermGrade + $tentativeGrade) / 2;

                // Display results
                echo "<h2>Grading Results</h2>";
                echo "<table>
                        <tr>
                            <th>Grading Period</th>
                            <th>Average Quizzes (30%)</th>
                            <th>Average Projects (20%)</th>
                            <th>Exam Score (50%)</th>
                            <th>Grade</th>
                        </tr>
                        <tr>
                            <td>Midterm</td>
                            <td>" . number_format($averageMidtermQuizzes, 2) . "</td>
                            <td>" . number_format($averageMidtermProjects, 2) . "</td>
                            <td>$midtermExam</td>
                            <td>" . number_format($midtermGrade, 2) . "</td>
                        </tr>
                        <tr>
                            <td>Tentative</td>
                            <td>" . number_format($averageTentativeQuizzes, 2) . "</td>
                            <td>" . number_format($averageTentativeProjects, 2) . "</td>
                            <td>$tentativeExam</td>
                            <td>" . number_format($tentativeGrade, 2) . "</td>
                        </tr>
                        <tr>
                            <td colspan='4'><strong>Final-Final Grade</strong></td>
                            <td><strong>" . number_format($finalFinalGrade, 2) . "</strong></td>
                        </tr>
                    </table>";
            }
        }
        ?>
         <a href="index.php" class="home-button">Home</a>
    </div>
</div>

<!-- Footer Section -->
<div class="footer">
    <p>Shekinah Mae O. Jubahib October 16, 2024.</p>
</div>
</body>
</html>
