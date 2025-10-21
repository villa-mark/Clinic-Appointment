<?php
    // View Patient Page
    // Author: Mark Anthony Villahermosa

    require __DIR__ . '/../../Controller/admin/adminViewPatientController.php';

    $pageTitle = 'Patient Profile';
    $pageDescription = "Detailed information and records of the selected patient";
    $pageStyles = ['/assets/css/admin/adminViewPatient.css'];
    $sidebar = "/../sidebar/adminSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<!-- Patient Info -->
<section class="card">
    <h2><?= htmlspecialchars($patient['name']); ?></h2>
    <div class="info-grid">
        <p><strong>Age:</strong> <?= htmlspecialchars($patient['age']); ?></p>
        <p><strong>Gender:</strong> <?= htmlspecialchars($patient['gender']); ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($patient['email']); ?></p>
        <p><strong>Contact:</strong> <?= htmlspecialchars($patient['contact']); ?></p>
        <p><strong>Address:</strong> <?= htmlspecialchars($patient['address']); ?></p>
        <p><strong>Registered On:</strong> <?= htmlspecialchars($patient['registered_date']); ?></p>
    </div>
</section>

<!-- Appointment History -->
<section class="card table-section">
    <h2>Appointment History</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Doctor</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($appointments as $appt): ?>
                <tr>
                    <td><?= htmlspecialchars($appt['date']); ?></td>
                    <td><?= htmlspecialchars($appt['time']); ?></td>
                    <td><?= htmlspecialchars($appt['doctor']); ?></td>
                    <td><span class="status <?= strtolower($appt['status']); ?>"><?= htmlspecialchars($appt['status']); ?></span></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Medical History -->
<section class="card table-section">
    <h2>Medical History</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Diagnosis</th>
                    <th>Treatment</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($medical_history as $record): ?>
                <tr>
                    <td><?= htmlspecialchars($record['date']); ?></td>
                    <td><?= htmlspecialchars($record['diagnosis']); ?></td>
                    <td><?= htmlspecialchars($record['treatment']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- END MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<?php
    // Capture the buffered content
    $content = ob_get_clean();

    // Now load the layout and pass the content
    require_once __DIR__ . '/../Component/layout/baseLayout.php';
?>
