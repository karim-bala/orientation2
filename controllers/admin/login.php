<?php 
$config = require base_path('config.php');
$db = new Database($config['database']);
session_start();
$error = "";
if(isset($_POST['logout'])){
    session_destroy();
}
if(isset($_POST['btn-submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin = $db->query('SELECT * FROM admin WHERE email = :email',[
        'email'=> $email
    ])->get();
    
    //vérification de compte 
    if (empty($admin)):
        $error = "le compte n'est exist pas!";
    elseif ($admin[0]['password'] != $password):
        $error = "le mot de pass est incorrect!";
    else:
        
      
         $_SESSION['email'] = $admin[0]['email'];
       
           //rederiction vers la page d'accuele
            header("location: /admin/main");
            exit();
    endif;

    
}
view("/admin/login.view.php",[
    "error" => $error
]);