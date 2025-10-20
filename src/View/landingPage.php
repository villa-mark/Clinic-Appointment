<?php
// Landing Page for Clinic Appointment System
// Author: Mark Anthony Villahermosa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Appointment | Online Booking System</title>
    <link rel="stylesheet" href="/assets/css/landingPage.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1 class="logo">ClinicA</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/index.php/choose" class="btn small">Create Account</a></li>
                    <li><a href="/index.php/login" class="btn-outline small">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h2>Book Appointments Anytime, Anywhere</h2>
            <p>Clinic Appointment is a web-based system that connects patients, doctors, and clinic admins for easy online booking and appointment management.</p>
            <div class="hero-buttons">
                <a href="/index.php/choose" class="btn">Create Account</a>
                <a href="/index.php/login" class="btn-outline">Login</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h3>Core Features</h3>
            <div class="feature-grid">
                <div class="feature-card">
                    <h4>🩺 Online Booking</h4>
                    <p>Patients can quickly request appointments with their preferred doctors.</p>
                </div>
                <div class="feature-card">
                    <h4>📋 Doctor Management</h4>
                    <p>Clinic admins can add, update, or deactivate doctors easily.</p>
                </div>
                <div class="feature-card">
                    <h4>🔐 Role-Based Access</h4>
                    <p>Separate logins for Admins, Doctors, and Patients to ensure secure access.</p>
                </div>
                <div class="feature-card">
                    <h4>💾 MySQL Integration</h4>
                    <p>All data (appointments, profiles, and records) is stored securely in a database.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
    <div class="container">
        <h3>Contact Us</h3>

        <div class="contact-grid">
        <div class="contact-box">
            <p><strong>📍 Address:</strong><br>Cebu City, Philippines</p>
        </div>
        <div class="contact-box">
            <p><strong>📞 Phone:</strong><br>+63 000 000 0000</p>
        </div>
        <div class="contact-box wide">
            <p><strong>📧 Email:</strong><br>support@clinicappt.com</p>
        </div>
        </div>
    </div>
    </section>



    <!-- Footer -->
    <footer>
        <p>© <?php echo date('Y'); ?> Clinic Appointment System | Developed by Mark Anthony Villahermosa</p>
    </footer>
</body>
</html>
