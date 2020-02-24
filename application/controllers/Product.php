<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
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
        $data['product'] = json_decode($this->curl->simple_get($this->API.'/product'), true);
        // var_dump($data['product']);die;
        $this->load->view('product/list', $data);
    }

}


?>