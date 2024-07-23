<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_loggedin']) || $_SESSION['user_loggedin'] !== true) {
    // If the user is not logged in, redirect to the login page
    header("Location: login-signup.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrier Network - Transportation MS</title>
    <link rel="stylesheet" href="style.css">
    <!-- Include any additional stylesheets or fonts as needed -->
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Noto Sans', sans-serif;
            line-height: 1.6;
        }

       

        

        /* Hero section styles */
        .hero-image {
            width: 100%;
            height: auto;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        .hero-heading {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .hero-button {
            display: inline-block;
            padding: 12px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .hero-button:hover {
            background-color: #45a049;
        }

        /* Benefits section styles */
        .carrier-network-benefits {
            background-color: #f9f9f9;
            padding: 40px 0;
            text-align: center;
        }

        .section-heading {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .benefits-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
        }

        .benefit-item {
            flex: 0 1 30%;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            text-align: left;
        }

        .benefit-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .benefit-description {
            font-size: 1.1rem;
        }

        /* Application form styles */
        .carrier-network-form {
            background-color: #333;
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }

        .form-heading {
            margin-bottom: 30px;
        }

        .form-label {
            display: block;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .form-input {
            width: 50%;
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 15px;
            border: 2px solid;
            border-radius: 5px;
        }

        .form-button {
            padding: 12px 30px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-button:hover {
            background-color: #45a049;
        }

        /* Footer styles */
        .footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .social-links {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .social-links li {
            display: inline-block;
            margin-right: 10px;
        }

        .social-links li:last-child {
            margin-right: 0;
        }

        .social-links a {
            color: #fff;
        }

        .social-links img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            transition: transform 0.3s ease;
        }

        .social-links img:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <div class="carrier-network-container">
        <!-- Navigation Bar -->
        <div class="navbar-container">
            <?php include 'navbar4.php'; ?>
        </div>

        <!-- Carrier Network Hero Section -->
        <div class="carrier-network-hero">
            <img src="vehicle-home.jpg" alt="Carrier Network" class="hero-image">
            <div class="hero-content">
                <h1 class="hero-heading">Join Our Carrier Network</h1>
                <p class="hero-text">
                    Efficiently collaborate with us to provide reliable transportation services to our clients.
                </p>
                <a href="#carrier-benefits" class="hero-button">Explore Benefits</a>
            </div>
        </div>

        <!-- Carrier Network Benefits Section -->
        <div id="carrier-benefits" class="carrier-network-benefits">
            <div class="benefits-heading">
                <h2 class="section-heading">Why Join Our Carrier Network?</h2>
            </div>
            <div class="benefits-list">
                <div class="benefit-item">
                    <h3 class="benefit-title">Increased Opportunities</h3>
                    <p class="benefit-description">Access to a broad range of transportation projects and opportunities.
                    </p>
                </div>
                <div class="benefit-item">
                    <h3 class="benefit-title">Efficient Collaboration</h3>
                    <p class="benefit-description">Streamlined communication and collaboration with our team.</p>
                </div>
                <div class="benefit-item">
                    <h3 class="benefit-title">Reliable Payments</h3>
                    <p class="benefit-description">Timely and reliable payment for services rendered.</p>
                </div>
            </div>
        </div>

        <!-- Carrier Network Application Form -->
        <div class="carrier-network-form">
            <div class="form-heading">
                <h2 class="section-heading">Apply Now</h2>
            </div>
            <form action="submit_application.php" method="POST" class="application-form">
                <div class="form-group">
                    <label for="company-name" class="form-label">Company Name</label>
                    <input type="text" id="company-name" name="company-name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="contact-person" class="form-label">Contact Person</label>
                    <input type="text" id="contact-person" name="contact-person" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-input" required>
                </div>
                <button type="submit" class="form-button">Submit Application</button>
            </form>
        </div>

        <!-- Footer Section -->
        <footer class="footer">
            <?php include 'footer.php'; ?>
        </footer>
    </div>
</body>

</html>