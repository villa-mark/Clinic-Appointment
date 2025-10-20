<?php
// Search Disease Page
// Author: Mark Anthony Villahermosa
session_start();

$patientName = "John Doe";

// Map diseases to doctor specializations
$diseaseMap = [
    "heart disease" => "Cardiology",
    "acne" => "Dermatology",
    "skin rash" => "Dermatology",
    "child fever" => "Pediatrics",
    "migraine" => "Neurology",
    "fracture" => "Orthopedics",
];

// Doctor data
$doctors = [
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed | 9:00 AM - 3:00 PM", "description" => "Expert in heart and blood vessel conditions."],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Thu | 10:00 AM - 4:00 PM", "description" => "Specializes in skin allergies and acne treatment."],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Fri | 8:00 AM - 2:00 PM", "description" => "Child health and immunization expert."],
];

// Disease search logic
$searchTerm = strtolower(trim($_GET['disease'] ?? ''));
$matchedDoctors = [];

if ($searchTerm !== '') {
    $specialization = $diseaseMap[$searchTerm] ?? null;
    if ($specialization) {
        $matchedDoctors = array_filter(
            $doctors,
            fn($doc) => strtolower($doc['specialization']) === strtolower($specialization)
        );
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Disease | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css" />
    <link rel="stylesheet" href="/assets/css/patient/patientSearchDisease.css">
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
                    <li><a href="#" class="active">🧬 Search Disease</a></li>
                    <li><a href="/index.php/patient/appointment">📅 My Appointments</a></li>
                    <li><a href="/index.php/patient/profile">👤 Profile</a></li>
                </ul>
            </nav>
        </div>
        <a href="/index.php/" class="logout-btn">Logout</a>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="main-header">
            <h1>Search Disease</h1>
            <p>Find doctors based on your condition.</p>
        </div>

        <form class="search-bar" method="GET">
            <input type="text" name="disease" placeholder="Enter disease (e.g., acne, migraine, heart disease)" 
                   value="<?= htmlspecialchars($_GET['disease'] ?? '') ?>" required>
            <button type="submit">Search</button>
        </form>

        <?php if ($searchTerm === ''): ?>
            <p>Type a disease above to find matching doctors.</p>
        <?php elseif (empty($matchedDoctors)): ?>
            <p>No doctors found for "<strong><?= htmlspecialchars($searchTerm) ?></strong>".</p>
        <?php else: ?>
            <h2 class="section-title">Doctors for "<?= htmlspecialchars($searchTerm) ?>"</h2>
            <?php foreach ($matchedDoctors as $doc): ?>
                <div class="doctor-card">
                    <h3><?= htmlspecialchars($doc['name']) ?></h3>
                    <p><strong>Specialization:</strong> <?= htmlspecialchars($doc['specialization']) ?></p>
                    <p><strong>Schedule:</strong> <?= htmlspecialchars($doc['schedule']) ?></p>
                    <p><?= htmlspecialchars($doc['description']) ?></p>
                    <a href="/index.php/patient/request_appointment?doctor=<?= urlencode($doc['name']) ?>" class="btn-request">Request Appointment</a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <footer>© 2025 Clinic Appointment System — Designed by Mark Anthony Villahermosa</footer>
    </main>
</div>
</body>
</html>
