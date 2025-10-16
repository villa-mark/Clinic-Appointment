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
    <style>
    /* Additional Dashboard Styles */

    /* Stats Cards */
    .stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stats .card {
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .stats .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    .stats .card h3 {
        font-size: 2rem;
        color: #2b7a78;
        margin-bottom: 8px;
    }

    .stats .card p {
        font-weight: 500;
        color: #555;
    }

    /* Doctor Management Section */
    .doctors {
        margin-top: 20px;
    }

    .doctors h2 {
        color: #2b7a78;
        margin-bottom: 15px;
        font-size: 1.4rem;
    }

    /* Table Styles */
    .doctors table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .doctors thead tr {
        background: #2b7a78;
        color: #fff;
        text-align: left;
    }

    .doctors thead th {
        padding: 14px 16px;
    }

    .doctors tbody tr {
        background: #fff;
        transition: background 0.3s;
    }

    .doctors tbody tr:hover {
        background: #f1f9f8;
    }

    .doctors tbody td {
        padding: 14px 16px;
        border-bottom: 1px solid #eee;
    }

    /* Action buttons for doctor table */
    .action-btn {
        background: #3aafa9;
        color: white;
        padding: 6px 12px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 0.9rem;
        transition: 0.3s;
    }

    .action-btn:hover {
        background: #2b7a78;
    }

    /* Status badges */
    .status.active {
        background-color: #d4edda;
        color: #155724;
    }

    .status.inactive {
        background-color: #f8d7da;
        color: #721c24;
    }

    /* Responsive table */
    @media (max-width: 768px) {
        .doctors table, .doctors thead, .doctors tbody, .doctors th, .doctors td, .doctors tr {
            display: block;
        }

        .doctors thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        .doctors tr {
            margin-bottom: 20px;
            border-bottom: 2px solid #eee;
        }

        .doctors td {
            border: none;
            padding: 10px;
            position: relative;
            padding-left: 50%;
            text-align: left;
        }

        .doctors td::before {
            position: absolute;
            top: 10px;
            left: 16px;
            width: 45%;
            white-space: nowrap;
            font-weight: 600;
            content: attr(data-label);
        }
    }
</style>

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
