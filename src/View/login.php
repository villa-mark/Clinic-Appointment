<?php
// Login Page for Clinic Appointment System
// Author: Mark Anthony Villahermosa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/loginStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .back-home {
            display: inline-block;
            margin-top: 1rem;
            color: #333;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.2s ease-in-out;
        }

        .back-home:hover {
            color: #007BFF;
        }

        .back-arrow {
            margin-right: 5px;
        }
    </style>
</head>
<body class="login-body">

    <div class="login-container">
        <div class="login-card">
            <h2>Welcome Back</h2>
            <p class="subtitle">Log in to manage your appointments</p>

            <form action="/authenticate.php" method="POST" class="login-form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="form-group">
                    <label for="role">Login as</label>
                    <select id="role" name="role" required>
                        <option value="">Select Role</option>
                        <option value="admin">Clinic Admin</option>
                        <option value="doctor">Doctor</option>
                        <option value="patient">Patient</option>
                    </select>
                </div>

                <button type="submit" class="btn full" id="login-button" >Login</button>
            </form>

            <p class="register-text">
                Don’t have an account? <a href="/index.php/choose">Create one</a>
            </p>

            <a href="/index.php/" class="back-home">
                <span class="back-arrow">←</span> Back to Home
            </a>
        </div>
    </div>

</body>
</html>
