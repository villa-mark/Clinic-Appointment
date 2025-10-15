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

        /* Stats Cards */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            text-align: center;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        .card h3 {
            font-size: 2rem;
            color: #2b7a78;
            margin-bottom: 8px;
        }

        .card p {
            font-weight: 500;
            color: #666;
        }

        /* Doctor Management Section */
        .doctors {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .doctors h2 {
            color: #2b7a78;
            margin-bottom: 20px;
            font-size: 1.4rem;
        }

        .doctor-list {
            width: 100%;
            border-collapse: collapse;
        }

        .doctor-list th, .doctor-list td {
            text-align: left;
            padding: 14px 16px;
            border-bottom: 1px solid #ddd;
        }

        .doctor-list th {
            background-color: #2b7a78;
            color: white;
        }

        .status {
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .status.active {
            background-color: #d4edda;
            color: #155724;
        }

        .status.inactive {
            background-color: #f8d7da;
            color: #721c24;
        }

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

            .stats {
                grid-template-columns: 1fr;
            }

            .doctors {
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
                <h2><?php echo htmlspecialchars($clinicName); ?></h2>
                <nav>
                    <ul>
                        <li><a href="#" class="active">🏠 Dashboard</a></li>
                        <li><a href="#">👨‍⚕️ Manage Doctors</a></li>
                        <li><a href="#">🧑‍🤝‍🧑 View Patients</a></li>
                        <li><a href="#">📅 Appointments</a></li>
                        <li><a href="#">⚙️ Settings</a></li>
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
            <section class="doctors">
                <h2>Doctor Management</h2>
                <table class="doctor-list">
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
