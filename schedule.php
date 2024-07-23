<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vehicle Booking</title>
    <link href="index.css" rel="stylesheet" />
    <link rel="stylesheet" href="vehicle.css?v=1">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

       

       

        .header h3 {
            padding-top: 2em;
            padding-bottom: 2em;
            font-size: 35px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            
            border-collapse: collapse;
            background-image: url('your-background-image.jpg'); /* Replace with your image path */
            background-size: cover;
            color: #fff;
            text-align: center;
        }

        table thead th {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 10px;
        }

        table tbody td {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px;
            border: 1px solid #fff;
        }

        table tbody tr:nth-child(odd) {
            background-color: rgba(0, 0, 0, 0.5);
        }

        table tbody tr:nth-child(even) {
            background-color: rgba(0, 0, 0, 0.6);
        }

        table tbody tr:hover {
            background-color: rgba(255, 165, 0, 0.8);
        }
    </style>
</head>

<body>
    <div class="navbar4-container">
        <?php include 'navbar4.php'; ?>
    </div>

    <div class="vehicle-booking">
        <div class="vehicle-nav">
            <ul>
                <li><a href="vehicle_booking.php">Home</a></li>
                <li><a href="vehicle-list.php">Vehicle</a></li>
                <li><a href="driver-list.php">Driver</a></li>
                <li><a href="schedule.php">Schedule</a></li>
            </ul>
        </div>
        <div class="container foo">
            <div class="row header" style="text-align:center">
                <h3>Schedule</h3>
            </div>

            <table id="myTable" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>ROUTE</th>
                        <th>FIRST-SHIFT</th>
                        <th>SECOND-SHIFT</th>
                        <th>THIRD-SHIFT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Rajkot-Vadodara</td>
                        <td>3-45</td>
                        <td>4-45</td>
                        <td>6-15</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Rajkot-Mumbai</td>
                        <td>4-00</td>
                        <td>5-00</td>
                        <td>6-30</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Surat-Delhi</td>
                        <td>4-15</td>
                        <td>5-15</td>
                        <td>6-45</td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Delhi-Mumbai</td>
                        <td>4-30</td>
                        <td>5-30</td>
                        <td>7-00</td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Banglore-Chhenai</td>
                        <td>4-45</td>
                        <td>5-45</td>
                        <td>7-15</td>
                    </tr>
                    <tr>
                        <td>06</td>
                        <td>Chhenai-Delhi</td>
                        <td>5-00</td>
                        <td>6-00</td>
                        <td>7-30</td>
                    </tr>
                    <tr>
                        <td>07</td>
                        <td>Surat-Goa</td>
                        <td>5-00</td>
                        <td>6-00</td>
                        <td>7-15</td>
                    </tr>
                    <tr>
                        <td>08</td>
                        <td>Delhi-Assam</td>
                        <td>4-45</td>
                        <td>5-45</td>
                        <td>7-00</td>
                    </tr>
                    <tr>
                        <td>09</td>
                        <td>Hydrabad-Delhi</td>
                        <td>4-30</td>
                        <td>5-30</td>
                        <td>6-45</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Rajkot-Banglore</td>
                        <td>4-15</td>
                        <td>5-15</td>
                        <td>6-35</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <script>
            window.sr = ScrollReveal();
            sr.reveal('.foo', { duration: 800 });
        </script>
    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
