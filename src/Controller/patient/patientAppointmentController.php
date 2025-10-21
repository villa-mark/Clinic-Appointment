<?php
session_start();
$patientName = "John Doe";

// Sample appointments
$appointments = [
    ["doctor" => "Dr. Maria Santos", "specialization" => "Cardiology", "date" => "2025-10-20 10:00 AM", "status" => "Pending"],
    ["doctor" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "date" => "2025-10-22 2:00 PM", "status" => "Accepted"],
    ["doctor" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "date" => "2025-10-25 9:30 AM", "status" => "Declined"],
    ["doctor" => "Dr. Carla Lopez", "specialization" => "Neurology", "date" => "2025-11-01 1:00 PM", "status" => "Completed"],
    ["doctor" => "Dr. Maria Santos", "specialization" => "Cardiology", "date" => "2025-10-20 10:00 AM", "status" => "Pending"],
    ["doctor" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "date" => "2025-10-22 2:00 PM", "status" => "Accepted"],
    ["doctor" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "date" => "2025-10-25 9:30 AM", "status" => "Declined"],
    ["doctor" => "Dr. Carla Lopez", "specialization" => "Neurology", "date" => "2025-11-01 1:00 PM", "status" => "Completed"],
    ["doctor" => "Dr. Maria Santos", "specialization" => "Cardiology", "date" => "2025-10-20 10:00 AM", "status" => "Pending"],
    ["doctor" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "date" => "2025-10-22 2:00 PM", "status" => "Accepted"],
    ["doctor" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "date" => "2025-10-25 9:30 AM", "status" => "Declined"],
    ["doctor" => "Dr. Carla Lopez", "specialization" => "Neurology", "date" => "2025-11-01 1:00 PM", "status" => "Completed"],
    ["doctor" => "Dr. Maria Santos", "specialization" => "Cardiology", "date" => "2025-10-20 10:00 AM", "status" => "Pending"],
    ["doctor" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "date" => "2025-10-22 2:00 PM", "status" => "Accepted"],
    ["doctor" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "date" => "2025-10-25 9:30 AM", "status" => "Declined"],
    ["doctor" => "Dr. Carla Lopez", "specialization" => "Neurology", "date" => "2025-11-01 1:00 PM", "status" => "Completed"],
    ["doctor" => "Dr. Maria Santos", "specialization" => "Cardiology", "date" => "2025-10-20 10:00 AM", "status" => "Pending"],
    ["doctor" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "date" => "2025-10-22 2:00 PM", "status" => "Accepted"],
    ["doctor" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "date" => "2025-10-25 9:30 AM", "status" => "Declined"],
    ["doctor" => "Dr. Carla Lopez", "specialization" => "Neurology", "date" => "2025-11-01 1:00 PM", "status" => "Completed"],
    ["doctor" => "Dr. Maria Santos", "specialization" => "Cardiology", "date" => "2025-10-20 10:00 AM", "status" => "Pending"],
    ["doctor" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "date" => "2025-10-22 2:00 PM", "status" => "Accepted"],
    ["doctor" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "date" => "2025-10-25 9:30 AM", "status" => "Declined"],
    ["doctor" => "Dr. Carla Lopez", "specialization" => "Neurology", "date" => "2025-11-01 1:00 PM", "status" => "Completed"],
];

// Filters
$statusFilter = $_GET['status'] ?? 'All';
$dateFilter = $_GET['date'] ?? '';

// Apply filters
$filteredAppointments = array_filter($appointments, function ($appt) use ($statusFilter, $dateFilter) {
    $statusMatch = $statusFilter === 'All' || strtolower($appt['status']) === strtolower($statusFilter);
    $dateMatch = !$dateFilter || strpos($appt['date'], $dateFilter) !== false;
    return $statusMatch && $dateMatch;
});