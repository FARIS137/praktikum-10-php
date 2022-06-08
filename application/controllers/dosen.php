<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends CI_Controller {
    public function index(){
        $this->load->model("dosen_model","dsn1");

        $this->dsn1->id=1;
        $this->dsn1->nidn="0412324242";
        $this->dsn1->nama="Intan cahyani, S.SI, M.kom";
        $this->dsn1->gender="p";
        $this->dsn1->pendidikan = "Magister komputer";

        $this->load->model("dosen_model","dsn2");

        $this->dsn2->id=2;
        $this->dsn2->nidn="0110221247";
        $this->dsn2->nama="Asy Cherryana, S.SI, M.si";
        $this->dsn2->gender="p";
        $this->dsn2->pendidikan = "Magister sains";

        $list_dsn = [$this->dsn1, $this->dsn2];

        $data["list_dsn"] = $list_dsn;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index',$data);
        $this->load->view('layout/footer');
    }
        public function create(){
            $data['judul']='From kelola Dosen';
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('dosen/create',$data);
            $this->load->view('layout/footer');
        }
        
    
        public function save(){
            $this->load->model("dosen_model","dsn1");
            $this->dsn1->nama = $this->input->post('nama');
            $this->dsn1->nidn= $this->input->post('nidn');
            $this->dsn1->gender = $this->input->post('gender');
            $this->dsn1->tempatlahir = $this->input->post('tempatlahir');
            $this->dsn1->tanggallahir = $this->input->post('tanggallahir');
            $this->dsn1->pendidikan = $this->input->post('pendidikan');
        
    
            // die(print_r($this->mhs1));
    
            $data['dsn1'] = $this->dsn1;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('dosen/view',$data);
            $this->load->view('layout/footer');


    }
}
?>