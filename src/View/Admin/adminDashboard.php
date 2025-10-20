<?php
// Clinic Admin Dashboard
// Author: Mark Anthony Villahermosa
session_start();

// Example: Simulated logged-in clinic admin
$clinicName = "ClinicA"; // Replace with session data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Admin Dashboard | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css">
    <link rel="stylesheet" href="/assets/css/admin/adminDashboard.css">

</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div>
                <h2><?= htmlspecialchars($clinicName); ?></h2>
                <nav>
                    <ul>
                        <li><a href="#" class="active">🏠 Dashboard</a></li>
                        <li><a href="/index.php/admin/manage">👨‍⚕️ Manage Doctors</a></li>
                        <li><a href="/index.php/admin/patient">🧑‍🤝‍🧑 View Patients</a></li>
                        <li><a href="/index.php/admin/appointment">📅 Appointments</a></li>
                        <li><a href="/index.php/admin/setting">⚙️ Settings</a></li>
                    </ul>
                </nav>
            </div>
            <a href="/index.php/" class="logout-btn">Logout</a>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="main-header">
                <div>
                    <h1>Welcome, Admin!</h1>
                    <p>Here’s an overview of your clinic’s performance.</p>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="stats">
                <div class="card">
                    <h3>8</h3>
                    <p>Total Doctors</p>
                </div>
                <div class="card">
                    <h3>6</h3>
                    <p>Active Doctors</p>
                </div>
                <div class="card">
                    <h3>120</h3>
                    <p>Total Patients</p>
                </div>
                <div class="card">
                    <h3>35</h3>
                    <p>Pending Appointments</p>
                </div>
            </div>

            <!-- Doctor Management Section -->
            <section class="doctors card">
                <h2>Doctor Management</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Specialization</th>
                            <th>Schedule</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dr. Maria Santos</td>
                            <td>Cardiology</td>
                            <td>Mon - Wed, 9AM - 4PM</td>
                            <td><span class="status active">Active</span></td>
                            <td><a href="#" class="action-btn">Deactivate</a></td>
                        </tr>
                        <tr>
                            <td>Dr. Jason Dela Cruz</td>
                            <td>Dermatology</td>
                            <td>Tue - Fri, 10AM - 5PM</td>
                            <td><span class="status inactive">Inactive</span></td>
                            <td><a href="#" class="action-btn">Activate</a></td>
                        </tr>
                        <tr>
                            <td>Dr. Angela Reyes</td>
                            <td>Pediatrics</td>
                            <td>Mon - Sat, 8AM - 3PM</td>
                            <td><span class="status active">Active</span></td>
                            <td><a href="#" class="action-btn">Deactivate</a></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <footer>
                © 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa
            </footer>
        </main>
    </div>
</body>
</html>
