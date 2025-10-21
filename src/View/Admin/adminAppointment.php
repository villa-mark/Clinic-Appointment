<?php
    // Admin Appointments Page
    // Author: Mark Anthony Villahermosa

    require_once __DIR__ . '/../../Controller/admin/adminAppointmentController.php';
    $pageTitle = 'Appointments';
    $pageDescription = "";
    $pageStyles = ['/assets/css/admin/adminAppointment.css'];
    $sidebar = "/../sidebar/adminSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<!-- Filters -->
<section class="card filters">
    <form method="GET" class="filter-form" style="display:flex; gap:15px; flex-wrap:wrap;">
        <div class="form-group">
            <label for="date">Filter by Date:</label>
            <input type="date" name="date" id="date" value="<?= htmlspecialchars($date_filter) ?>">
        </div>
        <div class="form-group">
            <label for="status">Filter by Status:</label>
            <select name="status" id="status">
                <option value="">All</option>
                <option value="Pending" <?= $status_filter=='Pending'?'selected':'' ?>>Pending</option>
                <option value="Confirmed" <?= $status_filter=='Confirmed'?'selected':'' ?>>Confirmed</option>
                <option value="Completed" <?= $status_filter=='Completed'?'selected':'' ?>>Completed</option>
                <option value="Cancelled" <?= $status_filter=='Cancelled'?'selected':'' ?>>Cancelled</option>
            </select>
        </div>
        <div style="align-self:flex-end;">
            <button type="submit" class="btn-primary">Apply Filter</button>
            <a href="admin_appointments.php" class="btn-secondary">Reset</a>
        </div>
    </form>
</section>

<!-- Appointments Table -->
<section class="card table-section">
    <h2>All Appointments</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Patient</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Reason</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(empty($filtered_appointments)): ?>
                    <tr><td colspan="7" style="text-align:center;">No appointments found.</td></tr>
                <?php else: ?>
                    <?php foreach($filtered_appointments as $appt): ?>
                        <tr>
                            <td><?= htmlspecialchars($appt['patient']) ?></td>
                            <td><?= htmlspecialchars($appt['doctor']) ?></td>
                            <td><?= htmlspecialchars($appt['date']) ?></td>
                            <td><?= htmlspecialchars($appt['time']) ?></td>
                            <td><?= htmlspecialchars($appt['reason']) ?></td>
                            <td><span class="status <?= strtolower($appt['status']) ?>"><?= htmlspecialchars($appt['status']) ?></span></td>
                            <td><a href="admin_view_appointment.php?id=<?= urlencode($appt['patient']) ?>" class="btn-small">View</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
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