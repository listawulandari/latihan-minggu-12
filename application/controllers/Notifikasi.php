<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Notifikasi extends CI_Controller {
public function __construct(){
        parent::__construct();
} 

public function insert_data() {
    $kata = $this->input->post('kata');
    if($kata == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger"> <h4>Oppss</h4> <p>Tidak ada kata dinput.</p> </div>');    
        $this->load->view('v_notification');      
    } else {    
        $this->session->set_flashdata('msg', '<div class="alert alert-success"><h4>Berhasil </h4> <p>Anda berhasil input kata '.$kata.'.</p> </div>');    
        $this->load->view('v_notification');
        }    
    }

