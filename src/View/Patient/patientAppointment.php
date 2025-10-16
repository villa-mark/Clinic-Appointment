<?php
// Patient Appointments Page
// Author: Mark Anthony Villahermosa
session_start();

$patientName = "John Doe";

// Sample appointments
$appointments = [
    ["doctor" => "Dr. Maria Santos", "specialization" => "Cardiology", "date" => "2025-10-20 10:00 AM", "status" => "Pending"],
    ["doctor" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "date" => "2025-10-22 2:00 PM", "status" => "Accepted"],
    ["doctor" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "date" => "2025-10-25 9:30 AM", "status" => "Declined"],
    ["doctor" => "Dr. Carla Lopez", "specialization" => "Neurology", "date" => "2025-11-01 1:00 PM", "status" => "Completed"],
];

// Filters
$statusFilter = $_GET['status'] ?? 'All';
$dateFilter = $_GET['date'] ?? '';

// Apply filters
$filteredAppointments = array_filter($appointments, function ($appt) use ($statusFilter, $dateFilter) {
    $statusMatch = $statusFilter === 'All' || strtolower($appt['status']) === strtolower($statusFilter);
    $dateMatch = !$dateFilter || strpos($appt['date'], $dateFilter) !== false;
    return $statusMatch && $dateMatch;
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Appointments | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css" />
    <style>
        /* -----------------------------
           PAGE-SPECIFIC STYLES
        ----------------------------- */
        .filters {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .filters label {
            font-weight: 500;
            color: #2b7a78;
        }

        .filters input[type="date"],
        .filters select {
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: 0.2s ease;
        }

        .filters input[type="date"]:focus,
        .filters select:focus {
            border-color: #2b7a78;
            box-shadow: 0 0 0 3px rgba(43, 122, 120, 0.2);
        }

        .appointments-table {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .appointments-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .appointments-table th {
            background: #2b7a78;
            color: #fff;
            font-weight: 600;
            padding: 14px;
            text-align: left;
        }

        .appointments-table td {
            padding: 14px;
            border-bottom: 1px solid #eee;
        }

        .appointments-table tr:hover {
            background: #f8fdfd;
        }

        .status {
            padding: 6px 12px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
        }
        .status.pending { background: #fff4cc; color: #a67c00; }
        .status.accepted { background: #d4edda; color: #155724; }
        .status.declined { background: #f8d7da; color: #721c24; }
        .status.completed { background: #d1ecf1; color: #0c5460; }

        footer {
            margin-top: 40px;
            text-align: center;
            font-size: 0.9rem;
            color: #777;
        }

        @media (max-width: 768px) {
            .filters {
                flex-direction: column;
                align-items: flex-start;
            }
            .filters input,
            .filters select {
                width: 100%;
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
                    <li><a href="/index.php/patient/">🏠 Dashboard</a></li>
                    <li><a href="/index.php/patient/search">🧬 Search Disease</a></li>
                    <li><a href="#" class="active">📅 My Appointments</a></li>
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
                <h1>My Appointments</h1>
                <p>View and track your upcoming and past appointments.</p>
            </div>
        </div>

        <!-- Filters -->
        <form class="filters" method="GET">
            <div>
                <label for="date">Filter by Date:</label>
                <input type="date" name="date" id="date" value="<?= htmlspecialchars($dateFilter) ?>">
            </div>

            <div>
                <label for="status">Status:</label>
                <select name="status" id="status">
                    <?php
                    $statuses = ["All", "Pending", "Accepted", "Declined", "Completed"];
                    foreach ($statuses as $status) {
                        $selected = ($status === $statusFilter) ? 'selected' : '';
                        echo "<option value='$status' $selected>$status</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" style="
                background: #2b7a78; 
                color: white; 
                border: none; 
                padding: 10px 18px; 
                border-radius: 8px; 
                cursor: pointer; 
                font-weight: 600;
                transition: 0.3s;">
                Apply
            </button>
        </form>

        <!-- Table -->
        <div class="appointments-table">
            <table>
                <thead>
                    <tr>
                        <th>Doctor</th>
                        <th>Specialization</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($filteredAppointments)): ?>
                        <tr><td colspan="4" style="text-align:center; padding: 20px;">No appointments found.</td></tr>
                    <?php else: ?>
                        <?php foreach ($filteredAppointments as $appt): ?>
                            <tr>
                                <td><?= htmlspecialchars($appt['doctor']) ?></td>
                                <td><?= htmlspecialchars($appt['specialization']) ?></td>
                                <td><?= htmlspecialchars($appt['date']) ?></td>
                                <td><span class="status <?= strtolower($appt['status']) ?>"><?= htmlspecialchars($appt['status']) ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <footer>© 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa</footer>
    </main>
</div>
</body>
</html>
