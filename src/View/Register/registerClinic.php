<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register Clinic</title>
  <link rel="stylesheet" href="/assets/css/register/registerClinic.css" />
</head>
<body class="register-body">
  <div class="register-wrapper">
    <div class="register-card">
      
      <!-- Back Button inside Modal -->
      <a href="/index.php/choose" class="back-btn">Back</a>

      <div class="register-header">
        <h2>Register Your Clinic</h2>
        <p>Provide your clinic details below to get started.</p>
      </div>

      <form action="/src/register_clinic.php" method="POST" class="register-form">
        <div class="form-grid">
          <div class="form-group">
            <label for="clinic_name">Clinic Name</label>
            <input type="text" id="clinic_name" name="clinic_name" placeholder="Enter clinic name" required />
          </div>

          <div class="form-group">
            <label for="clinic_location">Clinic Location</label>
            <input type="text" id="clinic_location" name="clinic_location" placeholder="Enter clinic address or city" required />
          </div>

          <div class="form-group">
            <label for="clinic_password">Password</label>
            <input type="password" id="clinic_password" name="clinic_password" placeholder="Create password" required />
          </div>
        </div>

        <button type="submit" class="btn full">Register Clinic</button>
      </form>

      <p class="login-text">
        Already have a clinic? <a href="/index.php/login">Login here</a>
      </p>
    </div>
  </div>
</body>
</html>
