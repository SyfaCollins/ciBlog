<?php

class User_model extends CI_Model{

    //these methods  communicate directly to our database

    public function get_users(){


        $query = $this->db->get('users');

        return $query-> result();

        //another way of getting the data is

        $this->db->where([
            'id' => $userid,
            'username' => $username
        ]);


        //first we need to communicate with our database. we either auto load it or load it manually 

        //*****MANUAL CONFIG**********/
        // $config['hostname'] = 'localhost';
        // $config['username'] = 'root';
        // $config['password'] = '';
        // $config['database'] = 'users_db';

        // $connection = $this->load->database($config)---------generating connection;

        //We setup an Auto Config from the 

        // $query = $this->db->query("SELECT * FROM users");

        // return $query-> num_fields(); // this will give out the column count
        // return $query-> num_row(); // this will give out the row count






    }

    //CREATE


    //after getting variables from the controller, this method creates a user in the database

    public function create_user($data){


        $this->db->insert('users',$data);


    }
    
    //UPDATE

    //after getting variables from the controller, this method updates the database

    public function update_user($data, $id){

        $this->db->where(['user_id' => $id]);
        $this->db->insert('users',$data);


    }

    //DELETE

    public function delete_user($id){

        $this->db->where(['id' => $id]);
        $this->db->delete('users');

    }


}







?>