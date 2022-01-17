<?php

class User_model extends CI_Model{

    //these methods  communicate directly to our data base

    public function get_users(){

        //first we need to communicate with our database. we either auto load it or load it manually

        //*****MANUAL CONFIG**********/
        // $config['hostname'] = 'localhost';
        // $config['username'] = 'root';
        // $config['password'] = '';
        // $config['database'] = 'users_db';

        // $connection = $this->load->database($config)---------generating connection;

        //We setup an Auto Config from the 

       $query = $this->db->get('users');

        return $query-> result();






    }




}







?>