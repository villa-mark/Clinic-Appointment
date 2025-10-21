<?php
    // Doctor Patients Page
    // Author: Mark Anthony Villahermosa
    require_once __DIR__ . '/../../Controller/doctor/doctorPatientController.php';

    $pageTitle = 'My Patients';
    $pageDescription = "List of all patients under your care.";
    $pageStyles = ['/assets/css/doctor/doctorPatient.css'];
    $sidebar = "/../sidebar/doctorSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<!-- Patients Table -->
<section class="patients">
    <h2>Patient List</h2>

    <!-- Search -->
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search patient name...">
    </div>

    <div class="table-container">
        <table id="patientTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Last Visit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($patients as $patient): ?>
                <tr>
                    <td><?= htmlspecialchars($patient['name']) ?></td>
                    <td><?= htmlspecialchars($patient['age']) ?></td>
                    <td><?= htmlspecialchars($patient['gender']) ?></td>
                    <td><?= htmlspecialchars($patient['last_visit']) ?></td>
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
