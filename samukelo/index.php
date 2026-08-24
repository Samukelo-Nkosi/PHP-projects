<!DOCTYPE html>
<html>

<head>
    <title>www.Samukelo Nkosi.co.za</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #000000;
            text-align: center;
            padding: 50px;
        }

        .container {
            background-color: white;
            width: 50%;
            margin: 0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px blueviolet;
        }

        h1 {
            color: #8b4f00;
        }
    </style>
</head>

<body>


    <div class="container">
        <h1>About Me</h1>

        <?php
        $name = "Samukelo";
        $surname = "Nkosi";
        $institution = "University Of Mpumalanga";
        $course = "ICT";
        $year = "2nd Year";
        $careerGoal = "Application Developer";

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Surname:</strong> $surname</p>";

        echo "<p><strong>Year:</strong> $year</p>";
        echo "<p><strong>Career Goal:</strong> $careerGoal</p>";
        ?>

        <h2>My Skills</h2>

        <ul style="list-style-position: inside;">
            <li>Java</li>
            <li>Python</li>
            <li>C++</li>
            <li>HTML & CSS</li>
            <li>PHP</li>
            <li>MySQL</li>
        </ul>

    </div>

</body>

</html>