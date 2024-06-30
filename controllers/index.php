<?php

session_start();
$config = require base_path('config.php');
$db = new Database($config['database']);



use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$etudiants = $db->query("SELECT * from etudiants")->get();
dd($etudiants);

if(isset($_POST['save_excel_data']))
{
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = 0;
        foreach($data as $row)
        {
            if($count > 0)
            {
                
                $fullname = $row['0'];
                $email = $row['1'];
                $phone = (int)$row['2'];
                $course = $row['3'];
              
                            
                $db->query("INSERT INTO students (fullname,email,phone,course) VALUES (:fullname,:email,:phone,:course)",[
                    'fullname' => $fullname,
                    'email'=> $email,
                    'phone'=> $phone,
                    'course'=> $course
                ]);
                
            }
            else
            {   
                
                $count = 1;
            }
           
        }

        
    }
   
}


view("main/index.view.php", []);




