<?php 
$config = require base_path('config.php');
$db = new Database($config['database']);

session_start();

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$error = [];
$branches = [
    [
        'name'=> 'Philosophie',
        'code'=> 0
    ],
    [
        'name'=> 'Histoire',
        'code'=> 1
    ],
    [
        'name'=> 'Bibliothèque',
        'code'=> 2
    ],
    [
        'name'=> 'Journalisme',
        'code'=> 3
    ]
    ];

if (isset($_POST['submit'])) {
    $select1 = $_POST['select1'];
    $select2 = $_POST['select2'];
    $select3 = $_POST['select3'];
    $options = array(
        "Histoire",
        "Bibliothèque",
        "Journalisme",
        "Philosophie"
    );
    $options2= array(
        $select1,$select2,$select3
    );
    $select4 = array_diff($options,$options2);
    foreach($select4 as $v){
        $select4 = $v;
    }
   
    if ($select1 === 'Choix de spécialité' or $select2 === 'Choix de spécialité' or $select3 === 'Choix de spécialité') {
        $error['selection'] = 'selectionner tout les choix proposé';
    }
  


    $choix = $db->query("select * from choix where matricule = :matricule",[
        "matricule"=>$_SESSION["mat_etudaint"]
    ])->get();

    if(empty($error["selection"])){

    
    if (empty($choix)) {
        
        $db->query("INSERT into choix(nom,prenom,matricule,choix1,choix2,choix3,choix4,sauvgard,decision) VALUES(:nom,:prenom,:matricule,:choix1,:choix2,:choix3,:choix4,:sauvgard,:decision)",[
            "nom"=>$_SESSION["nom_etudaint"],
            "prenom"=>$_SESSION["prenom_etudaint"],
            "matricule"=>$_SESSION["mat_etudaint"],
            "choix1"=>$select1,
            "choix2"=>$select2,
            "choix3"=>$select3,
            "choix4"=>$select4,
            "sauvgard"=> 1,
            "decision"=> $_SESSION["Decision"]
        ]);
     
        
    }
    if(!empty($choix) ){
        if($choix[0]['sauvgard'] < 3){
       
        $db->query("UPDATE  choix  set choix1=:choix1, choix2=:choix2 ,choix3=:choix3 ,choix4=:choix4 ,sauvgard=:sauvgard	where matricule =:matricule",[
            "matricule"=>$_SESSION["mat_etudaint"],
            "choix1"=>$select1,
            "choix2"=>$select2,
            "choix3"=>$select3,
            "choix4"=>$select4,
            "sauvgard"=>$choix[0]['sauvgard']+1
        ]);
        }
        
    }


    $choix = $db->query("select * from choix where matricule = :matricule",[
        "matricule"=>$_SESSION["mat_etudaint"]
    ])->get();


    if($choix[0]["choix1"]!=""){
        $submit_value="Changer";
    }else{
        $submit_value="Enregistrée";
    }

    view('/etudiant/main.view.php',[
        "branchs" => $branches,
        "error"=>$error,
        "choix"=>$choix[0],
        "submit_value"=>"Changer"
    ]);

    }else{
        if($choix[0]["choix1"]!=""){
            $submit_value="Changer";
        }else{
            $submit_value="Enregistrée";
        }
        view('/etudiant/main.view.php',[
            "branchs" => $branches,
            "error"=>$error,
            "choix"=>$choix[0],
            "submit_value"=>$submit_value
        ]);
    }
}else{
    if(empty($_SESSION['mat_etudaint'])){
        header("location: /login");
         exit();
    }else{

    $choix = $db->query("select * from choix where matricule = :matricule",[
        "matricule"=>$_SESSION["mat_etudaint"]
    ])->get();
    
    if($choix[0]["choix1"]!=""){
        $submit_value="Changer";
    }else{
        $submit_value="Enregistrée";
    }

    view('/etudiant/main.view.php',[
    "branchs" => $branches,
    "error"=>$error,
    "choix"=>$choix[0],
    "submit_value"=>$submit_value
    ]);
}
}