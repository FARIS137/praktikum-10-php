<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

    public function index(){
        $this->load->model("mahasiswa_model","mhs");
        

        $list_mhs = $this->mhs->getall();

        
        $data['list_mahasiswa'] = $list_mhs;

       
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layout/footer');
    }
    
}
?>