<?php 
$config = require base_path('config.php');
$db = new Database($config['database']);
session_start();


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
if(empty($_SESSION['email'])){
    header("location: /admin/login");
     exit();
}else{
if(isset($_POST['btn-import'])){

    $list_etudaints = [];
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    
    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();
        $db->query('DELETE FROM etudiants',[]);
        $count = 0;
        foreach($data as $row)
        {
          if($row['0']==""){
            
          }
          elseif ($row['0']=="N°"){
            
          }else{
            // insértion dans la base de donnees
            
            $date_naissance = date('Y-m-d',strtotime($row['4']));
            $Date_de_generation_bilan = date('Y-m-d',strtotime($row['19']));
            
            $db->query('INSERT INTO etudiants (id,matricule,nom,prenom,date_naissance,Moy_S1,Cre_S1,Sess_S1,Moy_S2,Cre_S2,Sess_S2,MG,Credit_aquis,
            Credit_Obentenu,credits_annees_anterieurs,Total_credit_cycle,Sess_Annuel,Mention,Decision,Date_de_generation_bilan)
            VALUES
            (:id,:matricule,:nom,:prenom,:date_naissance,:Moy_S1,:Cre_S1,:Sess_S1,:Moy_S2,:Cre_S2,:Sess_S2,:MG,:Credit_aquis,:Credit_Obentenu
            ,:credits_annees_anterieurs,:Total_credit_cycle,:Sess_Annuel,:Mention,:Decision,:Date_de_generation_bilan)',[
               'id'=> $row['0'],
               'matricule' => (int)$row['1'],
               'nom' => $row['2'],
               'prenom' => $row['3'],
               'date_naissance'=> $date_naissance,
               'Moy_S1'=> (int)$row['5'],
               'Cre_S1'=> (int)$row['6'],
               'Sess_S1'=> $row['7'],
               'Moy_S2'=> (int)$row['8'],
               'Cre_S2'=> (int)$row['9'],
               'Sess_S2'=> $row['10'],
               'MG'=> (int)$row['11'],
               'Credit_aquis'=> (int)$row['12'],
               'Credit_Obentenu'=> (int)$row['13'],
               'credits_annees_anterieurs'=> (int)$row['14'],
               'Total_credit_cycle'=> (int)$row['15'],
               'Sess_Annuel'=> $row['16'],
               'Mention'=> $row['17'],
               'Decision'=> $row['18'],
               'Date_de_generation_bilan'=> $Date_de_generation_bilan
    
            ]);

            
        }
           
        }

       
    }
    else
    {
       echo("fichier no correct?");
    }
   
       
}elseif(isset($_POST['btn-search'])){

    $value = (string)$_POST['search-value'];
    $list_etudaints = $db->query("SELECT * FROM etudiants WHERE nom LIKE '%".$value."%' OR prenom LIKE '%".$value."%' OR matricule LIKE '%".$value."%' ;",[])->get();
  

}else{
  // afficher la liste des etudiants
  $total_etudaints = $db->query('SELECT Decision ,count(*) as nb_etd FROM `etudiants` GROUP BY Decision ORDER BY nb_etd DESC;')->get();
  $total_choix1 = $db->query('SELECT choix1 ,count(*) as nb_choix1 FROM `choix` GROUP BY choix1 ORDER BY nb_choix1 DESC;')->get();
  
  $list_etudaints = $db->query('SELECT * FROM etudiants')->get();
}


view('/admin/main.view.php',[
    'list_etudiants'=> $list_etudaints,
    'total_etudaints'=> $total_etudaints,
    'total_choix1'=>$total_choix1
]);
}