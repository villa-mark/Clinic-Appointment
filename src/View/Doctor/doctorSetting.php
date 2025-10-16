<?php
// Doctor Settings Page
// Author: Mark Anthony Villahermosa
session_start();

// Example: Simulated logged-in doctor
$doctorName = "Dr. Maria Santos"; // Replace with session data

// Example profile data (in real scenario, fetch from DB)
$doctorProfile = [
    'name' => 'Dr. Maria Santos',
    'email' => 'maria.santos@example.com',
    'specialty' => 'Cardiology',
    'phone' => '+63 912 345 6789'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Settings | Clinic Appointment</title>

    <link rel="stylesheet" href="/assets/css/common/baseLayout.css" />
    <link rel="stylesheet" href="/assets/css/doctor/doctorSetting.css" />
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
                        <li><a href="/index.php/doctor/patient">👥 Patients</a></li>
                        <li><a href="/index.php/doctor/message">💬 Messages</a></li>
                        <li><a href="#" class="active">⚙️ Settings</a></li>
                    </ul>
                </nav>
            </div>
            <a href="/index.php/" class="logout-btn">Logout</a>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="main-header">
                <div>
                    <h1>Settings</h1>
                    <p>Update your profile and account settings.</p>
                </div>
            </div>

            <!-- Profile Section -->
            <section class="settings">
                <h2>Profile Information</h2>
                <form action="#" method="post">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($doctorProfile['name']); ?>">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($doctorProfile['email']); ?>">

                    <label for="specialty">Specialty</label>
                    <input type="text" id="specialty" name="specialty" value="<?php echo htmlspecialchars($doctorProfile['specialty']); ?>">

                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($doctorProfile['phone']); ?>">

                    <button type="submit">Update Profile</button>
                </form>
            </section>

            <!-- Change Password Section -->
            <section class="settings" style="margin-top: 30px;">
                <h2>Change Password</h2>
                <form action="#" method="post">
                    <label for="current-password">Current Password</label>
                    <input type="password" id="current-password" name="current-password">

                    <label for="new-password">New Password</label>
                    <input type="password" id="new-password" name="new-password">

                    <label for="confirm-password">Confirm New Password</label>
                    <input type="password" id="confirm-password" name="confirm-password">

                    <button type="submit">Change Password</button>
                </form>
            </section>

            <footer>
                © 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa
            </footer>
        </main>
    </div>
</body>
</html>
