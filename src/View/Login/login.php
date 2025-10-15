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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Root Palette */
        :root {
            --teal-dark: #2b7a78;
            --teal-medium: #3aafa9;
            --teal-light: #def2f1;
            --white: #ffffff;
            --black: #17252a;
        }

        /* Layout Base */
        body {
            margin: 0;
            height: 100vh;
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, var(--teal-light), var(--white));
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Login Card */
        .login-container {
            width: 100%;
            max-width: 420px;
            background: var(--white);
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            padding: 40px 35px;
            text-align: center;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(15px);}
            to {opacity: 1; transform: translateY(0);}
        }

        .login-container h2 {
            color: var(--teal-dark);
            font-size: 1.8rem;
            margin-bottom: 8px;
        }

        .login-container .subtitle {
            color: #555;
            font-size: 0.95rem;
            margin-bottom: 25px;
        }

        /* Form */
        form {
            text-align: left;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--teal-dark);
            margin-bottom: 6px;
        }

        input, select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        input:focus, select:focus {
            border-color: var(--teal-medium);
            box-shadow: 0 0 5px rgba(58,175,169,0.4);
            outline: none;
        }

        /* Button */
        .btn {
            width: 100%;
            background: var(--teal-medium);
            color: var(--white);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            margin-top: 10px;
        }

        .btn:hover {
            background: var(--teal-dark);
            transform: scale(1.02);
        }

        /* Footer Links */
        .register-text {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #475569;
        }

        .register-text a {
            color: var(--teal-medium);
            text-decoration: none;
            font-weight: 600;
            transition: 0.2s;
        }

        .register-text a:hover {
            color: var(--teal-dark);
            text-decoration: underline;
        }

        .back-home {
            display: inline-block;
            margin-top: 15px;
            color: #555;
            font-size: 0.85rem;
            text-decoration: none;
            transition: color 0.2s;
        }

        .back-home:hover {
            color: var(--teal-medium);
        }

        .back-arrow {
            margin-right: 5px;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Welcome Back</h2>
        <p class="subtitle">Log in to manage your appointments</p>

        <form action="/Controller/Auth/authenticate.php" method="POST">
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

            <button type="submit" class="btn">Login</button>
        </form>

        <p class="register-text">
            Don’t have an account? <a href="/index.php/choose">Create one</a>
        </p>

        <a href="/index.php/" class="back-home">
            <span class="back-arrow">←</span> Back to Home
        </a>
    </div>
</body>
</html>
