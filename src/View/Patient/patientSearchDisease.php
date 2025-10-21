<?php
// Search Disease Page
// Author: Mark Anthony Villahermosa
    require_once __DIR__ . '/../../Controller/patient/patientSearchDiseaseController.php';

    $pageTitle = "Search Disease";
    $pageDescription = "Find doctors based on your condition.";
    $pageStyles = ['/assets/css/patient/patientSearchDisease.css'];
    $sidebar = "/../sidebar/patientSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<form class="search-bar" method="GET">
    <input type="text" name="disease" placeholder="Enter disease (e.g., acne, migraine, heart disease)" 
        value="<?= htmlspecialchars($_GET['disease'] ?? '') ?>" required>
    <button type="submit">Search</button>
</form>

<?php if ($searchTerm === ''): ?>
    <p>Type a disease above to find matching doctors.</p>
<?php elseif (empty($matchedDoctors)): ?>
    <p>No doctors found for "<strong><?= htmlspecialchars($searchTerm) ?></strong>".</p>
<?php else: ?>
    <h2 class="section-title">Doctors for "<?= htmlspecialchars($searchTerm) ?>"</h2>
    <?php foreach ($matchedDoctors as $doc): ?>
        <div class="doctor-card">
            <h3><?= htmlspecialchars($doc['name']) ?></h3>
            <p><strong>Specialization:</strong> <?= htmlspecialchars($doc['specialization']) ?></p>
            <p><strong>Schedule:</strong> <?= htmlspecialchars($doc['schedule']) ?></p>
            <p><?= htmlspecialchars($doc['description']) ?></p>
            <a href="/index.php/patient/request_appointment?doctor=<?= urlencode($doc['name']) ?>" class="btn-request">Request Appointment</a>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- END MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<?php
    // Capture the buffered content
    $content = ob_get_clean();

    // Now load the layout and pass the content
    require_once __DIR__ . '/../Component/layout/baseLayout.php';
?>
