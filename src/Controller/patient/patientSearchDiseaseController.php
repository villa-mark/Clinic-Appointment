<?php
session_start();
$patientName = "John Doe";


// Map diseases to doctor specializations
$diseaseMap = [
    "heart disease" => "Cardiology",
    "acne" => "Dermatology",
    "skin rash" => "Dermatology",
    "child fever" => "Pediatrics",
    "migraine" => "Neurology",
    "fracture" => "Orthopedics",
];

// Doctor data
$doctors = [
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed | 9:00 AM - 3:00 PM", "description" => "Expert in heart and blood vessel conditions."],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Thu | 10:00 AM - 4:00 PM", "description" => "Specializes in skin allergies and acne treatment."],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Fri | 8:00 AM - 2:00 PM", "description" => "Child health and immunization expert."],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed | 9:00 AM - 3:00 PM", "description" => "Expert in heart and blood vessel conditions."],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Thu | 10:00 AM - 4:00 PM", "description" => "Specializes in skin allergies and acne treatment."],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Fri | 8:00 AM - 2:00 PM", "description" => "Child health and immunization expert."],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed | 9:00 AM - 3:00 PM", "description" => "Expert in heart and blood vessel conditions."],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Thu | 10:00 AM - 4:00 PM", "description" => "Specializes in skin allergies and acne treatment."],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Fri | 8:00 AM - 2:00 PM", "description" => "Child health and immunization expert."],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed | 9:00 AM - 3:00 PM", "description" => "Expert in heart and blood vessel conditions."],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Thu | 10:00 AM - 4:00 PM", "description" => "Specializes in skin allergies and acne treatment."],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Fri | 8:00 AM - 2:00 PM", "description" => "Child health and immunization expert."],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed | 9:00 AM - 3:00 PM", "description" => "Expert in heart and blood vessel conditions."],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Thu | 10:00 AM - 4:00 PM", "description" => "Specializes in skin allergies and acne treatment."],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Fri | 8:00 AM - 2:00 PM", "description" => "Child health and immunization expert."],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed | 9:00 AM - 3:00 PM", "description" => "Expert in heart and blood vessel conditions."],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Thu | 10:00 AM - 4:00 PM", "description" => "Specializes in skin allergies and acne treatment."],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Fri | 8:00 AM - 2:00 PM", "description" => "Child health and immunization expert."],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed | 9:00 AM - 3:00 PM", "description" => "Expert in heart and blood vessel conditions."],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Thu | 10:00 AM - 4:00 PM", "description" => "Specializes in skin allergies and acne treatment."],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Fri | 8:00 AM - 2:00 PM", "description" => "Child health and immunization expert."],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed | 9:00 AM - 3:00 PM", "description" => "Expert in heart and blood vessel conditions."],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Thu | 10:00 AM - 4:00 PM", "description" => "Specializes in skin allergies and acne treatment."],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Fri | 8:00 AM - 2:00 PM", "description" => "Child health and immunization expert."],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed | 9:00 AM - 3:00 PM", "description" => "Expert in heart and blood vessel conditions."],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Thu | 10:00 AM - 4:00 PM", "description" => "Specializes in skin allergies and acne treatment."],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Fri | 8:00 AM - 2:00 PM", "description" => "Child health and immunization expert."],
];

// Disease search logic
$searchTerm = strtolower(trim($_GET['disease'] ?? ''));
$matchedDoctors = [];

if ($searchTerm !== '') {
    $specialization = $diseaseMap[$searchTerm] ?? null;
    if ($specialization) {
        $matchedDoctors = array_filter(
            $doctors,
            fn($doc) => strtolower($doc['specialization']) === strtolower($specialization)
        );
    }
}