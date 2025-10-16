<?php
// Doctor Appointments Page
// Author: Mark Anthony Villahermosa
session_start();

$doctorName = "Dr. Maria Santos";

// Sample data (not from DB)
$appointments = [
    ['patient' => 'John Doe', 'date' => '2025-10-15', 'time' => '9:00 AM', 'reason' => 'Follow-up Checkup', 'status' => 'Accepted'],
    ['patient' => 'Mary Grace', 'date' => '2025-10-15', 'time' => '10:30 AM', 'reason' => 'Cardio Consultation', 'status' => 'Completed'],
    ['patient' => 'Carlos Rivera', 'date' => '2025-10-15', 'time' => '1:00 PM', 'reason' => 'Blood Pressure', 'status' => 'Accepted'],
    ['patient' => 'Anne Cruz', 'date' => '2025-10-15', 'time' => '2:30 PM', 'reason' => 'Dermatology Check', 'status' => 'Cancelled'],
    ['patient' => 'Paul Lim', 'date' => '2025-10-16', 'time' => '9:15 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Rose Dela Peña', 'date' => '2025-10-16', 'time' => '11:00 AM', 'reason' => 'Skin Allergy', 'status' => 'Completed'],
    ['patient' => 'John Doe', 'date' => '2025-10-15', 'time' => '9:00 AM', 'reason' => 'Follow-up Checkup', 'status' => 'Accepted'],
    ['patient' => 'Mary Grace', 'date' => '2025-10-15', 'time' => '10:30 AM', 'reason' => 'Cardio Consultation', 'status' => 'Completed'],
    ['patient' => 'Carlos Rivera', 'date' => '2025-10-15', 'time' => '1:00 PM', 'reason' => 'Blood Pressure', 'status' => 'Accepted'],
    ['patient' => 'Anne Cruz', 'date' => '2025-10-15', 'time' => '2:30 PM', 'reason' => 'Dermatology Check', 'status' => 'Cancelled'],
    ['patient' => 'Paul Lim', 'date' => '2025-10-16', 'time' => '9:15 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Rose Dela Peña', 'date' => '2025-10-16', 'time' => '11:00 AM', 'reason' => 'Skin Allergy', 'status' => 'Completed'],
    ['patient' => 'John Doe', 'date' => '2025-10-15', 'time' => '9:00 AM', 'reason' => 'Follow-up Checkup', 'status' => 'Accepted'],
    ['patient' => 'Mary Grace', 'date' => '2025-10-15', 'time' => '10:30 AM', 'reason' => 'Cardio Consultation', 'status' => 'Completed'],
    ['patient' => 'Carlos Rivera', 'date' => '2025-10-15', 'time' => '1:00 PM', 'reason' => 'Blood Pressure', 'status' => 'Accepted'],
    ['patient' => 'Anne Cruz', 'date' => '2025-10-15', 'time' => '2:30 PM', 'reason' => 'Dermatology Check', 'status' => 'Cancelled'],
    ['patient' => 'Paul Lim', 'date' => '2025-10-16', 'time' => '9:15 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Rose Dela Peña', 'date' => '2025-10-16', 'time' => '11:00 AM', 'reason' => 'Skin Allergy', 'status' => 'Completed'],
    ['patient' => 'John Doe', 'date' => '2025-10-15', 'time' => '9:00 AM', 'reason' => 'Follow-up Checkup', 'status' => 'Accepted'],
    ['patient' => 'Mary Grace', 'date' => '2025-10-15', 'time' => '10:30 AM', 'reason' => 'Cardio Consultation', 'status' => 'Completed'],
    ['patient' => 'Carlos Rivera', 'date' => '2025-10-15', 'time' => '1:00 PM', 'reason' => 'Blood Pressure', 'status' => 'Accepted'],
    ['patient' => 'Anne Cruz', 'date' => '2025-10-15', 'time' => '2:30 PM', 'reason' => 'Dermatology Check', 'status' => 'Cancelled'],
    ['patient' => 'Paul Lim', 'date' => '2025-10-16', 'time' => '9:15 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Rose Dela Peña', 'date' => '2025-10-16', 'time' => '11:00 AM', 'reason' => 'Skin Allergy', 'status' => 'Completed'],
];

