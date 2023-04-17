<?php
class Home extends CI_Controller{
    function index(){
        $this->load->view('navbar');
        $this->load->view('footer');
    }
}
?>