<?php

class Users extends CI_Controller{


    public function show($user_id){
        
        //manual load of modes
        // $this->load-model('User_model');

        //here we call functions from the model to the controller

  

       $data['results'] = $this->User_model->get_users($user_id);

       //transfer  information into the user view


        $this->load->view('user_view', $data);

       }


       public function insert(){

        $username = 'peter';
        $password = 'try123';

        $this->User_model->create_user([ 'username' => $username,'password' => $password]);


       }

       //this method pushes variables to the update_user() method in the models/User_model


       public function update(){
        $id = 7;
        $username = 'Will';
        $password = 'p556';

        $this->User_model->update_user([ 'username' => $username,'password' => $password], $id);
        

       }


       public function delete($id){

           $this->User_model->delete_user($id);
       }


    }










?>