// Get filter values
$filterDate = $_POST['filter_date'] ?? '';
$filterStatus = $_POST['filter_status'] ?? '';

// Apply filtering
$filteredAppointments = array_filter($appointments, function ($appt) use ($filterDate, $filterStatus) {
    $matchesDate = !$filterDate || $appt['date'] === $filterDate;
    $matchesStatus = !$filterStatus || strtolower($appt['status']) === strtolower($filterStatus);
    return $matchesDate && $matchesStatus;
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css" />
    <link rel="stylesheet" href="/assets/css/doctor/doctorAppointment.css" />
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <div>
                <h2>ClinicA</h2>
                <nav>
                    <ul>
                        <li><a href="/index.php/doctor/">🏠 Dashboard</a></li>
                        <li><a href="#" class="active">📅 Appointments</a></li>
                        <li><a href="/index.php/doctor/patient">👥 Patients</a></li>
                        <li><a href="/index.php/doctor/message">💬 Messages</a></li>
                        <li><a href="/index.php/doctor/setting">⚙️ Settings</a></li>
                    </ul>
                </nav>
            </div>
            <a href="/index.php/" class="logout-btn">Logout</a>
        </aside>

        <main class="main-content">
            <div class="main-header">
                <h1>Appointments</h1>
                <p>Manage your appointments efficiently.</p>
            </div>

            <form method="POST" class="filter">
                <input type="date" name="filter_date" value="<?= htmlspecialchars($filterDate) ?>" />

                <select name="filter_status">
                    <option value="">All Status</option>
                    <option value="Pending" <?= $filterStatus === 'Pending' ? 'selected' : '' ?>>Pending</option>
                    <option value="Accepted" <?= $filterStatus === 'Accepted' ? 'selected' : '' ?>>Accepted</option>
                    <option value="Completed" <?= $filterStatus === 'Completed' ? 'selected' : '' ?>>Completed</option>
                    <option value="Cancelled" <?= $filterStatus === 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                </select>

                <button type="submit">Filter</button>
            </form>


            <section class="appointments">
                <h2>Appointment List</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Patient</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Reason</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($filteredAppointments as $appt): ?>
                                <tr>
                                    <td><?= htmlspecialchars($appt['patient']) ?></td>
                                    <td><?= htmlspecialchars($appt['date']) ?></td>
                                    <td><?= htmlspecialchars($appt['time']) ?></td>
                                    <td><?= htmlspecialchars($appt['reason']) ?></td>
                                    <td><span class="status <?= strtolower($appt['status']) ?>"><?= htmlspecialchars($appt['status']) ?></span></td>
                                    <td>
                                        <?php if (strtolower($appt['status']) === 'pending'): ?>
                                            <button class="btn-accept">Accept</button>
                                            <button class="btn-decline">Decline</button>
                                        <?php elseif (strtolower($appt['status']) === 'accepted'): ?>
                                            <button class="btn-complete">Mark as Complete</button>
                                        <?php else: ?>
                                            <span class="no-action">—</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <footer>© 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa</footer>
        </main>
    </div>

    <script>
        document.querySelectorAll('.btn-accept').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const statusCell = row.querySelector('.status');
                statusCell.textContent = 'Accepted';
                statusCell.className = 'status accepted';
                row.querySelectorAll('.btn-accept, .btn-decline').forEach(btn => btn.remove());
                const completeBtn = document.createElement('button');
                completeBtn.className = 'btn-complete';
                completeBtn.textContent = 'Mark as Complete';
                row.querySelector('td:last-child').appendChild(completeBtn);
                completeBtn.addEventListener('click', function() {
                    statusCell.textContent = 'Completed';
                    statusCell.className = 'status completed';
                    completeBtn.remove();
                });
            });
        });
        document.querySelectorAll('.btn-decline').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const statusCell = row.querySelector('.status');
                statusCell.textContent = 'Declined';
                statusCell.className = 'status cancelled';
                row.querySelectorAll('.btn-accept, .btn-decline').forEach(btn => btn.remove());
            });
        });
    </script>
</body>
</html>
