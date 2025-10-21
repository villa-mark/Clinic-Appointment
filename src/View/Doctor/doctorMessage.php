<?php
    // Doctor Messages Page
    // Author: Mark Anthony Villahermosa
    require_once __DIR__ . '/../../Controller/doctor/doctorMessageController.php';

    $pageTitle = 'Messages';
    $pageDescription = "Check and manage messages from your patients.";
    $pageStyles = ['/assets/css/doctor/doctorMessage.css'];
    $sidebar = "/../sidebar/doctorSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<!-- Delete Controls -->
<div class="table-controls">
    <button class="delete-selected">Delete Selected</button>
</div>

<!-- Messages Table -->
<section class="messages">
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th><input type="checkbox" id="selectAll"></th>
                    <th>From</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($messages as $msg): ?>
                <tr>
                    <td><input type="checkbox" class="row-checkbox"></td>
                    <td><?php echo htmlspecialchars($msg['from']); ?></td>
                    <td><?php echo htmlspecialchars($msg['subject']); ?></td>
                    <td><?php echo htmlspecialchars($msg['date']); ?></td>
                    <td><span class="status <?php echo strtolower($msg['status']); ?>"><?php echo $msg['status']; ?></span></td>
                    <td><button class="delete-btn">🗑️</button></td>
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
    // Select All Function
    const selectAll = document.getElementById("selectAll");
    const checkboxes = document.querySelectorAll(".row-checkbox");

    selectAll.addEventListener("change", () => {
        checkboxes.forEach(cb => cb.checked = selectAll.checked);
    });

    // Delete Selected Simulation
    document.querySelector(".delete-selected").addEventListener("click", () => {
        const selected = document.querySelectorAll(".row-checkbox:checked");
        if (selected.length === 0) {
            alert("Please select at least one message to delete.");
            return;
        }
        if (confirm(`Delete ${selected.length} selected message(s)?`)) {
            selected.forEach(cb => cb.closest("tr").remove());
        }
    });

    // Individual Delete Simulation
    document.querySelectorAll(".delete-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            if (confirm("Delete this message?")) {
                btn.closest("tr").remove();
            }
        });
    });
</script>
