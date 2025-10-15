<?php
// Patient Dashboard
// Author: Mark Anthony Villahermosa
session_start();

// Example: Simulated logged-in patient
$patientName = "John Doe"; // Replace with session data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #eef5f9;
            color: #333;
        }

        /* Dashboard Layout */
        .dashboard {
            display: grid;
            grid-template-columns: 260px 1fr;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            background: linear-gradient(180deg, #2b7a78, #3aafa9);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 30px 20px;
            box-shadow: 2px 0 8px rgba(0,0,0,0.1);
        }

        .sidebar h2 {
            text-align: center;
            font-size: 1.7rem;
            margin-bottom: 40px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .sidebar nav ul {
            list-style: none;
        }

        .sidebar nav ul li {
            margin-bottom: 18px;
        }

        .sidebar nav ul li a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 12px 15px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .sidebar nav ul li a:hover,
        .sidebar nav ul li a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .logout-btn {
            background: #fff;
            color: #2b7a78;
            font-weight: 600;
            text-align: center;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .logout-btn:hover {
            background: #def2f1;
        }

        /* Main Content */
        .main-content {
            padding: 40px;
        }

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .main-header h1 {
            color: #2b7a78;
            font-size: 1.8rem;
        }

        .main-header p {
            font-size: 1rem;
            color: #555;
        }

        /* Appointments Section */
        .appointments {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .appointments h2 {
            color: #2b7a78;
            margin-bottom: 20px;
            font-size: 1.4rem;
        }

        .appointment-list {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }

        .appointment-list th, .appointment-list td {
            padding: 14px 16px;
            text-align: left;
        }

        .appointment-list thead {
            background: #2b7a78;
            color: white;
        }

        .appointment-list tr:nth-child(even) {
            background: #f9f9f9;
        }

        .status {
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .status.pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status.accepted {
            background-color: #d4edda;
            color: #155724;
        }

        .status.declined {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Footer */
        footer {
            margin-top: 40px;
            text-align: center;
            font-size: 0.9rem;
            color: #777;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .dashboard {
                grid-template-columns: 1fr;
            }

            .sidebar {
                flex-direction: row;
                justify-content: space-around;
                padding: 15px;
            }

            .sidebar h2 {
                display: none;
            }

            .main-content {
                padding: 20px;
            }

            .appointments {
                padding: 20px;
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
                        <li><a href="#">🧬 Search Disease</a></li>
                        <li><a href="#">📅 My Appointments</a></li>
                        <li><a href="#">👤 Profile</a></li>
                    </ul>
                </nav>
            </div>
            <a href="/index.php/" class="logout-btn">Logout</a>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="main-header">
                <div>
                    <h1>Welcome, <?php echo htmlspecialchars($patientName); ?>!</h1>
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

            <footer>
                © 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa
            </footer>
        </main>
    </div>
</body>
</html>
