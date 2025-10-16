<?php
// Doctor Dashboard
// Author: Mark Anthony Villahermosa
session_start();

// Example: Simulated logged-in doctor
$doctorName = "Dr. Maria Santos"; // Replace with session data

// Example appointment data (in a real case, you'd fetch this from your database)
$appointments = [
    [
        'patient' => 'John Doe',
        'time' => '9:00 AM',
        'reason' => 'Follow-up Checkup',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Mary Grace',
        'time' => '10:30 AM',
        'reason' => 'Cardio Consultation',
        'status' => 'Completed'
    ],
    [
        'patient' => 'Carlos Rivera',
        'time' => '1:00 PM',
        'reason' => 'Blood Pressure',
        'status' => 'Pending'
    ],
    [
        'patient' => 'John Doe',
        'time' => '9:00 AM',
        'reason' => 'Follow-up Checkup',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Mary Grace',
        'time' => '10:30 AM',
        'reason' => 'Cardio Consultation',
        'status' => 'Completed'
    ],
    [
        'patient' => 'Carlos Rivera',
        'time' => '1:00 PM',
        'reason' => 'Blood Pressure',
        'status' => 'Pending'
    ],
    [
        'patient' => 'John Doe',
        'time' => '9:00 AM',
        'reason' => 'Follow-up Checkup',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Mary Grace',
        'time' => '10:30 AM',
        'reason' => 'Cardio Consultation',
        'status' => 'Completed'
    ],
    [
        'patient' => 'Carlos Rivera',
        'time' => '1:00 PM',
        'reason' => 'Blood Pressure',
        'status' => 'Pending'
    ],
    [
        'patient' => 'John Doe',
        'time' => '9:00 AM',
        'reason' => 'Follow-up Checkup',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Mary Grace',
        'time' => '10:30 AM',
        'reason' => 'Cardio Consultation',
        'status' => 'Completed'
    ],
    [
        'patient' => 'Carlos Rivera',
        'time' => '1:00 PM',
        'reason' => 'Blood Pressure',
        'status' => 'Pending'
    ],[
        'patient' => 'John Doe',
        'time' => '9:00 AM',
        'reason' => 'Follow-up Checkup',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Mary Grace',
        'time' => '10:30 AM',
        'reason' => 'Cardio Consultation',
        'status' => 'Completed'
    ],
    [
        'patient' => 'Carlos Rivera',
        'time' => '1:00 PM',
        'reason' => 'Blood Pressure',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Anne Cruz',
        'time' => '2:30 PM',
        'reason' => 'Dermatology Check',
        'status' => 'Cancelled'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css" />
    <link rel="stylesheet" href="/assets/css/doctor/doctorDashboard.css" />
    <link rel="stylesheet" href="/assets/css/doctor/doctorAppointment.css" />
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
                        <li><a href="/index.php/doctor/appointment">📅 Appointments</a></li>
                        <li><a href="/index.php/doctor/patient">👥 Patients</a></li>
                        <li><a href="/index.php/doctor/message">💬 Messages</a></li>
                        <li><a href="/index.php/doctor/setting">⚙️ Settings</a></li>
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
                    <p><?php echo count($appointments); ?></p>
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
                <div class="table-wrapper">
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
                            <?php foreach ($appointments as $appt): ?>
                                <tr>
                                    <td><?= htmlspecialchars($appt['patient']) ?></td>
                                    <td><?= htmlspecialchars($appt['time']) ?></td>
                                    <td><?= htmlspecialchars($appt['reason']) ?></td>
                                    <td><span class="status <?= strtolower($appt['status']) ?>"><?= htmlspecialchars($appt['status']) ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>


            <footer>
                © 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa
            </footer>
        </main>
    </div>
</body>
</html>
