<?php
session_start();

// Prevent direct access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['error'] = "Invalid access. Please submit the form properly.";
    header("Location: Index.php");
    exit();
}

$username = trim($_POST['username']);
$jobtitle = trim($_POST['jobtitle']);
$language = trim($_POST['language']);

// Validate fields
if (empty($_POST['username'])) {
    $_SESSION['error'] = "Username is required.";
    header("Location: Index.php");
    exit();
}

if (strlen($username) < 3) {
    $_SESSION['error'] = "Username must be at least 3 characters long.";
    header("Location: Index.php");
    exit();
}

if (empty($_POST['jobtitle'])) {
    $_SESSION['error'] = "Job Title is required.";
    header("Location: Index.php");
    exit();
}

if (empty($_POST['language'])) {
    $_SESSION['error'] = "Favorite Programming Language is required.";
    header("Location: Index.php");
    exit();
}

// Secure input
$username = htmlspecialchars($_POST['username']);
$jobtitle = htmlspecialchars($_POST['jobtitle']);
$language = htmlspecialchars($_POST['language']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Registration Successful!</h4>
        </div>
        <div class="card-body">

            <p><strong>Username:</strong> <?php echo $username; ?></p>
            <p><strong>Job Title:</strong> <?php echo $jobtitle; ?></p>
            <p><strong>Favorite Programming Language:</strong> <?php echo $language; ?></p>

            <a href="Index.php" class="btn btn-secondary mt-3">
                Register Again
            </a>

        </div>
    </div>
</div>

</body>
</html>