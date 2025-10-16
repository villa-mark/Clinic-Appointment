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
    <style>
        /* ---------------------------------
           SEARCH DISEASE PAGE STYLES
        ---------------------------------- */
        .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .search-bar input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            outline: none;
            font-size: 1rem;
            transition: 0.2s ease;
        }

        .search-bar input:focus {
            border-color: #2b7a78;
            box-shadow: 0 0 0 3px rgba(43, 122, 120, 0.2);
        }

        .search-bar button {
            background-color: #2b7a78;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .search-bar button:hover {
            background-color: #3aafa9;
        }

        .section-title {
            font-size: 1.4rem;
            color: #2b7a78;
            margin-top: 30px;
            margin-bottom: 20px;
            font-weight: 600;
            border-bottom: 2px solid #def2f1;
            padding-bottom: 10px;
        }

        .doctor-card {
            background: #fff;
            padding: 25px 30px;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            margin-bottom: 20px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .doctor-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.12);
        }

        .doctor-card h3 {
            color: #2b7a78;
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .doctor-card p {
            margin-bottom: 8px;
            color: #444;
        }

        .btn-request {
            display: inline-block;
            margin-top: 10px;
            background: #3aafa9;
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 10px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-request:hover {
            background: #2b7a78;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            font-size: 0.9rem;
            color: #666;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .search-bar {
                flex-direction: column;
                align-items: stretch;
            }

            .search-bar input, .search-bar button {
                width: 100%;
            }

            .doctor-card {
                padding: 20px;
            }
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
