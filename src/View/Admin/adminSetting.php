<?php
    // Admin Settings Page
    // Author: Mark Anthony Villahermosa

    require __DIR__ . '/../../Controller/admin/adminSettingController.php';
    
    $pageTitle = 'Admin Settings';
    $pageDescription = "Manage your profile and system preferences";
    $pageStyles = ['/assets/css/admin/adminSetting.css'];
    $sidebar = "/../sidebar/adminSidebar.php";

    // Start output buffering — this captures the page’s content
    ob_start();
?>

<!-- ----------------------------------------------------------------------------------------------------------  -->
<!-- START MAIN CONTENT  -->
<!-- ----------------------------------------------------------------------------------------------------------  -->

<?php if ($successMessage): ?>
    <div class="alert success">
        <?= htmlspecialchars($successMessage) ?>
    </div>
<?php endif; ?>

<!-- Profile Information -->
<section class="card settings-section">
    <h2>Profile Information</h2>
    <form method="POST">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($admin['name']) ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($admin['email']) ?>" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?= htmlspecialchars($admin['username']) ?>" required>
        </div>
        <button type="submit" name="update_profile" class="btn-primary">Save Changes</button>
    </form>
</section>

<!-- Change Password -->
<section class="card settings-section">
    <h2>Change Password</h2>
    <form method="POST">
        <div class="form-group">
            <label for="current_password">Current Password</label>
            <input type="password" id="current_password" name="current_password" required>
        </div>
        <div class="form-group">
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm New Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" name="update_password" class="btn-primary">Update Password</button>
    </form>
</section>

<!-- System Preferences -->
<section class="card settings-section">
    <h2>System Preferences</h2>
    <form method="POST">
        <div class="form-group">
            <label for="timezone">Default Timezone</label>
            <select id="timezone" name="timezone">
                <option value="Asia/Manila">Asia/Manila</option>
                <option value="Asia/Singapore">Asia/Singapore</option>
                <option value="Asia/Tokyo">Asia/Tokyo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="notif_email">Email Notifications</label>
            <select id="notif_email" name="notif_email">
                <option value="enabled">Enabled</option>
                <option value="disabled">Disabled</option>
            </select>
        </div>
        <button type="submit" name="update_system" class="btn-primary">Save Settings</button>
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
