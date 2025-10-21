<?php
session_start();

// Example: Simulated logged-in doctor
$doctorName = "Dr. Maria Santos"; // Replace with session data

// Example message data (in real scenario, fetch from DB)
$messages = [
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    ['from' => 'John Doe', 'subject' => 'Prescription Inquiry', 'date' => '2025-10-14', 'status' => 'Unread'],
    ['from' => 'Mary Grace', 'subject' => 'Appointment Reschedule', 'date' => '2025-10-13', 'status' => 'Read'],
    ['from' => 'Carlos Rivera', 'subject' => 'Follow-up Question', 'date' => '2025-10-12', 'status' => 'Unread'],
    // ... (rest of your data)
];