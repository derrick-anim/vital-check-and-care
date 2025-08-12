<?php
session_start(); // Start the session

// Simulate setting admin session (remove or change in real usage)
if (!isset($_SESSION['admin'])) {
    $_SESSION['admin'] = false; // Set to true to simulate admin
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $file = "bookings.json"; // JSON file path

    // New booking details from form
    $newBooking = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "date" => $_POST['date'],
        "time" => $_POST['time'],
        "doctor" => $_POST['doctor'],
        "reason" => $_POST['reason']
    ];

    // Read existing data
    if (file_exists($file)) {
        $data = json_decode(file_get_contents($file), true);
        if (!is_array($data)) {
            $data = [];
        }
    } else {
        $data = [];
    }

    // Append new booking
    $data[] = $newBooking;

    // Save back to file
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

    // Confirmation message
    echo "<p style='color:green;'>Booking saved successfully!</p>";
}

// Load all bookings
$file = "bookings.json";
if (file_exists($file)) {
    $bookings = json_decode(file_get_contents($file), true);
    if (!is_array($bookings)) {
        $bookings = [];
    }
} else {
    $bookings = [];
}

$isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] === true;
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exam</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="tailwind.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
            color: black;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
    </style>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="CARDIOGRAM_LOGOHEALTH_LOGOCADIOLOGY_LOGO_-_Made_with_PosterMyWall-removebg-preview.png" alt=""></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="bookings.php">BOOKINGS</a></li>
                    <li><a href="history.php">HISTORY</a></li>
                    <li><a href="chat box.php">HELP CHAT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>
        <h1>Book All Appointments Here 👍👇</h1>
    </section>

    <section>
    <?php if ($isAdmin): ?>
        <div class="contaner ">
            <h2>List of Bookings</h2>
            <?php if (empty($bookings)) : ?>
                <p>No bookings found.</p>
            <?php else : ?>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Doctor</th>
                            <th>Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $index => $booking) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= htmlspecialchars($booking['name']) ?></td>
                                <td><?= htmlspecialchars($booking['email']) ?></td>
                                <td><?= htmlspecialchars($booking['phone']) ?></td>
                                <td><?= htmlspecialchars($booking['date']) ?></td>
                                <td><?= htmlspecialchars($booking['time']) ?></td>
                                <td><?= htmlspecialchars($booking['doctor']) ?></td>
                                <td><?= htmlspecialchars($booking['reason']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="container">
            <h2>Appointment Booking Form</h2>
            <form method="POST" action="">
                <label>Full Name</label>
                <input type="text" name="name" required>

                <label>Email Address</label>
                <input type="email" name="email" required>

                <label>Phone Number</label>
                <input type="tel" name="phone" required>

                <label>Appointment Date</label>
                <input type="date" name="date" required>

                <label>Appointment Time</label>
                <input type="time" name="time" required>

                <label>Select Doctor</label>
                <select name="doctor" required>
                    <option value="">-- Choose a doctor --</option>
                    <option value="Dr. John Smith - Cardiologist">Dr. John Smith - Cardiologist</option>
                    <option value="Dr. Lisa Green - Pediatrician">Dr. Lisa Green - Pediatrician</option>
                    <option value="Dr. Mark Brown - General Practitioner">Dr. Mark Brown - General Practitioner</option>
                </select>

                <label>Reason for Visit</label>
                <textarea name="reason" rows="4"></textarea>

                <button type="submit">Book Appointment</button>
            </form>
        </div>
    <?php endif; ?>
</section>


    <section class="FOOTER">
        <h4>BOOK US NOW</h4>
        <p>At VIITAL CHECKS & CARE, we are committed to providing high-quality, patient-centered healthcare through advanced medical technology and compassionate care...</p>
        <div class="icons flex justify-center">
            <img width="48" height="48" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/>
            <img width="48" height="48" src="https://img.icons8.com/color/48/instagram-new--v1.png" alt="instagram-new--v1"/>
            <img width="48" height="48" src="https://img.icons8.com/color/48/twitter--v1.png" alt="twitter--v1"/>
            <img width="48" height="48" src="https://img.icons8.com/color/48/linkedin.png" alt="linkedin"/>
        </div>
        <p> &copy; 2025 Vitals Checks & Care. All Rights Reserved.</p>
    </section>

    <script>
        var navlinks = document.getElementById("navlinks");
        function showmenu() {
            navlinks.style.right = "0";
        }
        function hidemenu() {
            navlinks.style.right = "-200px";
        }
    </script>
</body>
</html>
