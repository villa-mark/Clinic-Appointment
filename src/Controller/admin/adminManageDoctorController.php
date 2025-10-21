<?php

session_start();

// Example: Simulated clinic admin name
$clinicName = "ClinicA";

// Sample doctors list (replace with DB data later)
$doctors = [
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed, 9AM - 4PM", "status" => "Active"],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Fri, 10AM - 5PM", "status" => "Inactive"],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Sat, 8AM - 3PM", "status" => "Active"],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed, 9AM - 4PM", "status" => "Active"],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Fri, 10AM - 5PM", "status" => "Inactive"],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Sat, 8AM - 3PM", "status" => "Active"],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed, 9AM - 4PM", "status" => "Active"],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Fri, 10AM - 5PM", "status" => "Inactive"],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Sat, 8AM - 3PM", "status" => "Active"],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed, 9AM - 4PM", "status" => "Active"],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Fri, 10AM - 5PM", "status" => "Inactive"],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Sat, 8AM - 3PM", "status" => "Active"],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed, 9AM - 4PM", "status" => "Active"],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Fri, 10AM - 5PM", "status" => "Inactive"],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Sat, 8AM - 3PM", "status" => "Active"],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed, 9AM - 4PM", "status" => "Active"],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Fri, 10AM - 5PM", "status" => "Inactive"],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Sat, 8AM - 3PM", "status" => "Active"],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed, 9AM - 4PM", "status" => "Active"],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Fri, 10AM - 5PM", "status" => "Inactive"],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Sat, 8AM - 3PM", "status" => "Active"],
    ["name" => "Dr. Maria Santos", "specialization" => "Cardiology", "schedule" => "Mon - Wed, 9AM - 4PM", "status" => "Active"],
    ["name" => "Dr. Jason Dela Cruz", "specialization" => "Dermatology", "schedule" => "Tue - Fri, 10AM - 5PM", "status" => "Inactive"],
    ["name" => "Dr. Angela Reyes", "specialization" => "Pediatrics", "schedule" => "Mon - Sat, 8AM - 3PM", "status" => "Active"],
];