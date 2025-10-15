<?php
// Register Page for Clinic Appointment System
// Author: Mark Anthony Villahermosa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/registerStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="register-body">

    <div class="register-container">
        <div class="register-card">
            <h2>Create Your Account</h2>
            <p class="subtitle">Join ClinicA and start booking appointments online</p>

            <form action="register_process.php" method="POST" class="register-form">

                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Create a username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a password" required>
                </div>

                <div class="form-group">
                    <label for="role">Register as</label>
                    <select id="role" name="role" required>
                        <option value="">Select Role</option>
                        <option value="patient">Patient</option>
                        <option value="doctor">Doctor</option>
                        <option value="admin">Clinic Admin</option>
                    </select>
                </div>

                <button type="submit" class="btn full">Register</button>
            </form>

            <p class="login-text">
                Already have an account? <a href="/index.php/login">Login here</a>
            </p>
        </div>
    </div>

</body>
</html>
