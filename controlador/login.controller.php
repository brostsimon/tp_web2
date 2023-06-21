<?php
include_once('vista/vistaUsuario.php');
include_once('modelo/modeloUsuario.php');


class LoginController {

    private $view;
    private $model;

    public function __construct() {
        
        $this->view = new LoginView();
        $this->model = new UserModel();
        
    }

    public function showLogin() {
        
        $this->view->showLogin();
    }

    public function verifyUser() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->getByUsername($username);

        // encontró un user con el username que mandó, y tiene la misma contraseña
        if (!empty($user) && password_verify($password, $user->contraseña)) {
            
            // INICIO LA SESSION Y LOGUEO AL USUARIO
            session_start();
            $_SESSION['ID_USER'] = $user->id_usuario;
            $_SESSION['USERNAME'] = $user->contraseña;
            $_SESSION['LAST_ACTIVITY'] = time();

            header('Location:cartaABM');
        } else {
            $this->view->showLogin("Login incorrecto");
        }
       
    }
    public function logout() {
        session_start();
        session_destroy();
        header('Location: login');
    }

}
