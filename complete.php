```php
<?php

session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration Complete</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>University Portal</h1>

    <div class="success-box">

        <h2>Registration Completed Successfully!</h2>

        <p>
            Your university registration has been completed.
        </p>

        <p>
            The session data has been removed using
            <strong>session_unset()</strong> and
            <strong>session_destroy()</strong>.
        </p>

    </div>

    <a href="index.php" class="complete-button">
        New Registration
    </a>

</div>

</body>

</html>
```
