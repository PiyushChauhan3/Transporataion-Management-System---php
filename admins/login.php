<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transportation_ms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $username = trim($_POST['username']);

    // Debug: Print the input values
    echo "Email: $email<br>";
    echo "Password: $password<br>";

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id,username FROM admins WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);

    // Execute and check result
    $stmt->execute();
    $stmt->store_result();

    // Debug: Print the number of rows
    echo "Number of rows: " . $stmt->num_rows . "<br>";

    if ($stmt->num_rows == 0) {
        $_SESSION['admin_loggedin'] = true; // Separate session variable for admin
        $_SESSION['admin_email'] = $email;
        $_SESSION['username'] = $username;
        header("Location: admin1\index.php");
        exit();
    } else {
        echo "Invalid email or password";
    }

    $stmt->close();
}

$conn->close();
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login | Transportation MS</title>
    <link href="admin1/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin1/assets/css/auth.css" rel="stylesheet">
    <style>
        .wrapper{
            background-image: url('vehicle-home.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="admin1/assets/img/tms.png" alt="bootstraper logo">
                    </div>
                    <h6 class="mb-4 text-muted">Login to your account</h6>
                    <form action="" method="POST">
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="mb-3 text-start">
                            <div class="form-check">
                              <input class="form-check-input" name="remember" type="checkbox" value="" id="check1">
                              <label class="form-check-label" for="check1">
                                Remember me on this device
                              </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary shadow-2 mb-4">Login</button>
                    </form>
                    <p class="mb-2 text-muted">Forgot password? <a href="forgot-password.html">Reset</a></p>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="admin1/assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin1/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
