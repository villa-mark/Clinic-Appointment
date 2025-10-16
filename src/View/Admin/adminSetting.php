<?php
// Admin Settings Page
// Author: Mark Anthony Villahermosa
session_start();

$clinicName = "ClinicA"; // Replace with session data

// Sample admin data (replace with DB query later)
$admin = [
    'name' => 'Administrator',
    'email' => 'admin@clinica.com',
    'username' => 'admin123'
];

// Mock form submission messages
$successMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update_profile'])) {
        $successMessage = "Profile information has been updated successfully.";
    } elseif (isset($_POST['update_password'])) {
        $successMessage = "Password has been changed successfully.";
    } elseif (isset($_POST['update_system'])) {
        $successMessage = "System settings have been saved successfully.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css">
    <style>
        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .card.settings-section {
            background: #fff;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .card h2 {
            color: #2b7a78;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: 500;
            margin-bottom: 5px;
        }

        input, select {
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 0.95rem;
            outline: none;
        }

        input:focus, select:focus {
            border-color: #2b7a78;
            box-shadow: 0 0 0 2px rgba(43,122,120,0.2);
        }

        .btn-primary {
            background: #2b7a78;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: #205f5d;
        }

        .alert.success {
            background: #d4edda;
            color: #155724;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
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
                    <li><a href="/index.php/admin/manage">👨‍⚕️ Manage Doctors</a></li>
                    <li><a href="/index.php/admin/patient">🧑‍🤝‍🧑 View Patients</a></li>
                    <li><a href="/index.php/admin/appointment">📅 Appointments</a></li>
                    <li><a href="#" class="active">⚙️ Settings</a></li>
                </ul>
            </nav>
        </div>
        <a href="/index.php/" class="logout-btn">Logout</a>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="main-header">
            <h1>Admin Settings</h1>
            <p>Manage your profile and system preferences</p>
        </div>

        <?php if ($successMessage): ?>
            <div class="alert success">
                <?= htmlspecialchars($successMessage) ?>
            </div>
        <?php endif; ?>

        <!-- Profile Information -->
        <section class="card settings-section">
            <h2>Profile Information</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?= htmlspecialchars($admin['name']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="<?= htmlspecialchars($admin['email']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="<?= htmlspecialchars($admin['username']) ?>" required>
                </div>
                <button type="submit" name="update_profile" class="btn-primary">Save Changes</button>
            </form>
        </section>

        <!-- Change Password -->
        <section class="card settings-section">
            <h2>Change Password</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password" required>
                </div>
                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm New Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <button type="submit" name="update_password" class="btn-primary">Update Password</button>
            </form>
        </section>

        <!-- System Preferences -->
        <section class="card settings-section">
            <h2>System Preferences</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="timezone">Default Timezone</label>
                    <select id="timezone" name="timezone">
                        <option value="Asia/Manila">Asia/Manila</option>
                        <option value="Asia/Singapore">Asia/Singapore</option>
                        <option value="Asia/Tokyo">Asia/Tokyo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="notif_email">Email Notifications</label>
                    <select id="notif_email" name="notif_email">
                        <option value="enabled">Enabled</option>
                        <option value="disabled">Disabled</option>
                    </select>
                </div>
                <button type="submit" name="update_system" class="btn-primary">Save Settings</button>
            </form>
        </section>

        <footer>© 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa</footer>
    </main>
</div>
</body>
</html>
