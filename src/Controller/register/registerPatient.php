<?php
/*****************************************
* Author: Mark Anthony Villahermosa
* File: registerPatient.php
* Description:
* Handles patient registration by validating,
* sanitizing, and inserting form data into
* the `patients` database table.
* Redirects back to register page with success
* or error messages.
********************************************/

require_once __DIR__ . '/../../config/dbConnect.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // --- STEP 1: Collect & sanitize input ---
    $fullname = trim($_POST["fullname"] ?? '');
    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');

    // --- STEP 2: Validate inputs ---
    $errors = [];

    if (empty($fullname))  $errors[] = "Full name is required.";
    if (empty($username))  $errors[] = "Username is required.";
    if (empty($password))  $errors[] = "Password is required.";
    elseif (strlen($password) < 6) $errors[] = "Password must be at least 6 characters.";

    // --- If any validation fails ---
    if (!empty($errors)) {
        $errorMsg = urlencode(implode(" ", $errors));
        header("Location: /index.php/register?status=error&message={$errorMsg}");
        exit;
    }

    // --- STEP 3: Hash the password ---
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // ⚠ Ensure DB column can store hashed password (should be VARCHAR(255))
    if (strlen($hashedPassword) > 1000) {
        $msg = urlencode("Password hash too long for database column. Please set password column to VARCHAR(255).");
        header("Location: /index.php/register-patient?status=error&message={$msg}");
        exit;
    }

    // --- STEP 4: Check for duplicate username ---
    $checkQuery = "SELECT patient_id FROM patients WHERE username = ?";
    $checkStmt = $conn->prepare($checkQuery);
    $checkStmt->bind_param("s", $username);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        $checkStmt->close();
        header("Location: /index.php/register-patient?status=error&message=" . urlencode("Username already exists. Try another."));
        exit;
    }
    $checkStmt->close();

    // --- STEP 5: Insert new patient record ---
    $insertQuery = "INSERT INTO patients (full_name, username, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sss", $fullname, $username, $hashedPassword);

    if ($stmt->execute()) {
        // ✅ Registration successful
        header("Location: /index.php/register-patient?status=success&message=" . urlencode("Registration successful! You can now log in."));
    } else {
        // ❌ Registration failed
        header("Location: /index.php/register-patient?status=error&message=" . urlencode("Database error: " . $stmt->error));
    }

    $stmt->close();
    $conn->close();
} else {
    // If not POST request
    header("Location: /index.php/register-patient");
    exit;
}
?>
