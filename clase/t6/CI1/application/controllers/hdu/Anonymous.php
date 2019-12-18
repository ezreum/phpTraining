<?php
class Anonymous extends CI_Controller{
 
    public function index() {
        
    }
    
    public function signUp() {
        $this->load->model('pais_modelo');
        $data['paises'] = $this->pais_modelo->getPaises();
        frame($this, 'hdu/anonymous/signUp', $data);
    }
    
    public function SignUpPost() {
        $this->load->model('persona_modelo');
        
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $paisN = isset($_POST['relacionNace'])?$_POST['relacionNace']:null;
        $paisR = isset($_POST['relacionReside'])?$_POST['relacionReside']:null;
        try {
            $this->persona_modelo->signUp($nombre,$paisN, $paisR);
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
        ;
    }
    
}
?>