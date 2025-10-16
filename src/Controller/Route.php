<?php

class Route {
    public function __construct() {
        $urlArr = $this->sliceURL();
        $route = isset($urlArr[1]) ? strtolower($urlArr[1]) : ''; // main route
        $subRoute = isset($urlArr[2]) ? strtolower($urlArr[2]) : ''; // nested route if exists

        switch ($route) {
            case '':
                require __DIR__ . '/../View/landingPage.php';
                break;

            case 'login':
                require __DIR__ . '/../View/Login/login.php';
                break;

            case 'register-patient':
                require __DIR__ . '/../View/Register/registerPatient.php';
                break;

            case 'register-clinic':
                require __DIR__ . '/../View/Register/registerClinic.php';
                break;

            case 'choose':
                require __DIR__ . '/../View/Register/chooseRegister.php';
                break;

            case 'patient':
                $this->handlePatientRoutes($subRoute);
                break;

            case 'admin':
                $this->handleAdminRoutes($subRoute);
                break;

            case 'doctor':
                // Handle doctor subroutes
                $this->handleDoctorRoutes($subRoute);
                break;

            default:
                $this->pageNotFound();
                break;
        }
    }

    private function handlePatientRoutes($subRoute) {
        switch ($subRoute) {
            case '':
                require __DIR__ . '/../View/Patient/patientDashboard.php';
                break;

            case 'search':
                require __DIR__ . '/../View/Patient/patientSearchDisease.php';
                break;

            case 'appointment':
                require __DIR__ . '/../View/Patient/patientAppointment.php';
                break;

            case 'profile':
                require __DIR__ . '/../View/Patient/patientProfile.php';
                break;

                
            default:
                $this->pageNotFound();
                break;
        }
    }

    private function handleAdminRoutes($subRoute) {
        switch ($subRoute) {
            case '':
                require __DIR__ . '/../View/Admin/adminDashboard.php';
                break;

            case 'manage':
                require __DIR__ . '/../View/Admin/adminManageDoctor.php';
                break;

            case 'patient':
                require __DIR__ . '/../View/Admin/adminViewPatient.php';
                break;

            case 'appointment':
                require __DIR__ . '/../View/Admin/adminAppointment.php';
                break;

            case 'setting':
                require __DIR__ . '/../View/Admin/adminSetting.php';
                break;

            default:
                $this->pageNotFound();
                break;
        }
    }

    private function handleDoctorRoutes($subRoute) {
        switch ($subRoute) {
            case '':
                require __DIR__ . '/../View/Doctor/doctorDashboard.php';
                break;

            case 'appointment':
                require __DIR__ . '/../View/Doctor/doctorAppointment.php';
                break;

            case 'patient':
                require __DIR__ . '/../View/Doctor/doctorPatient.php';
                break;

            case 'message':
                require __DIR__ . '/../View/Doctor/doctorMessage.php';
                break;

            case 'setting':
                require __DIR__ . '/../View/Doctor/doctorSetting.php';
                break;
                
            default:
                $this->pageNotFound();
                break;
        }
    }

    private function pageNotFound() {
        http_response_code(404);
        echo "<h1>404 Page Not Found</h1>";
        exit();
    }

    private function sliceURL() {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        return explode('/', $uri);
    }
}
?>
