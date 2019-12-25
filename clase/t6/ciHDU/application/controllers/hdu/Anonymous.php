<?php
class Anonymous extends CI_Controller{
 
    public function index() {
        redirect(base_url().'home');
    }
    
    public function signUp() {
        $this->load->model('pais_model');
        $data['paises'] = $this->pais_model->getPaises();
        frame($this, 'hdu/anonymous/signUp', $data);
    }
    
    public function SignUpPost() {
        $this->load->model('persona_model');
        
        $nick =isset($_POST['nick'])?$_POST['nick']:null;
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $pwd = isset($_POST['pwd'])?$_POST['pwd']:null;
        $pwdCheck = isset($_POST['pwdCheck'])?$_POST['pwdCheck']:null;
        $paisN = isset($_POST['Nace'])?$_POST['Nace']:null;
        $paisR = isset($_POST['Reside'])?$_POST['Reside']:null;
        try {
            $this->persona_model->signUp($nombre,$nick ,$pwd,$pwdCheck,$paisN,$paisR);
            session_start();
            $_SESSION['_msg']['texto']='usuario creado exitosamente';
            $_SESSION['_msg']['uri']='hdu/anonymous';
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='hdu/anonymous';
            redirect(base_url().'msg');
        }
        redirect(base_url().'persona');
    }
    
    public function signIn() {
        frame($this, 'hdu/anonymous/signIn');
    }
    
    public function signInPost() {
        $nick= isset($_POST['nick'])?$_POST['nick']:null;
        $pwd =isset($_POST['pwd'])?$_POST['pwd']:null;
        
            $this->load->model('persona_model');
            try {
            $this->persona_model->signIn($nick ,$pwd);
            session_start();
            $_SESSION['_user']=$nick;
            } catch (Exception $e) {
                session_start();
                $_SESSION['_msg']['texto']=$e->getMessage();
                $_SESSION['_msg']['uri']='hdu/anonymous';
                redirect(base_url().'msg');
            }
            redirect(base_url().'persona');
    }
}
?>