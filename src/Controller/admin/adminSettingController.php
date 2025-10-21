<?php


session_start();

$clinicName = "ClinicA"; // Replace with session data

// Sample admin data (replace with DB query later)
$admin = [
    'name' => 'Administrator',
    'email' => 'admin@clinica.com',
    'username' => 'admin123'
];

// Mock form submission messages
$successMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update_profile'])) {
        $successMessage = "Profile information has been updated successfully.";
    } elseif (isset($_POST['update_password'])) {
        $successMessage = "Password has been changed successfully.";
    } elseif (isset($_POST['update_system'])) {
        $successMessage = "System settings have been saved successfully.";
    }
}