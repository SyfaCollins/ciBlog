<?php

class Users extends CI_Controller{


    public function show(){
        
        //manual load of modes
        // $this->load-model('User_model');

        //here we call functions from the model to the controller

  

       $data['results'] = $this->User_model->get_users();

       //transfer  information into the user view


        $this->load->view('user_view',$data);

       }



    }






?>