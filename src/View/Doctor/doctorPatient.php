<?php
// Doctor Patients Page
// Author: Mark Anthony Villahermosa
session_start();

// Example: Simulated logged-in doctor
$doctorName = "Dr. Maria Santos"; // Replace with session data

// Example patient data (in real scenario, fetch from DB)
$patients = [
    ['name' => 'John Doe', 'age' => 34, 'gender' => 'Male', 'last_visit' => '2025-10-10'],
    ['name' => 'Mary Grace', 'age' => 28, 'gender' => 'Female', 'last_visit' => '2025-10-12'],
    ['name' => 'Carlos Rivera', 'age' => 45, 'gender' => 'Male', 'last_visit' => '2025-10-08'],
    ['name' => 'Anne Cruz', 'age' => 32, 'gender' => 'Female', 'last_visit' => '2025-10-11'],
    ['name' => 'Paul Lim', 'age' => 40, 'gender' => 'Male', 'last_visit' => '2025-09-30'],
    ['name' => 'Jane Dela Cruz', 'age' => 29, 'gender' => 'Female', 'last_visit' => '2025-10-13'],
    ['name' => 'John Doe', 'age' => 34, 'gender' => 'Male', 'last_visit' => '2025-10-10'],
    ['name' => 'Mary Grace', 'age' => 28, 'gender' => 'Female', 'last_visit' => '2025-10-12'],
    ['name' => 'Carlos Rivera', 'age' => 45, 'gender' => 'Male', 'last_visit' => '2025-10-08'],
    ['name' => 'Anne Cruz', 'age' => 32, 'gender' => 'Female', 'last_visit' => '2025-10-11'],
    ['name' => 'John Doe', 'age' => 34, 'gender' => 'Male', 'last_visit' => '2025-10-10'],
    ['name' => 'Mary Grace', 'age' => 28, 'gender' => 'Female', 'last_visit' => '2025-10-12'],
    ['name' => 'Carlos Rivera', 'age' => 45, 'gender' => 'Male', 'last_visit' => '2025-10-08'],
    ['name' => 'Anne Cruz', 'age' => 32, 'gender' => 'Female', 'last_visit' => '2025-10-11'],
    ['name' => 'John Doe', 'age' => 34, 'gender' => 'Male', 'last_visit' => '2025-10-10'],
    ['name' => 'Mary Grace', 'age' => 28, 'gender' => 'Female', 'last_visit' => '2025-10-12'],
    ['name' => 'Carlos Rivera', 'age' => 45, 'gender' => 'Male', 'last_visit' => '2025-10-08'],
    ['name' => 'Anne Cruz', 'age' => 32, 'gender' => 'Female', 'last_visit' => '2025-10-11'],
    ['name' => 'Anne Cruz', 'age' => 32, 'gender' => 'Female', 'last_visit' => '2025-10-11'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Patients | Clinic Appointment</title>

    <link rel="stylesheet" href="/assets/css/common/baseLayout.css" />
    <link rel="stylesheet" href="/assets/css/doctor/doctorPatient.css" />

</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div>
                <h2>ClinicA</h2>
                <nav>
                    <ul>
                        <li><a href="/index.php/doctor">🏠 Dashboard</a></li>
                        <li><a href="/index.php/doctor/appointment">📅 Appointments</a></li>
                        <li><a href="/index.php/doctor/patient" class="active">👥 Patients</a></li>
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
                    <h1>My Patients</h1>
                    <p>List of all patients under your care.</p>
                </div>
            </div>

            <!-- Patients Table -->
            <section class="patients">
                <h2>Patient List</h2>

                <!-- Search -->
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search patient name...">
                </div>

                <div class="table-container">
                    <table id="patientTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Last Visit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($patients as $patient): ?>
                            <tr>
                                <td><?= htmlspecialchars($patient['name']) ?></td>
                                <td><?= htmlspecialchars($patient['age']) ?></td>
                                <td><?= htmlspecialchars($patient['gender']) ?></td>
                                <td><?= htmlspecialchars($patient['last_visit']) ?></td>
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
        // Real-time search filter
        document.getElementById("searchInput").addEventListener("keyup", function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll("#patientTable tbody tr");

            rows.forEach(row => {
                const name = row.cells[0].textContent.toLowerCase();
                row.style.display = name.includes(filter) ? "" : "none";
            });
        });
    </script>
</body>
</html>
