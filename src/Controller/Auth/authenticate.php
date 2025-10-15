<?php
// Author: Mark Anthony Villahermosa
// Description: Handles login authentication and redirects users based on role.

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);

    // Simple mock authentication (replace with database validation)
    $validUsers = [
        'admin' => ['username' => 'admin', 'password' => '1234'],
        'doctor' => ['username' => 'doctor', 'password' => '1234'],
        'patient' => ['username' => 'patient', 'password' => '1234']
    ];

    if (isset($validUsers[$role]) && 
        $validUsers[$role]['username'] === $username && 
        $validUsers[$role]['password'] === $password) {

        // Store session data
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        // Redirect to the proper dashboard
        switch ($role) {
            case 'admin':
                header("Location: /index.php/admin");
                exit;
            case 'doctor':
                header("Location: /index.php/doctor");
                exit;
            case 'patient':
                header("Location: /index.php/patient");
                exit;
        }
    } else {
        // Invalid login
        echo "<script>
                alert('Invalid username, password, or role!');
                window.location.href='/index.php/login';
              </script>";
        exit;
    }
} else {
    header("Location: /index.php/login");
    exit;
}
?>
