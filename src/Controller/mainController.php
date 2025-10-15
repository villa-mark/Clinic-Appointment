<?php

class MainController {
    public function __construct() {
        $urlArr = $this->sliceURL();
        $route = isset($urlArr[1]) ? strtolower($urlArr[1]) : ''; // use [1] since [0] is usually "src" if inside subfolder

        switch ($route) {
            case '':
                require __DIR__ . '/../View/landingPage.php';
                break;

            case 'login':
                require __DIR__ . '/../View/login.php';
                break;

            case 'register':
                require __DIR__ . '/../View/register.php';
                break;
            
            case 'choose':
                require __DIR__ . '/../View/chooseRegister.php';
                break;

            case 'patient':
                require __DIR__ . '/../View/patientDashboard.php';
                break;

            case 'admin':
                require __DIR__ . '/../View/adminDashboard.php';
                break;

            case 'doctor':
                require __DIR__ . '/../View/doctorDashboard.php';
                break;

            default:
                http_response_code(404);
                echo "<h1>404 Page Not Found</h1>";
                break;
        }
    }

    private function sliceURL() {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        return explode('/', $uri);
    }
}
?>
