<?php
session_start();
// Simulated logged-in patient
$patientName = "John Doe";

// Sample appointment data (could be fetched from a database later)
$appointments = [
    [
        "doctor" => "Dr. Maria Santos",
        "specialization" => "Cardiology",
        "date" => "Oct 18, 2025 - 10:00 AM",
        "status" => "Pending"
    ],
    [
        "doctor" => "Dr. Jason Dela Cruz",
        "specialization" => "Dermatology",
        "date" => "Oct 20, 2025 - 2:00 PM",
        "status" => "Accepted"
    ],
    [
        "doctor" => "Dr. Angela Reyes",
        "specialization" => "Pediatrics",
        "date" => "Oct 25, 2025 - 9:30 AM",
        "status" => "Declined"
    ],
    [
        "doctor" => "Dr. Maria Santos",
        "specialization" => "Cardiology",
        "date" => "Oct 18, 2025 - 10:00 AM",
        "status" => "Pending"
    ],
    [
        "doctor" => "Dr. Jason Dela Cruz",
        "specialization" => "Dermatology",
        "date" => "Oct 20, 2025 - 2:00 PM",
        "status" => "Accepted"
    ],
    [
        "doctor" => "Dr. Angela Reyes",
        "specialization" => "Pediatrics",
        "date" => "Oct 25, 2025 - 9:30 AM",
        "status" => "Declined"
    ],
    [
        "doctor" => "Dr. Maria Santos",
        "specialization" => "Cardiology",
        "date" => "Oct 18, 2025 - 10:00 AM",
        "status" => "Pending"
    ],
    [
        "doctor" => "Dr. Jason Dela Cruz",
        "specialization" => "Dermatology",
        "date" => "Oct 20, 2025 - 2:00 PM",
        "status" => "Accepted"
    ],
    [
        "doctor" => "Dr. Angela Reyes",
        "specialization" => "Pediatrics",
        "date" => "Oct 25, 2025 - 9:30 AM",
        "status" => "Declined"
    ],
    [
        "doctor" => "Dr. Maria Santos",
        "specialization" => "Cardiology",
        "date" => "Oct 18, 2025 - 10:00 AM",
        "status" => "Pending"
    ],
    [
        "doctor" => "Dr. Jason Dela Cruz",
        "specialization" => "Dermatology",
        "date" => "Oct 20, 2025 - 2:00 PM",
        "status" => "Accepted"
    ],
    [
        "doctor" => "Dr. Angela Reyes",
        "specialization" => "Pediatrics",
        "date" => "Oct 25, 2025 - 9:30 AM",
        "status" => "Declined"
    ],
    [
        "doctor" => "Dr. Maria Santos",
        "specialization" => "Cardiology",
        "date" => "Oct 18, 2025 - 10:00 AM",
        "status" => "Pending"
    ],
    [
        "doctor" => "Dr. Jason Dela Cruz",
        "specialization" => "Dermatology",
        "date" => "Oct 20, 2025 - 2:00 PM",
        "status" => "Accepted"
    ],
    [
        "doctor" => "Dr. Angela Reyes",
        "specialization" => "Pediatrics",
        "date" => "Oct 25, 2025 - 9:30 AM",
        "status" => "Declined"
    ],
    [
        "doctor" => "Dr. Maria Santos",
        "specialization" => "Cardiology",
        "date" => "Oct 18, 2025 - 10:00 AM",
        "status" => "Pending"
    ],
    [
        "doctor" => "Dr. Jason Dela Cruz",
        "specialization" => "Dermatology",
        "date" => "Oct 20, 2025 - 2:00 PM",
        "status" => "Accepted"
    ],
    [
        "doctor" => "Dr. Angela Reyes",
        "specialization" => "Pediatrics",
        "date" => "Oct 25, 2025 - 9:30 AM",
        "status" => "Declined"
    ]
];