<?php
// Doctor Dashboard
// Author: Mark Anthony Villahermosa
session_start();

// Example: Simulated logged-in doctor
$doctorName = "Dr. Maria Santos"; // Replace with session data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard | Clinic Appointment</title>
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

        /* Layout */
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

        /* Summary Cards */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-3px);
        }

        .card h3 {
            color: #2b7a78;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 1.6rem;
            font-weight: 600;
            color: #17252a;
        }

        /* Appointment Table */
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 14px 16px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        thead {
            background: #2b7a78;
            color: white;
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

        .status.completed {
            background-color: #d4edda;
            color: #155724;
        }

        .status.cancelled {
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
                        <li><a href="#">📅 Appointments</a></li>
                        <li><a href="#">👥 Patients</a></li>
                        <li><a href="#">💬 Messages</a></li>
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
                    <h1>Welcome, <?php echo htmlspecialchars($doctorName); ?>!</h1>
                    <p>Here’s your overview and today’s appointments.</p>
                </div>
            </div>

            <!-- Summary Cards -->
            <section class="cards">
                <div class="card">
                    <h3>Today's Appointments</h3>
                    <p>5</p>
                </div>
                <div class="card">
                    <h3>Total Patients</h3>
                    <p>123</p>
                </div>
                <div class="card">
                    <h3>Pending Requests</h3>
                    <p>2</p>
                </div>
                <div class="card">
                    <h3>Messages</h3>
                    <p>8</p>
                </div>
            </section>

            <!-- Appointment Table -->
            <section class="appointments">
                <h2>Today's Appointments</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Patient</th>
                            <th>Time</th>
                            <th>Reason</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>9:00 AM</td>
                            <td>Follow-up Checkup</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Mary Grace</td>
                            <td>10:30 AM</td>
                            <td>Cardio Consultation</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Carlos Rivera</td>
                            <td>1:00 PM</td>
                            <td>Blood Pressure</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Anne Cruz</td>
                            <td>2:30 PM</td>
                            <td>Dermatology Check</td>
                            <td><span class="status cancelled">Cancelled</span></td>
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
