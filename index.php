```php
<?php

session_start();

if (isset($_POST["next"])) {

    $student_id = $_POST["student_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $department = $_POST["department"];

    // Store student information in session
    $_SESSION["student_id"] = $student_id;
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["department"] = $department;

    // Create cookie if Remember Student ID is checked
    if (isset($_POST["remember"])) {

        setcookie(
            "remember_student_id",
            $student_id,
            time() + (86400 * 30),
            "/"
        );
    }

    header("Location: academic.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>University Portal Registration</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>University Portal</h1>

    <h2>Student Registration</h2>

    <form method="POST">

        <label>Student ID</label>

        <input
            type="text"
            name="student_id"
            value="<?php
                if (isset($_COOKIE["remember_student_id"])) {
                    echo $_COOKIE["remember_student_id"];
                }
            ?>"
            required
        >

        <label>Student Name</label>

        <input
            type="text"
            name="name"
            required
        >

        <label>Email Address</label>

        <input
            type="email"
            name="email"
            required
        >

        <label>Department</label>

        <select name="department" required>

            <option value="">Select Department</option>

            <option value="Computer Science">
                Computer Science
            </option>

            <option value="Software Engineering">
                Software Engineering
            </option>

            <option value="Electrical Engineering">
                Electrical Engineering
            </option>

            <option value="Business Administration">
                Business Administration
            </option>

            <option value="Civil Engineering">
                Civil Engineering
            </option>

        </select>

        <label class="checkbox-label">

            <input
                type="checkbox"
                name="remember"
            >

            Remember Student ID

        </label>

        <button type="submit" name="next">
            Next: Academic Information
        </button>

    </form>

</div>

</body>

</html>
```
