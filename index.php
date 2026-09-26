<<<<<<< HEAD
<?php
 
session_start();
 
if (isset($_POST["login"])) {
 
    $username = $_POST["username"];
    $password = $_POST["password"];
 
    // Store username in session
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
 
    // Create cookie if Remember Me is checked
    if (isset($_POST["remember"])) {
        setcookie(
            "remember_user",
            $username,
=======
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
>>>>>>> e91158970d01a3e29e6da08d561e06c82f9504ae
            time() + (86400 * 30),
            "/"
        );
    }
<<<<<<< HEAD
 
    header("Location: dashboard.php");
    exit();
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Session and Cookie Demo</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
 
<div class="container">
 
    <h2>Login</h2>
 
    <form method="POST">
 
        <label>Username</label>
 
        <input
            type="text"
            name="username"
            required
        >

        <label>Password</label>
 
        <input
            type="number"
            name="password"
            required
        >
 
        <label>
=======

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

>>>>>>> e91158970d01a3e29e6da08d561e06c82f9504ae
            <input
                type="checkbox"
                name="remember"
            >
<<<<<<< HEAD
            Remember Me
        </label>
 
        <button type="submit" name="login">
            Login
        </button>
 
    </form>
 
</div>
 
</body>
</html>
=======

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
>>>>>>> e91158970d01a3e29e6da08d561e06c82f9504ae
