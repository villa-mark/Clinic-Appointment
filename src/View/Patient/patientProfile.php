<?php
// Patient Profile Page
// Author: Mark Anthony Villahermosa
    require_once __DIR__ . '/../../Controller/patient/patientProfileController.php';

    $pageTitle = "My Profile";
    $pageDescription = "View and update your personal information.";
    $pageStyles = ['/assets/css/patient/patientProfile.css'];
    $sidebar = "/../sidebar/patientSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

        <div class="profile-card">
            <h2>Personal Details</h2>
            <div class="profile-info">
                <span>Full Name:</span> <p><?= htmlspecialchars($patient['name']); ?></p>
                <span>Email:</span> <p><?= htmlspecialchars($patient['email']); ?></p>
                <span>Phone:</span> <p><?= htmlspecialchars($patient['phone']); ?></p>
                <span>Address:</span> <p><?= htmlspecialchars($patient['address']); ?></p>
                <span>Birthday:</span> <p><?= htmlspecialchars($patient['birthday']); ?></p>
                <span>Gender:</span> <p><?= htmlspecialchars($patient['gender']); ?></p>
            </div>

            <a href="/index.php/patient/edit_profile" class="btn-edit">Edit Profile</a>
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
