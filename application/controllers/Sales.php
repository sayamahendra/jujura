<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
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
        $data['sales'] = json_decode($this->curl->simple_post($this->API.'/sales',array('signature_key'=>'xaxaxa'), array(CURLOPT_BUFFERSIZE=>10)), true);
        var_dump($data['sales']);die;
        $this->load->view('sales/list', $data);
    }

    function create(){
        if(isset($_POST['submit'])){
            $items = array(
            "item_id"=> "ABC",
            "qty"=>2,
            "price"=> 1500,
            "total"=> 3000);
            $data = array(
                "signature_key"=>"xaxaxa",
                "payment_type"=>"echannel",
                "gross_amount"=> 9600,
                "currency"=> "IDR",
                "items" => $items   
            );
            $insert = $this->curl->simple_post($this->API.'/sales', $data, array(CURLOPT_BUFFERSIZE =>10));
            if($insert){
                $this->session->set_flashdata('hasil','Insert Success');
                $data['sales'] = $insert;
                $this->load->view('sales/list', $data);
            }else{
                $this->session->set_flashdata('hasil','Insert Failed!');
                $this->load->view('sales/list', $data, true);
            }
        }else{
            $this->load->view('sales/create');
        }
    }

}


?>