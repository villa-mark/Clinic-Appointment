<?php
// Component: patientSidebar.php
// Author: Mark Anthony Villahermosa
// Description: Dynamic sidebar that highlights the active menu based on the current page URL.

// Get the current page name from the URL (e.g. "appointment", "patient", etc.)
$currentPath = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Normalize for safety (remove query params or trailing slashes)
$currentPage = strtolower(trim($currentPath));

// In case no specific page is found, default to 'dashboard'
if ($currentPage === '' || $currentPage === 'index.php') {
    $currentPage = 'dashboard';
}
?>

<aside class="sidebar">
    <div>
        <h2>ClinicA</h2>
        <nav>
            <ul>
                <li><a href="/index.php/doctor/" class="<?= $currentPage === 'doctor' || $currentPage === 'dashboard' ? 'active' : '' ?>">🏠 Dashboard</a></li>
                <li><a href="/index.php/doctor/appointment" class="<?= $currentPage === 'appointment' ? 'active' : '' ?>">📅 Appointments</a></li>
                <li><a href="/index.php/doctor/patient" class="<?= $currentPage === 'patient' ? 'active' : '' ?>">👥 Patients</a></li>
                <li><a href="/index.php/doctor/message" class="<?= $currentPage === 'message' ? 'active' : '' ?>">💬 Messages</a></li>
                <li><a href="/index.php/doctor/setting" class="<?= $currentPage === 'setting' ? 'active' : '' ?>">⚙️ Settings</a></li>
            </ul>
        </nav>
    </div>
    <a href="/index.php/" class="logout-btn">Logout</a>
</aside>
