<?php

session_start();

// Simulated clinic admin name
$clinicName = "ClinicA";

// Sample patient data
$patient = [
    'id' => 1,
    'name' => 'Juan Dela Cruz',
    'age' => 29,
    'gender' => 'Male',
    'email' => 'juan.delacruz@example.com',
    'contact' => '09123456789',
    'address' => 'Cebu City, Philippines',
    'registered_date' => '2024-10-05'
];

$appointments = [
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending'],
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending'],
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending'],
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending'],
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending'],
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending'],
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending'],
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending'],
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending'],
    ['date' => '2025-10-14', 'time' => '9:00 AM', 'doctor' => 'Dr. Santos', 'status' => 'Completed'],
    ['date' => '2025-10-20', 'time' => '1:00 PM', 'doctor' => 'Dr. Lim', 'status' => 'Pending'],
];

$medical_history = [
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine'],
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine'],
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine'],
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine'],
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine'],
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine'],
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine'],
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine'],
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine'],
    ['date' => '2024-09-12', 'diagnosis' => 'Flu', 'treatment' => 'Paracetamol & rest'],
    ['date' => '2024-06-22', 'diagnosis' => 'Allergy', 'treatment' => 'Antihistamine'],
];