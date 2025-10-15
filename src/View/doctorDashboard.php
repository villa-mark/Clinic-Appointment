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
        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background-color: #f7f9fa;
        }

        .dashboard {
            display: grid;
            grid-template-columns: 250px 1fr;
            min-height: 100vh;
            background-color: #f7f9fa;
        }

        /* Sidebar */
        .sidebar {
            background-color: #2b7a78;
            color: white;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 1.6rem;
        }

        .sidebar nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar nav ul li {
            margin-bottom: 18px;
        }

        .sidebar nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            display: block;
            padding: 10px 15px;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .sidebar nav ul li a:hover,
        .sidebar nav ul li a.active {
            background-color: #3aafa9;
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

        /* Cards */
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
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            transition: transform 0.2s;
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

        /* Appointments Table */
        .appointments {
            background: #fff;
            border-radius: 12px;
            padding: 25px 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .appointments h2 {
            color: #2b7a78;
            font-size: 1.4rem;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }

        th {
            color: #2b7a78;
            font-weight: 600;
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

        /* Logout Button */
        .btn-outline {
            display: block;
            border: 2px solid #def2f1;
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 8px;
            transition: background 0.3s, color 0.3s;
        }

        .btn-outline:hover {
            background-color: #3aafa9;
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .dashboard {
                grid-template-columns: 1fr;
            }

            .sidebar {
                flex-direction: row;
                align-items: center;
                justify-content: space-around;
                padding: 15px;
            }

            .main-content {
                padding: 20px;
            }

            .sidebar h2 {
                display: none;
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
            <div>
                <a href="/index.php/logout" class="btn-outline" style="width:100%; text-align:center;">Logout</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="main-header">
                <div>
                    <h1>Welcome, <?php echo htmlspecialchars($doctorName); ?>!</h1>
                    <p>Here’s your schedule and patient overview for today.</p>
                </div>
            </div>

            <!-- Dashboard Cards -->
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

            <!-- Appointments Table -->
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
        </main>
    </div>
</body>
</html>
