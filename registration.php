```php
<?php

session_start();

// Check whether registration information exists
if (!isset($_SESSION["student_id"])) {

    header("Location: index.php");
    exit();

}

// Retrieve information from session
$student_id = $_SESSION["student_id"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$department = $_SESSION["department"];

$semester = $_SESSION["semester"];
$course = $_SESSION["course"];
$credits = $_SESSION["credits"];

// Retrieve Student ID from cookie
if (isset($_COOKIE["remember_student_id"])) {

    $cookie_student_id = $_COOKIE["remember_student_id"];

} else {

    $cookie_student_id = "No cookie found";

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration Review</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>University Portal</h1>

    <h2>Registration Review</h2>

    <div class="info">

        <h3>Student Information</h3>

        <p>
            <strong>Student ID:</strong>
            <?php echo $student_id; ?>
        </p>

        <p>
            <strong>Name:</strong>
            <?php echo $name; ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?php echo $email; ?>
        </p>

        <p>
            <strong>Department:</strong>
            <?php echo $department; ?>
        </p>

    </div>

    <div class="info">

        <h3>Academic Information</h3>

        <p>
            <strong>Semester:</strong>
            <?php echo $semester; ?>
        </p>

        <p>
            <strong>Course:</strong>
            <?php echo $course; ?>
        </p>

        <p>
            <strong>Credits:</strong>
            <?php echo $credits; ?>
        </p>

    </div>

    <div class="cookie-box">

        <h3>Cookie Information</h3>

        <p>
            <strong>Remembered Student ID:</strong>
            <?php echo $cookie_student_id; ?>
        </p>

        <p>
            This Student ID was retrieved from the browser cookie.
        </p>

    </div>

    <a href="complete.php" class="complete-button">
        Complete Registration
    </a>

    <a href="index.php" class="back-button">
        Start Again
    </a>

</div>

</body>

</html>
```
