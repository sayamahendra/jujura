<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    var $API = "";
    function __construct()
    {
        parent::__construct();
        $this->API="http://recruitment.api.makekimia.network/api";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    function index(){
        if(isset($_POST['submit'])){
            $data = array(
                'user_name' => $this->input->post('user_name'),
                'user_email' => $this->input->post('user_email')    
            );
            $insert = $this->curl->simple_post($this->API.'/register', $data, array(CURLOPT_BUFFERSIZE=>10));
            if($insert){
                
                $this->session->set_flashdata('hasil','Insert Success');
                $data['register'] = json_decode($insert, true);
                $this->load->view('register/list', $data, true);
                
            }else{
                $this->session->set_flashdata('hasil','Insert Failed!');
                $this->load->view('register/list', $data, true);
            }
        }else{
            $this->load->view('register/create');
        }
    }

}


?>