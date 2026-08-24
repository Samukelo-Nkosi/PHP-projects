<?php
// Initializing variables
$studentName = "";
$mathScore = "";
$scienceScore = "";
$englishScore = "";
$total = 0;
$average = 0;
$result = "";
$showResults = false;

// this conditional statement checks if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $studentName = htmlspecialchars($_POST["name"]);
    $mathScore = (int)$_POST["math"];
    $scienceScore = (int)$_POST["science"];
    $englishScore = (int)$_POST["english"];

    // QUESTION 1: Calculate total and average
    $total = $mathScore + $scienceScore + $englishScore;
    $average = $total / 3;

    // QUESTION 2: If/Else statement for Pass/Fail
    if ($average >= 50) {
        $result = "Pass";
    } else {
        $result = "Fail";
    }

    $showResults = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Calculator</title>
    <style>
        body {
            font-family: monospace;
            background-color: #070707;
            margin: 20px;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4c90af;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        button:hover {
            background-color: #1c1d1d;
        }

        .results {
            margin-top: 30px;
            padding: 20px;
            background-color: #f9f9f9;
            border-left: 4px solid #4c90af;
            border-radius: 4px;
        }

        .results h2 {
            color: #333;
            margin-top: 0;
        }

        .result-item {
            margin: 10px 0;
            font-size: 16px;
        }

        .result-label {
            font-weight: bold;
            color: #555;
        }

        .pass {
            color: #4c98af;
            font-weight: bold;
        }

        .fail {
            color: #f44336;
            font-weight: bold;
        }

        .scores-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .scores-table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .scores-table td:first-child {
            font-weight: bold;
            color: #555;
        }

        .scores-table td:last-child {
            text-align: right;
            color: #4c90af;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Student Grade Calculator</h1>

        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Student Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="math">Mathematics Score (0-100):</label>
                <input type="number" id="math" name="math" min="0" max="100" required>
            </div>

            <div class="form-group">
                <label for="science">Science Score (0-100):</label>
                <input type="number" id="science" name="science" min="0" max="100" required>
            </div>

            <div class="form-group">
                <label for="english">English Score (0-100):</label>
                <input type="number" id="english" name="english" min="0" max="100" required>
            </div>

            <button type="submit">Calculate Grades</button>
        </form>

        <?php if ($showResults): ?>
            <div class="results">
                <h2>Results for <?php echo $studentName; ?></h2>

                <div class="result-item">
                    <span class="result-label">Total Score:</span>
                    <?php echo $total; ?>/300
                </div>

                <div class="result-item">
                    <span class="result-label">Average Score:</span>
                    <?php echo number_format($average, 2); ?>
                </div>

                <div class="result-item">
                    <span class="result-label">Status:</span>
                    <span class="<?php echo ($result === "Pass") ? "pass" : "fail"; ?>">
                        <?php echo $result; ?>
                    </span>
                </div>

                <h3>Subject Scores</h3>

                <!-- QUESTION 3: Loop through arrays to display scores -->
                <?php
                // Create arrays for subject names and scores
                $subjectNames = array("Mathematics", "Science", "English");
                $scores = array($mathScore, $scienceScore, $englishScore);

                // For loop to display each subject and its score
                echo '<table class="scores-table">';
                for ($i = 0; $i < 3; $i++) {
                    echo "<tr>";
                    echo "<td>" . $subjectNames[$i] . "</td>";
                    echo "<td>" . $scores[$i] . "</td>";
                    echo "</tr>";
                }
                echo '</table>';
                ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>