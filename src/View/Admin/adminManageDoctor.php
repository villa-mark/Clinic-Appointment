<?php
// Manage Doctors Page
// Author: Mark Anthony Villahermosa
session_start();

// Example: Simulated clinic admin name
$clinicName = "ClinicA";

// Sample doctors list (replace with DB data later)
$doctors = [
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed, 9AM - 4PM", "status" => "Active"],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Fri, 10AM - 5PM", "status" => "Inactive"],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Sat, 8AM - 3PM", "status" => "Active"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Doctors | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css" />
    <style>
        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-add {
            background: #2b7a78;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-add:hover {
            background: #205f5d;
        }

        .table-section {
            background: #fff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            margin-top: 20px;
        }

        .table-container {
            max-height: 600px;
            overflow-y: auto;
            border-radius: 8px;
            position: relative;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            position: sticky;
            top: 0;
            background: #2b7a78;
            color: white;
            text-align: left;
            padding: 12px;
            font-weight: 600;
            z-index: 2;
        }

        tbody td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        tbody tr:hover {
            background: #f7f7f7;
        }

        .status {
            padding: 6px 10px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .status.active {
            background: #d4edda;
            color: #155724;
        }

        .status.inactive {
            background: #f8d7da;
            color: #721c24;
        }

        .action-btn {
            text-decoration: none;
            color: white;
            background: #3aafa9;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .action-btn:hover {
            background: #2b7a78;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #777;
            font-size: 0.9rem;
        }
    </style>
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
                    <li><a href="#" class="active">👨‍⚕️ Manage Doctors</a></li>
                    <li><a href="/index.php/admin/patient">🧑‍🤝‍🧑 View Patients</a></li>
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
            <div>
                <h1>Manage Doctors</h1>
                <p>View and manage the list of doctors in your clinic.</p>
            </div>
            <a href="/index.php/admin/add_doctor" class="btn-add">+ Add Doctor</a>
        </div>

        <!-- Doctor Table -->
        <section class="table-section">
            <div class="table-container">
                <table>
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
                        <?php foreach ($doctors as $doc): ?>
                            <tr>
                                <td><?= htmlspecialchars($doc['name']); ?></td>
                                <td><?= htmlspecialchars($doc['specialization']); ?></td>
                                <td><?= htmlspecialchars($doc['schedule']); ?></td>
                                <td>
                                    <span class="status <?= strtolower($doc['status']); ?>">
                                        <?= htmlspecialchars($doc['status']); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($doc['status'] === "Active"): ?>
                                        <a href="#" class="action-btn">Deactivate</a>
                                    <?php else: ?>
                                        <a href="#" class="action-btn">Activate</a>
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
</body>
</html>
