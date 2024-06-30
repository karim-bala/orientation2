<?php 
$config = require base_path('config.php');
$db = new Database($config['database']);
session_start();
$error = "";
if(isset($_POST['logout'])){
    session_destroy();
}
if(isset($_POST['btn-submit'])){
    $mat = $_POST['matricule'];
   
    $etudiant = $db->query('SELECT * FROM etudiants WHERE matricule = :mat',[
        'mat'=> $mat
    ])->get();
   
    //vérification de compte 
    if (empty($etudiant)):
        $error = "le matricule n'est exist pas!";
    elseif ($etudiant[0]['Decision']=== "Ajourné(e)"):
        $error = "vous etes un doublant!    -----------          !أنت معيد";
    else:
        
         //rederiction vers la page d'accuele
         $_SESSION['mat_etudaint'] = $etudiant[0]['matricule'];
         $_SESSION['nom_etudaint'] = $etudiant[0]['nom'];
         $_SESSION['prenom_etudaint'] = $etudiant[0]['prenom'];
         $_SESSION['MG'] = $etudiant[0]['MG'];
         $_SESSION['Decision'] = $etudiant[0]['Decision'];
         
         header("location: /etudiant");
         exit();
    endif;
   
    
}

view("/etudiant/login.view.php",[
    
    'error'=> $error
]);