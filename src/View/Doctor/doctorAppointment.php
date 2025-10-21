<?php
    // Doctor Appointments Page
    // Author: Mark Anthony Villahermosa
    require_once __DIR__ . '/../../Controller/doctor/doctorAppointmentController.php';

    $pageTitle = 'Appointments';
    $pageDescription = "Manage your appointments efficiently.";
    $pageStyles = ['/assets/css/doctor/doctorAppointment.css'];
    $sidebar = "/../sidebar/doctorSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<form method="POST" class="filter">
    <input type="date" name="filter_date" value="<?= htmlspecialchars($filterDate) ?>" />

    <select name="filter_status">
        <option value="">All Status</option>
        <option value="Pending" <?= $filterStatus === 'Pending' ? 'selected' : '' ?>>Pending</option>
        <option value="Accepted" <?= $filterStatus === 'Accepted' ? 'selected' : '' ?>>Accepted</option>
        <option value="Completed" <?= $filterStatus === 'Completed' ? 'selected' : '' ?>>Completed</option>
        <option value="Cancelled" <?= $filterStatus === 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
    </select>

    <button type="submit">Filter</button>
</form>


<section class="appointments">
    <h2>Appointment List</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Patient</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Reason</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($filteredAppointments as $appt): ?>
                    <tr>
                        <td><?= htmlspecialchars($appt['patient']) ?></td>
                        <td><?= htmlspecialchars($appt['date']) ?></td>
                        <td><?= htmlspecialchars($appt['time']) ?></td>
                        <td><?= htmlspecialchars($appt['reason']) ?></td>
                        <td><span class="status <?= strtolower($appt['status']) ?>"><?= htmlspecialchars($appt['status']) ?></span></td>
                        <td>
                            <?php if (strtolower($appt['status']) === 'pending'): ?>
                                <button class="btn-accept">Accept</button>
                                <button class="btn-decline">Decline</button>
                            <?php elseif (strtolower($appt['status']) === 'accepted'): ?>
                                <button class="btn-complete">Mark as Complete</button>
                            <?php else: ?>
                                <span class="no-action">—</span>
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

<script>
    document.querySelectorAll('.btn-accept').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const statusCell = row.querySelector('.status');
            statusCell.textContent = 'Accepted';
            statusCell.className = 'status accepted';
            row.querySelectorAll('.btn-accept, .btn-decline').forEach(btn => btn.remove());
            const completeBtn = document.createElement('button');
            completeBtn.className = 'btn-complete';
            completeBtn.textContent = 'Mark as Complete';
            row.querySelector('td:last-child').appendChild(completeBtn);
            completeBtn.addEventListener('click', function() {
                statusCell.textContent = 'Completed';
                statusCell.className = 'status completed';
                completeBtn.remove();
            });
        });
    });
    document.querySelectorAll('.btn-decline').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const statusCell = row.querySelector('.status');
            statusCell.textContent = 'Declined';
            statusCell.className = 'status cancelled';
            row.querySelectorAll('.btn-accept, .btn-decline').forEach(btn => btn.remove());
        });
    });
</script>
