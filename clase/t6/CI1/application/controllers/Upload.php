<?php
class Upload extends CI_Controller{
    public function index(){
        $this->load->view('subir/get');
    }
    public function post() {
        if (isset($_POST['toUp'])) {
            
            
            $direc=__DIR__;
            $trata= explode('/', $direc);
            $direc="";
            for ($i = 0; $i < sizeof($trata); $i++) {
                $direc.=$trata[$i].'/';
                $trata[$i]=='CI1'?$i=sizeof($trata):'';
        
            }
            $direc.='assets/';
            
            
            
            $uploadfile = $direc . basename($_FILES['toUpload']['name']);
            if (!is_dir($direc)){
            mkdir($direc);
            
                if (move_uploaded_file($_FILES["toUpload"]["tmp_name"], $uploadfile)) {
                $msg = "The file " . basename($_FILES["toUpload"]["name"]) . " has been uploaded."; 
                }
                else{
                    echo "No se subio el archivo";
                }
            
            }
            
            else { 
                echo "El directorio ya existe";
                if (move_uploaded_file($_FILES["toUpload"]["tmp_name"], $uploadfile)) {
                    $msg = "The file " . basename($_FILES["toUpload"]["name"]) . " has been uploaded.";
                }
                else{
                    echo "No se subio el archivo";
                }
            
            }
            
        }
        echo 'Here is some more debugging info:';
        print_r($_FILES);
        //else echo "No insertó nada";
    }
}