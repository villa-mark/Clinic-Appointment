<?php
// Component: patientSidebar.php
// Author: Mark Anthony Villahermosa
// Description: Dynamic sidebar that highlights the active menu based on current URL path

// Get current path (e.g., "appointment", "profile", etc.)
$currentPath = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Optional: normalize root route to "dashboard"
if ($currentPath === '' || $currentPath === 'patient') {
    $currentPath = 'dashboard';
}
?>

<aside class="sidebar">
    <div>
        <h2>ClinicA</h2>
        <nav>
            <ul>
                <li><a href="/index.php/patient/" class="<?= $currentPath === 'dashboard' ? 'active' : '' ?>">🏠 Dashboard</a></li>
                <li><a href="/index.php/patient/search" class="<?= $currentPath === 'search' ? 'active' : '' ?>">🧬 Search Disease</a></li>
                <li><a href="/index.php/patient/appointment" class="<?= $currentPath === 'appointment' ? 'active' : '' ?>">📅 My Appointments</a></li>
                <li><a href="/index.php/patient/profile" class="<?= $currentPath === 'profile' ? 'active' : '' ?>">👤 Profile</a></li>
            </ul>
        </nav>
    </div>
    <a href="/index.php/" class="logout-btn">Logout</a>
</aside>
