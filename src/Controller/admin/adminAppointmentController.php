<?php
// Author: Mark Anthony Villahermosa
// Description: Handles appointment data and filtering logic

session_start();

// Sample appointments data (replace later with DB queries)
$appointments = [
    ['patient' => 'Juan Dela Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-14', 'time' => '9:00 AM', 'reason' => 'General Checkup', 'status' => 'Completed'],
    ['patient' => 'Maria Reyes', 'doctor' => 'Dr. Lim', 'date' => '2025-10-16', 'time' => '10:30 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Jose Robles', 'doctor' => 'Dr. Tan', 'date' => '2025-10-17', 'time' => '2:00 PM', 'reason' => 'Flu Symptoms', 'status' => 'Cancelled'],
    ['patient' => 'Ana Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-18', 'time' => '1:00 PM', 'reason' => 'Follow-up', 'status' => 'Confirmed'],
    ['patient' => 'Juan Dela Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-14', 'time' => '9:00 AM', 'reason' => 'General Checkup', 'status' => 'Completed'],
    ['patient' => 'Maria Reyes', 'doctor' => 'Dr. Lim', 'date' => '2025-10-16', 'time' => '10:30 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Jose Robles', 'doctor' => 'Dr. Tan', 'date' => '2025-10-17', 'time' => '2:00 PM', 'reason' => 'Flu Symptoms', 'status' => 'Cancelled'],
    ['patient' => 'Ana Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-18', 'time' => '1:00 PM', 'reason' => 'Follow-up', 'status' => 'Confirmed'],
    ['patient' => 'Juan Dela Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-14', 'time' => '9:00 AM', 'reason' => 'General Checkup', 'status' => 'Completed'],
    ['patient' => 'Maria Reyes', 'doctor' => 'Dr. Lim', 'date' => '2025-10-16', 'time' => '10:30 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Jose Robles', 'doctor' => 'Dr. Tan', 'date' => '2025-10-17', 'time' => '2:00 PM', 'reason' => 'Flu Symptoms', 'status' => 'Cancelled'],
    ['patient' => 'Ana Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-18', 'time' => '1:00 PM', 'reason' => 'Follow-up', 'status' => 'Confirmed'],
    ['patient' => 'Juan Dela Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-14', 'time' => '9:00 AM', 'reason' => 'General Checkup', 'status' => 'Completed'],
    ['patient' => 'Maria Reyes', 'doctor' => 'Dr. Lim', 'date' => '2025-10-16', 'time' => '10:30 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Jose Robles', 'doctor' => 'Dr. Tan', 'date' => '2025-10-17', 'time' => '2:00 PM', 'reason' => 'Flu Symptoms', 'status' => 'Cancelled'],
    ['patient' => 'Ana Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-18', 'time' => '1:00 PM', 'reason' => 'Follow-up', 'status' => 'Confirmed'],
    ['patient' => 'Juan Dela Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-14', 'time' => '9:00 AM', 'reason' => 'General Checkup', 'status' => 'Completed'],
    ['patient' => 'Maria Reyes', 'doctor' => 'Dr. Lim', 'date' => '2025-10-16', 'time' => '10:30 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Jose Robles', 'doctor' => 'Dr. Tan', 'date' => '2025-10-17', 'time' => '2:00 PM', 'reason' => 'Flu Symptoms', 'status' => 'Cancelled'],
    ['patient' => 'Ana Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-18', 'time' => '1:00 PM', 'reason' => 'Follow-up', 'status' => 'Confirmed'],
    ['patient' => 'Juan Dela Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-14', 'time' => '9:00 AM', 'reason' => 'General Checkup', 'status' => 'Completed'],
    ['patient' => 'Maria Reyes', 'doctor' => 'Dr. Lim', 'date' => '2025-10-16', 'time' => '10:30 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Jose Robles', 'doctor' => 'Dr. Tan', 'date' => '2025-10-17', 'time' => '2:00 PM', 'reason' => 'Flu Symptoms', 'status' => 'Cancelled'],
    ['patient' => 'Ana Cruz', 'doctor' => 'Dr. Santos', 'date' => '2025-10-18', 'time' => '1:00 PM', 'reason' => 'Follow-up', 'status' => 'Confirmed'],
];

// Filters
$date_filter = $_GET['date'] ?? '';
$status_filter = $_GET['status'] ?? '';

$filtered_appointments = array_filter($appointments, function($appt) use ($date_filter, $status_filter) {
    $match = true;
    if ($date_filter && $appt['date'] !== $date_filter) $match = false;
    if ($status_filter && strtolower($appt['status']) !== strtolower($status_filter)) $match = false;
    return $match;
});
