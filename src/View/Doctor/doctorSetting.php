<?php
    // Doctor Settings Page
    // Author: Mark Anthony Villahermosa
    require_once __DIR__ . '/../../Controller/doctor/doctorSettingController.php';

    $pageTitle = 'Settings';
    $pageDescription = "Update your profile and account settings.";
    $pageStyles = ['/assets/css/doctor/doctorSetting.css'];
    $sidebar = "/../sidebar/doctorSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<!-- Profile Section -->
<section class="settings">
    <h2>Profile Information</h2>
    <form action="#" method="post">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($doctorProfile['name']); ?>">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($doctorProfile['email']); ?>">

        <label for="specialty">Specialty</label>
        <input type="text" id="specialty" name="specialty" value="<?php echo htmlspecialchars($doctorProfile['specialty']); ?>">

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($doctorProfile['phone']); ?>">

        <button type="submit">Update Profile</button>
    </form>
</section>

<!-- Change Password Section -->
<section class="settings" style="margin-top: 30px;">
    <h2>Change Password</h2>
    <form action="#" method="post">
        <label for="current-password">Current Password</label>
        <input type="password" id="current-password" name="current-password">

        <label for="new-password">New Password</label>
        <input type="password" id="new-password" name="new-password">

        <label for="confirm-password">Confirm New Password</label>
        <input type="password" id="confirm-password" name="confirm-password">

        <button type="submit">Change Password</button>
    </form>
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

