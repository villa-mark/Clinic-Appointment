# 🏥 Clinic Appointment System  

## 📌 Project Name  
**Clinic Appointment**

## 💻 Platform  
**PHP Website (Basic CRUD + Authentication)**  

---

## 📖 Overview  
A simple web-based **clinic appointment system** where patients can book appointments with doctors.  
Each clinic has an admin who manages doctors.  
Doctors can accept or decline appointments, and patients can search diseases to find the right doctor.

---

## 👥 System Roles  

### 🏢 Clinic Admin  
- Manages doctors and views patients under those doctors.  

### 👨‍⚕️ Doctor  
- Manages their appointments (accept or decline).  

### 🧑‍💻 Patient  
- Searches diseases and requests appointments.  

---

## 🔄 Project Flow  

1. **Create Clinic Profile** (Clinic Name, Location, Password)  
2. **Clinic Admin logs in** using the clinic credentials.  
3. **Admin adds doctors** (Name, Specialization, Schedule, Description).  
4. **Patient searches** for a disease and views related doctors.  
5. **Patient requests an appointment** with a chosen doctor.  
6. **Doctor logs in** to accept or decline the appointment.  

---

## 🧩 User Stories  

### 🏢 Epic 1: Clinic Management (Admin)  

**Story 1.1**  
_As a clinic admin, I want to create a clinic profile by entering the clinic name, location, and password so that the clinic can be registered in the system._  

**Story 1.2**  
_As a clinic admin, I want to log in to the system using the clinic’s credentials so that I can manage doctors._  

**Story 1.3**  
_As a clinic admin, I want to add a doctor by entering their name, specialization, schedule, and description so that patients can find and book them._  

**Story 1.4**  
_As a clinic admin, I want to deactivate a doctor so that they can no longer receive new appointments._  

**Story 1.5**  
_As a clinic admin, I want to view the list of patients who have appointments under each doctor so that I can track clinic activity._  

---

### 👨‍⚕️ Epic 2: Doctor Management (Doctor Role)  

**Story 2.1**  
_As a doctor, I want to log in to the system using my assigned username and password so that I can manage my appointments._  

**Story 2.2**  
_As a doctor, I want to view the list of appointment requests so that I can see which patients want to consult with me._  

**Story 2.3**  
_As a doctor, I want to accept or decline appointment requests so that I can control my schedule._  

---

### 🧑‍💻 Epic 3: Patient Interaction (Patient Role)  

**Story 3.1**  
_As a patient, I want to register by entering my name, username, and password so that I can access the appointment system._  

**Story 3.2**  
_As a patient, I want to search for a disease so that I can find doctors who specialize in that disease._  

**Story 3.3**  
_As a patient, I want to view doctor details (name, specialization, schedule, and description) so that I can choose the right doctor._  

**Story 3.4**  
_As a patient, I want to request an appointment with a doctor so that I can schedule a consultation._  

**Story 3.5**  
_As a patient, I want to view my appointment list and their statuses (Pending, Accepted, Declined) so that I know my appointment progress._  

---

### ⚙️ Epic 4: System Behavior (General)  

- The system should use **password-based login** for each role (clinic admin, doctor, patient).  
- Only **admins** can add doctors.  
- Only **patients** can create appointments.  
- Only **doctors** can change appointment status.  
- Data should be stored in a **MySQL database**.  
- The system should prevent **duplicate appointments** for the same date and time.  

---

## 🗂️ Suggested Database Tables  
- **Clinic** – stores clinic details and admin credentials  
- **Doctor** – stores doctor profiles and schedules  
- **Patient** – stores patient login info  
- **Appointment** – stores appointment requests and statuses  
- **Disease** *(optional)* – links diseases to specializations  

---

## 🧠 Tech Stack  
- **Frontend:** HTML, CSS (Bootstrap)  
- **Backend:** PHP (Procedural or OOP)  
- **Database:** MySQL  
- **Web Server:** Apache (XAMPP/WAMP/Laragon)  

---

## 🧾 Author  
**Mark Anthony Villahermosa**  
_Clinic Appointment PHP Project_  
