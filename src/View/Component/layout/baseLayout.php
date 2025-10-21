<?php
// File: /views/layouts/adminLayout.php
// Author: Mark Anthony Villahermosa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Error') ?> | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/common/baseLayout.css">
    <?php if (!empty($pageStyles)): ?>
        <?php foreach ($pageStyles as $style): ?>
            <link rel="stylesheet" href="<?= htmlspecialchars($style) ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <div class="dashboard">
        <?php require_once __DIR__ . $sidebar; ?>

        <main class="main-content">
            <?php require_once __DIR__ . '/../pageHeader.php'; ?>

            <!-- Dynamic Page Content -->
            <?= $content ?>

            <?php require_once __DIR__ . '/../footer.php'; ?>
        </main>
    </div>
</body>
</html>
