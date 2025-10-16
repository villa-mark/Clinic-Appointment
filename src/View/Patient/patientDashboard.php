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
    <style>
        /* -----------------------------
           PATIENT DASHBOARD STYLES
        ----------------------------- */

        .appointments {
            background: #fff;
            padding: 25px 30px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: 0.3s ease;
        }

        .appointments h2 {
            color: #2b7a78;
            font-size: 1.4rem;
            margin-bottom: 20px;
            font-weight: 600;
            border-bottom: 2px solid #def2f1;
            padding-bottom: 10px;
        }

        .appointment-list {
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
        }

        .appointment-list th {
            background: #2b7a78;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .appointment-list td {
            background: #fafafa;
            transition: background 0.2s;
        }

        .appointment-list tr:hover td {
            background: #f0fdfa;
        }

        /* Status colors */
        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 600;
            text-align: center;
            font-size: 0.85rem;
        }

        .status.pending {
            background: #fff7e6;
            color: #b88900;
        }

        .status.accepted {
            background: #e6fff2;
            color: #2e7d32;
        }

        .status.declined {
            background: #ffeaea;
            color: #d32f2f;
        }

        /* Add subtle card hover */
        .appointments:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.12);
        }

        /* Footer */
        footer {
            margin-top: 50px;
            text-align: center;
            color: #666;
            font-size: 0.85rem;
        }

        /* Responsive tweaks */
        @media (max-width: 768px) {
            .appointments {
                padding: 15px 20px;
            }
            .appointment-list th, .appointment-list td {
                font-size: 0.9rem;
                padding: 10px 12px;
            }
        }
    </style>
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
