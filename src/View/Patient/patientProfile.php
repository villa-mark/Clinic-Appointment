<?php
// Patient Profile Page
// Author: Mark Anthony Villahermosa
session_start();

$patient = [
    "name" => "John Doe",
    "email" => "johndoe@gmail.com",
    "phone" => "+63 912 345 6789",
    "address" => "Talamban, Cebu City, Philippines",
    "birthday" => "2003-05-14",
    "gender" => "Male",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css" />
    <style>
        .profile-card {
            background: #fff;
            padding: 25px 30px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            max-width: 600px;
            margin: 30px auto;
        }
        .profile-card h2 {
            color: #2b7a78;
            margin-bottom: 20px;
            font-size: 1.5rem;
            text-align: center;
        }
        .profile-info {
            display: grid;
            grid-template-columns: 1fr 2fr;
            row-gap: 12px;
            column-gap: 10px;
            font-size: 1rem;
        }
        .profile-info span {
            font-weight: 600;
            color: #17252a;
        }
        .btn-edit {
            margin-top: 20px;
            display: block;
            width: 100%;
            background: #2b7a78;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s ease;
        }
        .btn-edit:hover {
            background: #205f5d;
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
                    <li><a href="/index.php/patient/appointment">📅 My Appointments</a></li>
                    <li><a href="#" class="active">👤 Profile</a></li>
                </ul>
            </nav>
        </div>
        <a href="/index.php/" class="logout-btn">Logout</a>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="main-header">
            <h1>My Profile</h1>
            <p>View and update your personal information.</p>
        </div>

        <div class="profile-card">
            <h2>Personal Details</h2>
            <div class="profile-info">
                <span>Full Name:</span> <p><?= htmlspecialchars($patient['name']); ?></p>
                <span>Email:</span> <p><?= htmlspecialchars($patient['email']); ?></p>
                <span>Phone:</span> <p><?= htmlspecialchars($patient['phone']); ?></p>
                <span>Address:</span> <p><?= htmlspecialchars($patient['address']); ?></p>
                <span>Birthday:</span> <p><?= htmlspecialchars($patient['birthday']); ?></p>
                <span>Gender:</span> <p><?= htmlspecialchars($patient['gender']); ?></p>
            </div>

            <a href="/index.php/patient/edit_profile" class="btn-edit">Edit Profile</a>
        </div>

        <footer>© 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa</footer>
    </main>
</div>
</body>
</html>
