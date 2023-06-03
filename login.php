<?php
    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the submitted username and password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate the username and password
        if ($username === 'admin' && $password === 'password') {
            // Redirect to the index page or any other page you want
            header('Location: index.php');
            exit;
        } else {
            // Invalid credentials, show an error message
            $errorMessage = 'Invalid username or password';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRS - LOGIN</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <h2 class="text-center">
            IRS - LOGIN
        </h2>
    </header>
    <br>
    <div class="login-container">
        <?php if (isset($errorMessage)): ?>
            <p class="error-message"><?php echo $errorMessage; ?></p>
        <?php endif; ?>
        <a href="login.html" class="back-link">Back to Login</a>
    </div>
</body>
</html>
