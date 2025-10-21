<?php

session_start();

// Example: Simulated logged-in doctor
$doctorName = "Dr. Maria Santos"; // Replace with session data

// Example profile data (in real scenario, fetch from DB)
$doctorProfile = [
    'name' => 'Dr. Maria Santos',
    'email' => 'maria.santos@example.com',
    'specialty' => 'Cardiology',
    'phone' => '+63 912 345 6789'
];