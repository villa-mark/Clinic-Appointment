Project Name: Clinic Appointment
Platform: PHP Website (Basic CRUD + Authentication)
Overview

A simple web-based clinic appointment system where patients can book appointments with doctors.
Each clinic has an admin who manages doctors.
Doctors can accept or decline appointments, and patients can search diseases to find the right doctor.

System Roles

Clinic Admin: manages doctors and views patients under those doctors.

Doctor: manages their appointments (accept or decline).

Patient: searches diseases and requests appointments.

Project Flow

Create Clinic Profile first (Clinic Name, Location, Password).

Clinic Admin logs in using the clinic credentials.

Admin adds doctors (Name, Specialization, Schedule, Description).

Patient can search for a disease and view related doctors.

Patient requests an appointment with a chosen doctor.

Doctor logs in to accept or decline the appointment.

User Stories
Epic 1: Clinic Management (Admin)

Story 1.1:
As a clinic admin, I want to create a clinic profile by entering the clinic name, location, and password so that the clinic can be registered in the system.

Story 1.2:
As a clinic admin, I want to log in to the system using the clinic’s credentials so that I can manage doctors.

Story 1.3:
As a clinic admin, I want to add a doctor by entering their name, specialization, schedule, and description so that patients can find and book them.

Story 1.4:
As a clinic admin, I want to deactivate a doctor so that they can no longer receive new appointments.

Story 1.5:
As a clinic admin, I want to view the list of patients who have appointments under each doctor so that I can track clinic activity.

Epic 2: Doctor Management (Doctor Role)

Story 2.1:
As a doctor, I want to log in to the system using my assigned username and password so that I can manage my appointments.

Story 2.2:
As a doctor, I want to view the list of appointment requests so that I can see which patients want to consult with me.

Story 2.3:
As a doctor, I want to accept or decline appointment requests so that I can control my schedule.

Epic 3: Patient Interaction (Patient Role)

Story 3.1:
As a patient, I want to register by entering my name, username, and password so that I can access the appointment system.

Story 3.2:
As a patient, I want to search for a disease so that I can find doctors who specialize in that disease.

Story 3.3:
As a patient, I want to view doctor details (name, specialization, schedule, and description) so that I can choose the right doctor.

Story 3.4:
As a patient, I want to request an appointment with a doctor so that I can schedule a consultation.

Story 3.5:
As a patient, I want to view my appointment list and their statuses (Pending, Accepted, Declined) so that I know my appointment progress.

Epic 4: System Behavior (General)

The system should use password-based login for each role (clinic admin, doctor, patient).

Only admins can add doctors.

Only patients can create appointments.

Only doctors can change appointment status.

Data should be stored in a MySQL database.

The system should prevent duplicate appointments for the same date and time.
