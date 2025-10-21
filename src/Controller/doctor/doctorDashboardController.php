<?php
session_start();
// Example: Simulated logged-in doctor
$doctorName = "Dr. Maria Santos"; // Replace with session data

// Example appointment data (in a real case, you'd fetch this from your database)
$appointments = [
    [
        'patient' => 'John Doe',
        'time' => '9:00 AM',
        'reason' => 'Follow-up Checkup',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Mary Grace',
        'time' => '10:30 AM',
        'reason' => 'Cardio Consultation',
        'status' => 'Completed'
    ],
    [
        'patient' => 'Carlos Rivera',
        'time' => '1:00 PM',
        'reason' => 'Blood Pressure',
        'status' => 'Pending'
    ],
    [
        'patient' => 'John Doe',
        'time' => '9:00 AM',
        'reason' => 'Follow-up Checkup',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Mary Grace',
        'time' => '10:30 AM',
        'reason' => 'Cardio Consultation',
        'status' => 'Completed'
    ],
    [
        'patient' => 'Carlos Rivera',
        'time' => '1:00 PM',
        'reason' => 'Blood Pressure',
        'status' => 'Pending'
    ],
    [
        'patient' => 'John Doe',
        'time' => '9:00 AM',
        'reason' => 'Follow-up Checkup',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Mary Grace',
        'time' => '10:30 AM',
        'reason' => 'Cardio Consultation',
        'status' => 'Completed'
    ],
    [
        'patient' => 'Carlos Rivera',
        'time' => '1:00 PM',
        'reason' => 'Blood Pressure',
        'status' => 'Pending'
    ],
    [
        'patient' => 'John Doe',
        'time' => '9:00 AM',
        'reason' => 'Follow-up Checkup',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Mary Grace',
        'time' => '10:30 AM',
        'reason' => 'Cardio Consultation',
        'status' => 'Completed'
    ],
    [
        'patient' => 'Carlos Rivera',
        'time' => '1:00 PM',
        'reason' => 'Blood Pressure',
        'status' => 'Pending'
    ],[
        'patient' => 'John Doe',
        'time' => '9:00 AM',
        'reason' => 'Follow-up Checkup',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Mary Grace',
        'time' => '10:30 AM',
        'reason' => 'Cardio Consultation',
        'status' => 'Completed'
    ],
    [
        'patient' => 'Carlos Rivera',
        'time' => '1:00 PM',
        'reason' => 'Blood Pressure',
        'status' => 'Pending'
    ],
    [
        'patient' => 'Anne Cruz',
        'time' => '2:30 PM',
        'reason' => 'Dermatology Check',
        'status' => 'Cancelled'
    ]
];