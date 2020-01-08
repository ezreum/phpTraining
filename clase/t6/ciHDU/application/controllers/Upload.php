<?php
class Upload extends CI_Controller{
    public function index(){
        $this->load->view('subir/get');
    }
    public function post() {
        if (isset($_POST['toUp'])) {
            
            $this->load->model('persona_model');
            $this->user_model->subir();
            
        print_r($_FILES);
        //else echo "No insertó nada";
    }
}

}