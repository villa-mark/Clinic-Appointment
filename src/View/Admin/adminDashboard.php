<?php
    // Clinic Admin Dashboard
    // Author: Mark Anthony Villahermosa

    require_once __DIR__ . '/../../Controller/admin/adminDashboardController.php';

    $pageTitle = 'Welcome, Admin!';
    $pageDescription = "Here’s an overview of your clinic’s performance.";
    $pageStyles = ['/assets/css/admin/adminDashboard.css'];
    $sidebar = "/../sidebar/adminSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<!-- Stats Cards -->
<div class="stats">
    <div class="card">
        <h3>8</h3>
        <p>Total Doctors</p>
    </div>
    <div class="card">
        <h3>6</h3>
        <p>Active Doctors</p>
    </div>
    <div class="card">
        <h3>120</h3>
        <p>Total Patients</p>
    </div>
    <div class="card">
        <h3>35</h3>
        <p>Pending Appointments</p>
    </div>
</div>

<!-- Doctor Management Section -->
<section class="doctors card">
    <h2>Doctor Management</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Specialization</th>
                <th>Schedule</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($doctors)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">No doctors found.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($doctors as $doc): ?>
                    <tr>
                        <td><?= htmlspecialchars($doc['name']) ?></td>
                        <td><?= htmlspecialchars($doc['specialization']) ?></td>
                        <td><?= htmlspecialchars($doc['schedule']) ?></td>
                        <td>
                            <span class="status <?= strtolower($doc['status']) ?>">
                                <?= htmlspecialchars($doc['status']) ?>
                            </span>
                        </td>
                        <td>
                            <?php if ($doc['status'] === 'Active'): ?>
                                <a href="#" class="action-btn">Deactivate</a>
                            <?php else: ?>
                                <a href="#" class="action-btn">Activate</a>
                            <?php endif; ?>
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
