<?php


session_start();

// Example: Simulated logged-in doctor
$doctorName = "Dr. Maria Santos"; // Replace with session data

// Example patient data (in real scenario, fetch from DB)
$patients = [
    ['name' => 'John Doe', 'age' => 34, 'gender' => 'Male', 'last_visit' => '2025-10-10'],
    ['name' => 'Mary Grace', 'age' => 28, 'gender' => 'Female', 'last_visit' => '2025-10-12'],
    ['name' => 'Carlos Rivera', 'age' => 45, 'gender' => 'Male', 'last_visit' => '2025-10-08'],
    ['name' => 'Anne Cruz', 'age' => 32, 'gender' => 'Female', 'last_visit' => '2025-10-11'],
    ['name' => 'Paul Lim', 'age' => 40, 'gender' => 'Male', 'last_visit' => '2025-09-30'],
    ['name' => 'Jane Dela Cruz', 'age' => 29, 'gender' => 'Female', 'last_visit' => '2025-10-13'],
    ['name' => 'John Doe', 'age' => 34, 'gender' => 'Male', 'last_visit' => '2025-10-10'],
    ['name' => 'Mary Grace', 'age' => 28, 'gender' => 'Female', 'last_visit' => '2025-10-12'],
    ['name' => 'Carlos Rivera', 'age' => 45, 'gender' => 'Male', 'last_visit' => '2025-10-08'],
    ['name' => 'Anne Cruz', 'age' => 32, 'gender' => 'Female', 'last_visit' => '2025-10-11'],
    ['name' => 'John Doe', 'age' => 34, 'gender' => 'Male', 'last_visit' => '2025-10-10'],
    ['name' => 'Mary Grace', 'age' => 28, 'gender' => 'Female', 'last_visit' => '2025-10-12'],
    ['name' => 'Carlos Rivera', 'age' => 45, 'gender' => 'Male', 'last_visit' => '2025-10-08'],
    ['name' => 'Anne Cruz', 'age' => 32, 'gender' => 'Female', 'last_visit' => '2025-10-11'],
    ['name' => 'John Doe', 'age' => 34, 'gender' => 'Male', 'last_visit' => '2025-10-10'],
    ['name' => 'Mary Grace', 'age' => 28, 'gender' => 'Female', 'last_visit' => '2025-10-12'],
    ['name' => 'Carlos Rivera', 'age' => 45, 'gender' => 'Male', 'last_visit' => '2025-10-08'],
    ['name' => 'Anne Cruz', 'age' => 32, 'gender' => 'Female', 'last_visit' => '2025-10-11'],
    ['name' => 'Anne Cruz', 'age' => 32, 'gender' => 'Female', 'last_visit' => '2025-10-11'],
];