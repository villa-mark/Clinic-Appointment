<?php
// Doctor Messages Page
// Author: Mark Anthony Villahermosa
session_start();

// Example: Simulated logged-in doctor
$doctorName = "Dr. Maria Santos"; // Replace with session data

// Example message data (in real scenario, fetch from DB)
$messages = [
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    // ... (rest of your data)
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Messages | Clinic Appointment</title>

    <link rel="stylesheet" href="/assets/css/doctor/doctorBase.css" />
    <link rel="stylesheet" href="/assets/css/doctor/doctorMessage.css" />
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div>
                <h2>ClinicA</h2>
                <nav>
                    <ul>
                        <li><a href="/index.php/doctor/">🏠 Dashboard</a></li>
                        <li><a href="/index.php/doctor/appointment">📅 Appointments</a></li>
                        <li><a href="/index.php/doctor/patient">👥 Patients</a></li>
                        <li><a href="#" class="active">💬 Messages</a></li>
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
                    <h1>Messages</h1>
                    <p>Check and manage messages from your patients.</p>
                </div>
            </div>

            <!-- Delete Controls -->
            <div class="table-controls">
                <button class="delete-selected">Delete Selected</button>
            </div>

            <!-- Messages Table -->
            <section class="messages">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="selectAll"></th>
                                <th>From</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($messages as $msg): ?>
                            <tr>
                                <td><input type="checkbox" class="row-checkbox"></td>
                                <td><?php echo htmlspecialchars($msg['from']); ?></td>
                                <td><?php echo htmlspecialchars($msg['subject']); ?></td>
                                <td><?php echo htmlspecialchars($msg['date']); ?></td>
                                <td><span class="status <?php echo strtolower($msg['status']); ?>"><?php echo $msg['status']; ?></span></td>
                                <td><button class="delete-btn">🗑️</button></td>
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

    <script>
        // Select All Function
        const selectAll = document.getElementById("selectAll");
        const checkboxes = document.querySelectorAll(".row-checkbox");

        selectAll.addEventListener("change", () => {
            checkboxes.forEach(cb => cb.checked = selectAll.checked);
        });

        // Delete Selected Simulation
        document.querySelector(".delete-selected").addEventListener("click", () => {
            const selected = document.querySelectorAll(".row-checkbox:checked");
            if (selected.length === 0) {
                alert("Please select at least one message to delete.");
                return;
            }
            if (confirm(`Delete ${selected.length} selected message(s)?`)) {
                selected.forEach(cb => cb.closest("tr").remove());
            }
        });

        // Individual Delete Simulation
        document.querySelectorAll(".delete-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                if (confirm("Delete this message?")) {
                    btn.closest("tr").remove();
                }
            });
        });
    </script>
</body>
</html>
