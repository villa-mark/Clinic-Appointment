<?php

session_start();

// Example: Simulated logged-in clinic admin
$clinicName = "ClinicA"; // Replace with session data

// Doctor data array (can later come from DB)
$doctors = [
    [
        'name' => 'Dr. Maria Santos',
        'specialization' => 'Cardiology',
        'schedule' => 'Mon - Wed, 9AM - 4PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Jason Dela Cruz',
        'specialization' => 'Dermatology',
        'schedule' => 'Tue - Fri, 10AM - 5PM',
        'status' => 'Inactive'
    ],
    [
        'name' => 'Dr. Angela Reyes',
        'specialization' => 'Pediatrics',
        'schedule' => 'Mon - Sat, 8AM - 3PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Daniel Lim',
        'specialization' => 'Orthopedics',
        'schedule' => 'Wed - Sat, 10AM - 6PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Maria Santos',
        'specialization' => 'Cardiology',
        'schedule' => 'Mon - Wed, 9AM - 4PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Jason Dela Cruz',
        'specialization' => 'Dermatology',
        'schedule' => 'Tue - Fri, 10AM - 5PM',
        'status' => 'Inactive'
    ],
    [
        'name' => 'Dr. Angela Reyes',
        'specialization' => 'Pediatrics',
        'schedule' => 'Mon - Sat, 8AM - 3PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Daniel Lim',
        'specialization' => 'Orthopedics',
        'schedule' => 'Wed - Sat, 10AM - 6PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Maria Santos',
        'specialization' => 'Cardiology',
        'schedule' => 'Mon - Wed, 9AM - 4PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Jason Dela Cruz',
        'specialization' => 'Dermatology',
        'schedule' => 'Tue - Fri, 10AM - 5PM',
        'status' => 'Inactive'
    ],
    [
        'name' => 'Dr. Angela Reyes',
        'specialization' => 'Pediatrics',
        'schedule' => 'Mon - Sat, 8AM - 3PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Daniel Lim',
        'specialization' => 'Orthopedics',
        'schedule' => 'Wed - Sat, 10AM - 6PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Maria Santos',
        'specialization' => 'Cardiology',
        'schedule' => 'Mon - Wed, 9AM - 4PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Jason Dela Cruz',
        'specialization' => 'Dermatology',
        'schedule' => 'Tue - Fri, 10AM - 5PM',
        'status' => 'Inactive'
    ],
    [
        'name' => 'Dr. Angela Reyes',
        'specialization' => 'Pediatrics',
        'schedule' => 'Mon - Sat, 8AM - 3PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Daniel Lim',
        'specialization' => 'Orthopedics',
        'schedule' => 'Wed - Sat, 10AM - 6PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Maria Santos',
        'specialization' => 'Cardiology',
        'schedule' => 'Mon - Wed, 9AM - 4PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Jason Dela Cruz',
        'specialization' => 'Dermatology',
        'schedule' => 'Tue - Fri, 10AM - 5PM',
        'status' => 'Inactive'
    ],
    [
        'name' => 'Dr. Angela Reyes',
        'specialization' => 'Pediatrics',
        'schedule' => 'Mon - Sat, 8AM - 3PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Daniel Lim',
        'specialization' => 'Orthopedics',
        'schedule' => 'Wed - Sat, 10AM - 6PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Maria Santos',
        'specialization' => 'Cardiology',
        'schedule' => 'Mon - Wed, 9AM - 4PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Jason Dela Cruz',
        'specialization' => 'Dermatology',
        'schedule' => 'Tue - Fri, 10AM - 5PM',
        'status' => 'Inactive'
    ],
    [
        'name' => 'Dr. Angela Reyes',
        'specialization' => 'Pediatrics',
        'schedule' => 'Mon - Sat, 8AM - 3PM',
        'status' => 'Active'
    ],
    [
        'name' => 'Dr. Daniel Lim',
        'specialization' => 'Orthopedics',
        'schedule' => 'Wed - Sat, 10AM - 6PM',
        'status' => 'Active'
    ],
];