<?php
// Component: patientSidebar.php
// Author: Mark Anthony Villahermosa
// Description: Dynamic sidebar that highlights the active menu based on current URL path

// Get current path (e.g., "appointment", "profile", etc.)
$currentPath = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Optional: normalize root route to "dashboard"
if ($currentPath === '' || $currentPath === 'admin') {
    $currentPath = 'dashboard';
}
?>

<aside class="sidebar">
        <div>
            <h2>ClinicA</h2>
            <nav>
                <ul>
                    <li><a href="/index.php/admin/" class="<?= $currentPath === 'dashboard' ? 'active' : '' ?>">🏠 Dashboard</a></li>
                    <li><a href="/index.php/admin/manage" class="<?= $currentPath === 'manage' ? 'active' : '' ?>">👨‍⚕️ Manage Doctors</a></li>
                    <li><a href="/index.php/admin/patient" class="<?= $currentPath === 'patient' ? 'active' : '' ?>">🧑‍🤝‍🧑 View Patients</a></li>
                    <li><a href="/index.php/admin/appointment" class="<?= $currentPath === 'appointment' ? 'active' : '' ?>">📅 Appointments</a></li>
                    <li><a href="/index.php/admin/setting" class="<?= $currentPath === 'setting' ? 'active' : '' ?>">⚙️ Settings</a></li>
                </ul>
            </nav>
        </div>
        <a href="/index.php/" class="logout-btn">Logout</a>
    </aside>