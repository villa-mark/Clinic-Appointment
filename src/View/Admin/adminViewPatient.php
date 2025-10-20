<?php
// View Patient Page
// Author: Mark Anthony Villahermosa
session_start();

// Simulated clinic admin name
$clinicName = "ClinicA";

// Sample patient data
$patient = [
    'id' => 1,
    'name' => 'Juan Dela Cruz',
    'age' => 29,
    'gender' => 'Male',
    'email' => 'juan.delacruz@example.com',
    'contact' => '09123456789',
    'address' => 'Cebu City, Philippines',
    'registered_date' => '2024-10-05'
];

$appointments = [
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending']
];

$medical_history = [
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Patient | Clinic Appointment</title>
<link rel="stylesheet" href="/assets/css/common/baseLayout.css">
<link rel="stylesheet" href="/assets/css/admin/adminViewPatient.css">
</head>
<body>
<div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div>
            <h2><?= htmlspecialchars($clinicName) ?></h2>
            <nav>
                <ul>
                    <li><a href="/index.php/admin/">🏠 Dashboard</a></li>
                    <li><a href="/index.php/admin/manage">👨‍⚕️ Manage Doctors</a></li>
                    <li><a href="#" class="active">🧑‍🤝‍🧑 View Patients</a></li>
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
            <h1>Patient Profile</h1>
            <p>Detailed information and records of the selected patient</p>
        </div>

        <!-- Patient Info -->
        <section class="card">
            <h2><?= htmlspecialchars($patient['name']); ?></h2>
            <div class="info-grid">
                <p><strong>Age:</strong> <?= htmlspecialchars($patient['age']); ?></p>
                <p><strong>Gender:</strong> <?= htmlspecialchars($patient['gender']); ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($patient['email']); ?></p>
                <p><strong>Contact:</strong> <?= htmlspecialchars($patient['contact']); ?></p>
                <p><strong>Address:</strong> <?= htmlspecialchars($patient['address']); ?></p>
                <p><strong>Registered On:</strong> <?= htmlspecialchars($patient['registered_date']); ?></p>
            </div>
        </section>

        <!-- Appointment History -->
        <section class="card table-section">
            <h2>Appointment History</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Doctor</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($appointments as $appt): ?>
                        <tr>
                            <td><?= htmlspecialchars($appt['date']); ?></td>
                            <td><?= htmlspecialchars($appt['time']); ?></td>
                            <td><?= htmlspecialchars($appt['doctor']); ?></td>
                            <td><span class="status <?= strtolower($appt['status']); ?>"><?= htmlspecialchars($appt['status']); ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Medical History -->
        <section class="card table-section">
            <h2>Medical History</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Diagnosis</th>
                            <th>Treatment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($medical_history as $record): ?>
                        <tr>
                            <td><?= htmlspecialchars($record['date']); ?></td>
                            <td><?= htmlspecialchars($record['diagnosis']); ?></td>
                            <td><?= htmlspecialchars($record['treatment']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <footer>© 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa</footer>
    </main>
</div>
</body>
</html>
