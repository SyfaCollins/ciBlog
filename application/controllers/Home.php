<?php

class Home extends CI_Controller{

    public function index(){

        $this->load->view('home_view');


    }

    public function showBody(){

        $this->load->view('body_view');

    }





}








?>