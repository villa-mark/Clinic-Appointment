<?php
// Admin Appointments Page
// Author: Mark Anthony Villahermosa
session_start();

$clinicName = "ClinicA"; // Replace with session/session DB

// Sample appointments data (replace later with DB queries)
$appointments = [
    ['patient' => 'Juan Dela Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-14', 'time' => '9:00 AM', 'reason' => 'General Checkup', 'status' => 'Completed'],
    ['patient' => 'Maria Reyes', 'doctor' => 'Dr. Lim', 'date' => '2025-10-16', 'time' => '10:30 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Jose Robles', 'doctor' => 'Dr. Tan', 'date' => '2025-10-17', 'time' => '2:00 PM', 'reason' => 'Flu Symptoms', 'status' => 'Cancelled'],
    ['patient' => 'Ana Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-18', 'time' => '1:00 PM', 'reason' => 'Follow-up', 'status' => 'Confirmed']
];

// Filters
$date_filter = $_GET['date'] ?? '';
$status_filter = $_GET['status'] ?? '';

$filtered_appointments = array_filter($appointments, function($appt) use ($date_filter, $status_filter) {
    $match = true;
    if ($date_filter && $appt['date'] !== $date_filter) $match = false;
    if ($status_filter && strtolower($appt['status']) !== strtolower($status_filter)) $match = false;
    return $match;
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css">
    <link rel="stylesheet" href="/assets/css/admin/adminAppointment.css">
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
                    <li><a href="/index.php/admin/patient">🧑‍🤝‍🧑 View Patients</a></li>
                    <li><a href="/index.php/admin/appointment" class="active">📅 Appointments</a></li>
                    <li><a href="/index.php/admin/setting">⚙️ Settings</a></li>
                </ul>
            </nav>
        </div>
        <a href="/index.php/" class="logout-btn">Logout</a>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="main-header">
            <h1>Manage Appointments</h1>
        </div>

        <!-- Filters -->
        <section class="card filters">
            <form method="GET" class="filter-form" style="display:flex; gap:15px; flex-wrap:wrap;">
                <div class="form-group">
                    <label for="date">Filter by Date:</label>
                    <input type="date" name="date" id="date" value="<?= htmlspecialchars($date_filter) ?>">
                </div>
                <div class="form-group">
                    <label for="status">Filter by Status:</label>
                    <select name="status" id="status">
                        <option value="">All</option>
                        <option value="Pending" <?= $status_filter=='Pending'?'selected':'' ?>>Pending</option>
                        <option value="Confirmed" <?= $status_filter=='Confirmed'?'selected':'' ?>>Confirmed</option>
                        <option value="Completed" <?= $status_filter=='Completed'?'selected':'' ?>>Completed</option>
                        <option value="Cancelled" <?= $status_filter=='Cancelled'?'selected':'' ?>>Cancelled</option>
                    </select>
                </div>
                <div style="align-self:flex-end;">
                    <button type="submit" class="btn-primary">Apply Filter</button>
                    <a href="admin_appointments.php" class="btn-secondary">Reset</a>
                </div>
            </form>
        </section>

        <!-- Appointments Table -->
        <section class="card table-section">
            <h2>All Appointments</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Patient</th>
                            <th>Doctor</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Reason</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($filtered_appointments)): ?>
                            <tr><td colspan="7" style="text-align:center;">No appointments found.</td></tr>
                        <?php else: ?>
                            <?php foreach($filtered_appointments as $appt): ?>
                                <tr>
                                    <td><?= htmlspecialchars($appt['patient']) ?></td>
                                    <td><?= htmlspecialchars($appt['doctor']) ?></td>
                                    <td><?= htmlspecialchars($appt['date']) ?></td>
                                    <td><?= htmlspecialchars($appt['time']) ?></td>
                                    <td><?= htmlspecialchars($appt['reason']) ?></td>
                                    <td><span class="status <?= strtolower($appt['status']) ?>"><?= htmlspecialchars($appt['status']) ?></span></td>
                                    <td><a href="admin_view_appointment.php?id=<?= urlencode($appt['patient']) ?>" class="btn-small">View</a></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <footer>© 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa</footer>
    </main>
</div>
</body>
</html>
