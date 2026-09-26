```php
<?php

session_start();

// Check whether student information exists
if (!isset($_SESSION["student_id"])) {

    header("Location: index.php");
    exit();

}

// Retrieve student information from session
$student_id = $_SESSION["student_id"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$department = $_SESSION["department"];

if (isset($_POST["next"])) {

    $semester = $_POST["semester"];
    $course = $_POST["course"];
    $credits = $_POST["credits"];

    // Store academic information in session
    $_SESSION["semester"] = $semester;
    $_SESSION["course"] = $course;
    $_SESSION["credits"] = $credits;

    header("Location: registration.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Academic Information</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>University Portal</h1>

    <h2>Academic Information</h2>

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

    <form method="POST">

        <label>Semester</label>

        <select name="semester" required>

            <option value="">Select Semester</option>

            <option value="Spring 2026">
                Spring 2026
            </option>

            <option value="Summer 2026">
                Summer 2026
            </option>

            <option value="Fall 2026">
                Fall 2026
            </option>

        </select>

        <label>Course Selection</label>

        <select name="course" required>

            <option value="">Select Course</option>

            <option value="Web Technology">
                Web Technology
            </option>

            <option value="Database Systems">
                Database Systems
            </option>

            <option value="Computer Networks">
                Computer Networks
            </option>

            <option value="Operating Systems">
                Operating Systems
            </option>

            <option value="Machine Learning">
                Machine Learning
            </option>

        </select>

        <label>Credit Information</label>

        <input
            type="number"
            name="credits"
            min="1"
            max="30"
            placeholder="Enter total credits"
            required
        >

        <button type="submit" name="next">
            Review Registration
        </button>

    </form>

</div>

</body>

</html>
```
