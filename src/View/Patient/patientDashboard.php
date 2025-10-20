<?php
// Patient Dashboard
// Author: Mark Anthony Villahermosa
session_start();

// Simulated logged-in patient
$patientName = "John Doe";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css" />
    <link rel="stylesheet" href="/assets/css/patient/patientDashboard.css">
</head>
<body>
<div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div>
            <h2>ClinicA</h2>
            <nav>
                <ul>
                <li><a href="#" class="active">🏠 Dashboard</a></li>
                    <li><a href="/index.php/patient/search" >🧬 Search Disease</a></li>
                    <li><a href="/index.php/patient/appointment">📅 My Appointments</a></li>
                    <li><a href="/index.php/patient/profile">👤 Profile</a></li>
                </ul>
            </nav>
        </div>
        <a href="/index.php/" class="logout-btn">Logout</a>
    </aside>

    <!-- Main -->
    <main class="main-content">
        <div class="main-header">
            <div>
                <h1>Welcome, <?= htmlspecialchars($patientName); ?>!</h1>
                <p>Here’s a summary of your appointments and activity.</p>
            </div>
        </div>

        <section class="appointments">
            <h2>My Appointments</h2>
            <table class="appointment-list">
                <thead>
                    <tr>
                        <th>Doctor</th>
                        <th>Specialization</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dr. Maria Santos</td>
                        <td>Cardiology</td>
                        <td>Oct 18, 2025 - 10:00 AM</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>Dr. Jason Dela Cruz</td>
                        <td>Dermatology</td>
                        <td>Oct 20, 2025 - 2:00 PM</td>
                        <td><span class="status accepted">Accepted</span></td>
                    </tr>
                    <tr>
                        <td>Dr. Angela Reyes</td>
                        <td>Pediatrics</td>
                        <td>Oct 25, 2025 - 9:30 AM</td>
                        <td><span class="status declined">Declined</span></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <footer>© 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa</footer>
    </main>
</div>
</body>
</html>
