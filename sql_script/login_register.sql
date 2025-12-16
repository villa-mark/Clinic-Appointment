-- =============================================
-- ROLE TABLE
-- =============================================
CREATE TABLE IF NOT EXISTS role (
    role_id INT AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(45) NOT NULL
);

-- Insert default roles ONLY if they do not exist
INSERT INTO role (role_name)
SELECT 'Admin'
WHERE NOT EXISTS (SELECT 1 FROM role WHERE role_name = 'Admin');

INSERT INTO role (role_name)
SELECT 'Doctor'
WHERE NOT EXISTS (SELECT 1 FROM role WHERE role_name = 'Doctor');

INSERT INTO role (role_name)
SELECT 'Patient'
WHERE NOT EXISTS (SELECT 1 FROM role WHERE role_name = 'Patient');


-- =============================================
-- CLINIC TABLE
-- =============================================
CREATE TABLE IF NOT EXISTS clinic (
    clinic_id INT AUTO_INCREMENT PRIMARY KEY,
    clinic_name VARCHAR(100) NOT NULL,
    clinic_location VARCHAR(100) NOT NULL,
    admin_password VARCHAR(45) NOT NULL
);


-- =============================================
-- USER TABLE
-- =============================================
CREATE TABLE IF NOT EXISTS user (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(45) NOT NULL UNIQUE,
    password VARCHAR(45) NOT NULL,
    role_id INT NOT NULL,
    clinic_id INT NULL,

    CONSTRAINT fk_user_role
        FOREIGN KEY (role_id) REFERENCES role(role_id),

    CONSTRAINT fk_user_clinic
        FOREIGN KEY (clinic_id) REFERENCES clinic(clinic_id)
);


-- =============================================
-- DOCTOR TABLE (1-to-1 with User)
-- =============================================
CREATE TABLE IF NOT EXISTS doctor (
    doctor_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    profession VARCHAR(100) NOT NULL,
    user_id INT NOT NULL UNIQUE,

    CONSTRAINT fk_doctor_user
        FOREIGN KEY (user_id) REFERENCES user(user_id)
        ON DELETE CASCADE
);


-- =============================================
-- PATIENT TABLE (1-to-1 with User)
-- =============================================
CREATE TABLE IF NOT EXISTS patient (
    patient_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(45) NOT NULL,
    user_id INT NOT NULL UNIQUE,

    CONSTRAINT fk_patient_user
        FOREIGN KEY (user_id) REFERENCES user(user_id)
        ON DELETE CASCADE
);
