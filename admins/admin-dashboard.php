<?php
session_start();

if (!isset($_SESSION['admin_loggedin']) || $_SESSION['admin_loggedin'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Include necessary CSS files -->
    <link rel="stylesheet" href="admin.css">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>

<body>
    <header>
        <div class="logo">
            <img src="path_to_your_logo" alt="Logo">
        </div>
        <div class="admin-profile">
            <img src="path_to_admin_photo" alt="Admin Photo">
            <span><?php echo $_SESSION['username']; ?></span>
            <a href="logout.php">Logout</a>
        </div>
    </header>
    
    <aside class="sidebar">
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li>
                <a href="#">Ticket Booking</a>
                <ul class="submenu">
                    <li><a href="bus_booking.php">Bus Booking</a></li>
                    <li><a href="train_booking.php">Train Booking</a></li>
                    <li><a href="flight_booking.php">Flight Booking</a></li>
                </ul>
            </li>
            <li><a href="vehicle_booking.php">Vehicle Booking</a></li>
            <li><a href="payment_management.php">Payment Management</a></li>
            <li><a href="user_management.php">User Management</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </aside>

    <main>
        <!-- Dashboard section -->
        <section class="dashboard">
            <h2>Dashboard</h2>
            <!-- Display metrics, graphs, etc. -->
            <div class="metrics">
                <!-- Metrics display here -->
            </div>
            <div class="graph">
                <!-- Graph display here -->
            </div>
        </section>
    </main>

    <!-- Include necessary JS files -->
    <script src="admin.js"></script>
</body>

</html>
