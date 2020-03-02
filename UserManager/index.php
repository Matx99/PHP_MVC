<?php
// include des modèles
include ('Model/User.php');
include ('Model/UserManager.php');
include ('Model/Connection.php');
// include du formulaire
include ('View/form.php');

$db = new Connection(); 
$db=$db->getDb();// connexion bdd
$userManager = new UserManager($db);//instanciation de Usermanager

if(
isset($_POST) 
&& !empty($_POST['email']) 
&& !empty($_POST['password'])
&& !empty($_POST['lastName']) 
&& !empty($_POST['firstName']) 
&& !empty($_POST['address'])
&& !empty($_POST['postalCode']) 
&& !empty($_POST['city'])
){
    //instanciation de User
    $user = new User($_POST);
    //creation user avec champs formulaire 
    $userManager->create($user);
}





?>
