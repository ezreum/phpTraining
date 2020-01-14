<?php
class Anonymous extends CI_Controller{
 
    public function index() {
        redirect(base_url().'home');
    }
    
    public function signUp() {
        
        $country=R::load('country', 1);
        if ($country->id==0) {
            
            $direc=__DIR__;
            $trata= explode('\\', $direc);
            $direc="";
            for ($i = 0; $i < sizeof($trata); $i++) {
                $direc.=$trata[$i].'\\';
                $trata[$i]=='ciTienda'?$i=sizeof($trata):'';
                
            }
            // \\ por windows;
            $direc.='assets\\countries.txt';
            
            $this->load->model('country_model');
            $this->country_model->init($direc);
        }
        
        $this->load->model('country_model');
        $data['countries'] = $this->country_model->getAll();
        
        frame($this, 'role/anonymous/signUp', $data);
    }
    
    public function signUpPost() {
        $this->load->model('user_model');
        
        $nick =isset($_POST['nick'])?$_POST['nick']:null;
        $nombre = isset($_POST['name'])?$_POST['name']:null;
        $pwd = isset($_POST['pwd'])?$_POST['pwd']:null;
        $pwdCheck = isset($_POST['pwdCheck'])?$_POST['pwdCheck']:null;
        $country = isset($_POST['country'])?$_POST['country']:null;
        $file = isset($_FILES['pic']['name'])?$_FILES['pic']['name']:'';
        
        try {
            
            $rol=R::load('rol', 2);
            if ($rol->id==0) {
                $this->load->model('rol_model');
                $this->rol_model->init();
            }
            
            $direc=__DIR__;
            $trata= explode('/', $direc);
            $direc="";
            for ($i = 0; $i < sizeof($trata); $i++) {
                $direc.=$trata[$i].'/';
                $trata[$i]=='ciTienda'?$i=sizeof($trata):'';
                
            }
            //$direc.='assets/upload/';
            $direc.='assets\\upload\\';
            
            $extension = explode('.',$file);
            
            $id = $this->user_model->create($nombre,$nick);
            
            $this->user_model->createDetails($id,$pwd,$pwdCheck,$country,$extension[1]);
            
            $file = $id.'.'.$extension[1];
            
            if (!is_dir($direc)) {
                mkdir($direc);
            }
            copy($_FILES['pic']['tmp_name'], $direc.$fichero);
            echo "el fichero se ha guardado en $direc";        
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='role/anonymous/signUp';
            redirect(base_url().'msg');
        }
        redirect(base_url());
    }
    
    public function signIn() {
        frame($this, 'role/anonymous/signIn');
    }
    
    public function signInPost() {
        $nick= isset($_POST['nick'])?$_POST['nick']:null;
        $pwd =isset($_POST['pwd'])?$_POST['pwd']:null;
            $this->load->model('user_model');
             try {
            $check = $this->user_model->signIn($nick ,$pwd);
            if ($check){
            session_start();
            $user = $this->user_model->getPerson($nick);
            $_SESSION['_user']=$user;
            redirect(base_url().'role/authenticated');
            }
            else {frame($this, "role/errAuthen");
            }
            } catch (Exception $e) {
                session_start();
                $_SESSION['_msg']['texto']=$e->getMessage();
                $_SESSION['_msg']['uri']='role/anonymous';
                redirect(base_url().'msg');
            } 
            
    } 
}
?>