<?php
// Patient Dashboard
// Author: Mark Anthony Villahermosa
    require_once __DIR__ . '/../../Controller/patient/patientDashboardController.php';

    $pageTitle = "Welcome, " . htmlspecialchars($patientName) . "!";
    $pageDescription = "Here’s a summary of your appointments and activity.";
    $pageStyles = ['/assets/css/patient/patientDashboard.css'];
    $sidebar = "/../sidebar/patientSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<section class="appointments">
    <h2>My Appointments</h2>
    <table class="appointment-list">
        <thead>
            <tr>
                <th>Doctor</th>
                <th>Specialization</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($appointments)): ?>
                <tr>
                    <td colspan="4" style="text-align:center;">No appointments found.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($appointments as $appt): ?>
                    <tr>
                        <td><?= htmlspecialchars($appt["doctor"]) ?></td>
                        <td><?= htmlspecialchars($appt["specialization"]) ?></td>
                        <td><?= htmlspecialchars($appt["date"]) ?></td>
                        <td>
                            <span class="status <?= strtolower($appt["status"]) ?>">
                                <?= htmlspecialchars($appt["status"]) ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
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
