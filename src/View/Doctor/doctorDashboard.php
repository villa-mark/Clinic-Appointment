<?php
    // Doctor Dashboard
    // Author: Mark Anthony Villahermosa
    require_once __DIR__ . '/../../Controller/doctor/doctorDashboardController.php';

    $pageTitle = "Welcome, " . htmlspecialchars($doctorName) . "!";
    $pageDescription = "Here’s your overview and today’s appointments.";
    $pageStyles = ['/assets/css/doctor/doctorDashboard.css', '/assets/css/doctor/doctorAppointment.css'];
    $sidebar = "/../sidebar/doctorSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<!-- Summary Cards -->
<section class="cards">
    <div class="card">
        <h3>Today's Appointments</h3>
        <p><?php echo count($appointments); ?></p>
    </div>
    <div class="card">
        <h3>Total Patients</h3>
        <p>123</p>
    </div>
    <div class="card">
        <h3>Pending Requests</h3>
        <p>2</p>
    </div>
    <div class="card">
        <h3>Messages</h3>
        <p>8</p>
    </div>
</section>

<!-- Appointment Table -->
<section class="appointments">
    <h2>Today's Appointments</h2>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Patient</th>
                    <th>Time</th>
                    <th>Reason</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appointments as $appt): ?>
                    <tr>
                        <td><?= htmlspecialchars($appt['patient']) ?></td>
                        <td><?= htmlspecialchars($appt['time']) ?></td>
                        <td><?= htmlspecialchars($appt['reason']) ?></td>
                        <td><span class="status <?= strtolower($appt['status']) ?>"><?= htmlspecialchars($appt['status']) ?></span></td>
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
