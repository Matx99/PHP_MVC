<?php
class UserController {

    private $userManager;
    private $user;

    public function __construct($db1) {
        require_once('./Model/User.php');
        require_once('./Model/UserManager.php');
        $this->userManager = new UserManager($db1);
        $this->db = $db1;
    }

    public function default(){
        $page = 'home';
        require('./View/default.php');
    } 

    public function createAccount() {
        $page = 'createAccount';
        require('./View/default.php'); 
    }

    public function login() {
        $page = 'login';
        require('./View/default.php');
    }

    public function logout() {
        //session_destroy();
        unset($_SESSION['user']);
        $page = 'home';
        require('./View/default.php');
    }
 
    public function doLogin() {
        $result = $this->userManager->login(
                                        $_POST['email'],
                                        $_POST['password']
        );
        if ( $result ) :
            $info = "Connexion reussie";
            $_SESSION['user'] = $result;
            $this->user = new User($_SESSION['user']);
            $page = 'home';
        else :
            $info = "Identifiants incorrects.";
            $page = 'login';
        endif;
        require('./View/default.php');
    }

    public function usersList() {
        $page = 'usersList';
        $usersList = $this->userManager->findAll();
        require('./View/default.php');
    }

    public function doCreate(){
        if (
        isset($_POST['email']) &&
        isset($_POST['password']) &&
        isset($_POST['lastName']) &&
        isset($_POST['firstName']) &&
        isset($_POST['address']) &&
        isset($_POST['postalCode']) &&
        isset($_POST['city'])
        ) {
            $alreadyExist = $this->userManager->findByEmail($_POST['email']);
            if (!$alreadyExist) {
                $newUser = new User($_POST);
                $this->userManager->create($newUser);
                $page = 'login';
            } else {
                $error = "ERROR : This email (" . $_POST['email'] . ") is used by another user";
                $page = 'createAccount';
            }
        }
        require('./View/default.php');
    }
}