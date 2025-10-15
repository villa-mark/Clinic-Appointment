<?php
// Choose Register Type Page
// Author: Mark Anthony Villahermosa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Clinic Appointment</title>
    <link rel="stylesheet" href="/assets/css/loginStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #def2f1 0%, #feffff 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .choose-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 2.5rem 3rem;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            text-align: center;
            width: 100%;
            max-width: 420px;
        }

        h2 {
            margin-bottom: 1rem;
            color: #2b7a78;
            font-size: 1.9rem;
        }

        p {
            color: #555;
            margin-bottom: 2rem;
            font-size: 1rem;
        }

        .btn-option {
            display: block;
            width: 100%;
            margin: 0.6rem 0;
            padding: 0.9rem;
            border: none;
            border-radius: 10px;
            background: #3aafa9;
            color: white;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            text-decoration: none;
        }

        .btn-option:hover {
            background: #2b7a78;
            transform: translateY(-2px);
        }

        .back-home {
            display: inline-block;
            margin-top: 1.5rem;
            color: #3aafa9;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        .back-home:hover {
            color: #2b7a78;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="choose-card">
        <h2>Create an Account</h2>
        <p>Select how you want to register:</p>

        <a href="/index.php/register-clinic" class="btn-option">Register a Clinic</a>
        <a href="/index.php/register-patient" class="btn-option">Register as Patient</a>

        <a href="/index.php/" class="back-home">Back to Home</a>
    </div>

</body>
</html>
