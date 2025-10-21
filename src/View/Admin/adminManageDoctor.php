<?php
    // Manage Doctors Page
    // Author: Mark Anthony Villahermosa

    require __DIR__ . '/../../Controller/admin/adminManageDoctorController.php';

    $pageTitle = 'Manage Doctors';
    $pageDescription = "View and manage the list of doctors in your clinic.";
    $pageStyles = ['/assets/css/admin/adminManageDoctor.css'];
    $sidebar = "/../sidebar/adminSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<!-- Doctor Table -->
<section class="table-section">
    <div class="table-container">
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
                <?php foreach ($doctors as $doc): ?>
                    <tr>
                        <td><?= htmlspecialchars($doc['name']); ?></td>
                        <td><?= htmlspecialchars($doc['specialization']); ?></td>
                        <td><?= htmlspecialchars($doc['schedule']); ?></td>
                        <td>
                            <span class="status <?= strtolower($doc['status']); ?>">
                                <?= htmlspecialchars($doc['status']); ?>
                            </span>
                        </td>
                        <td>
                            <?php if ($doc['status'] === "Active"): ?>
                                <a href="#" class="action-btn">Deactivate</a>
                            <?php else: ?>
                                <a href="#" class="action-btn">Activate</a>
                            <?php endif; ?>
                        </td>
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
