<?php
// Patient Appointments Page
// Author: Mark Anthony Villahermosa
    require_once __DIR__ . '/../../Controller/patient/patientAppointmentController.php';

    $pageTitle = "My Appointments";
    $pageDescription = "View and track your upcoming and past appointments.";
    $pageStyles = ['/assets/css/patient/patientAppointment.css'];
    $sidebar = "/../sidebar/patientSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<!-- Filters -->
<form class="filters" method="GET">
    <div>
        <label for="date">Filter by Date:</label>
        <input type="date" name="date" id="date" value="<?= htmlspecialchars($dateFilter) ?>">
    </div>

    <div>
        <label for="status">Status:</label>
        <select name="status" id="status">
            <?php
            $statuses = ["All", "Pending", "Accepted", "Declined", "Completed"];
            foreach ($statuses as $status) {
                $selected = ($status === $statusFilter) ? 'selected' : '';
                echo "<option value='$status' $selected>$status</option>";
            }
            ?>
        </select>
    </div>

    <button type="submit" style="
        background: #2b7a78; 
        color: white; 
        border: none; 
        padding: 10px 18px; 
        border-radius: 8px; 
        cursor: pointer; 
        font-weight: 600;
        transition: 0.3s;">
        Apply
    </button>
</form>

<!-- Table -->
<div class="appointments-table">
    <table>
        <thead>
            <tr>
                <th>Doctor</th>
                <th>Specialization</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($filteredAppointments)): ?>
                <tr><td colspan="4" style="text-align:center; padding: 20px;">No appointments found.</td></tr>
            <?php else: ?>
                <?php foreach ($filteredAppointments as $appt): ?>
                    <tr>
                        <td><?= htmlspecialchars($appt['doctor']) ?></td>
                        <td><?= htmlspecialchars($appt['specialization']) ?></td>
                        <td><?= htmlspecialchars($appt['date']) ?></td>
                        <td><span class="status <?= strtolower($appt['status']) ?>"><?= htmlspecialchars($appt['status']) ?></span></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- END MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<?php
    // Capture the buffered content
    $content = ob_get_clean();

    // Now load the layout and pass the content
    require_once __DIR__ . '/../Component/layout/baseLayout.php';
?>
