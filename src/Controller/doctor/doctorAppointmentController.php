<?php

session_start();

$doctorName = "Dr. Maria Santos";

// Sample data (not from DB)
$appointments = [
    ['patient' => 'John Doe', 'date' => '2025-10-15', 'time' => '9:00 AM', 'reason' => 'Follow-up Checkup', 'status' => 'Accepted'],
    ['patient' => 'Mary Grace', 'date' => '2025-10-15', 'time' => '10:30 AM', 'reason' => 'Cardio Consultation', 'status' => 'Completed'],
    ['patient' => 'Carlos Rivera', 'date' => '2025-10-15', 'time' => '1:00 PM', 'reason' => 'Blood Pressure', 'status' => 'Accepted'],
    ['patient' => 'Anne Cruz', 'date' => '2025-10-15', 'time' => '2:30 PM', 'reason' => 'Dermatology Check', 'status' => 'Cancelled'],
    ['patient' => 'Paul Lim', 'date' => '2025-10-16', 'time' => '9:15 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Rose Dela Peña', 'date' => '2025-10-16', 'time' => '11:00 AM', 'reason' => 'Skin Allergy', 'status' => 'Completed'],
    ['patient' => 'John Doe', 'date' => '2025-10-15', 'time' => '9:00 AM', 'reason' => 'Follow-up Checkup', 'status' => 'Accepted'],
    ['patient' => 'Mary Grace', 'date' => '2025-10-15', 'time' => '10:30 AM', 'reason' => 'Cardio Consultation', 'status' => 'Completed'],
    ['patient' => 'Carlos Rivera', 'date' => '2025-10-15', 'time' => '1:00 PM', 'reason' => 'Blood Pressure', 'status' => 'Accepted'],
    ['patient' => 'Anne Cruz', 'date' => '2025-10-15', 'time' => '2:30 PM', 'reason' => 'Dermatology Check', 'status' => 'Cancelled'],
    ['patient' => 'Paul Lim', 'date' => '2025-10-16', 'time' => '9:15 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Rose Dela Peña', 'date' => '2025-10-16', 'time' => '11:00 AM', 'reason' => 'Skin Allergy', 'status' => 'Completed'],
    ['patient' => 'John Doe', 'date' => '2025-10-15', 'time' => '9:00 AM', 'reason' => 'Follow-up Checkup', 'status' => 'Accepted'],
    ['patient' => 'Mary Grace', 'date' => '2025-10-15', 'time' => '10:30 AM', 'reason' => 'Cardio Consultation', 'status' => 'Completed'],
    ['patient' => 'Carlos Rivera', 'date' => '2025-10-15', 'time' => '1:00 PM', 'reason' => 'Blood Pressure', 'status' => 'Accepted'],
    ['patient' => 'Anne Cruz', 'date' => '2025-10-15', 'time' => '2:30 PM', 'reason' => 'Dermatology Check', 'status' => 'Cancelled'],
    ['patient' => 'Paul Lim', 'date' => '2025-10-16', 'time' => '9:15 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Rose Dela Peña', 'date' => '2025-10-16', 'time' => '11:00 AM', 'reason' => 'Skin Allergy', 'status' => 'Completed'],
    ['patient' => 'John Doe', 'date' => '2025-10-15', 'time' => '9:00 AM', 'reason' => 'Follow-up Checkup', 'status' => 'Accepted'],
    ['patient' => 'Mary Grace', 'date' => '2025-10-15', 'time' => '10:30 AM', 'reason' => 'Cardio Consultation', 'status' => 'Completed'],
    ['patient' => 'Carlos Rivera', 'date' => '2025-10-15', 'time' => '1:00 PM', 'reason' => 'Blood Pressure', 'status' => 'Accepted'],
    ['patient' => 'Anne Cruz', 'date' => '2025-10-15', 'time' => '2:30 PM', 'reason' => 'Dermatology Check', 'status' => 'Cancelled'],
    ['patient' => 'Paul Lim', 'date' => '2025-10-16', 'time' => '9:15 AM', 'reason' => 'Dental Cleaning', 'status' => 'Pending'],
    ['patient' => 'Rose Dela Peña', 'date' => '2025-10-16', 'time' => '11:00 AM', 'reason' => 'Skin Allergy', 'status' => 'Completed'],
];

// Get filter values
$filterDate = $_POST['filter_date'] ?? '';
$filterStatus = $_POST['filter_status'] ?? '';

// Apply filtering
$filteredAppointments = array_filter($appointments, function ($appt) use ($filterDate, $filterStatus) {
    $matchesDate = !$filterDate || $appt['date'] === $filterDate;
    $matchesStatus = !$filterStatus || strtolower($appt['status']) === strtolower($filterStatus);
    return $matchesDate && $matchesStatus;
});
