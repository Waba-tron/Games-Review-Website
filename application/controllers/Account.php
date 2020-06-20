<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller{

    public function __construct(){

        parent::__construct();
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');

        // Load in your Models below.
        $this->load->model('AccountModel');
  
        
    }

    public function index(){

        //Get user data from current session 
        $userExists = $this->session->userdata('id');
        $user = $this->session->userdata('username');
        $userType = $this->AccountModel->getUserType($userExists);

        if (!$userExists){

            //The user doesn't exist so change your page accordigly.
            $data['show'] = true;
            $data['name'] = 'Do do not have access to this page, please login';
        }
        else
        {
            //The user does exist so change your page accordigly.
            $data['show'] = false;
            $data['name'] = "Hi ".$user;

            //Display type of user ie Admin or Basic user
            $data['Type'] = $userType;


        }

        //load data in to view
        $data['head'] = 'account';
        $this->load->view('component', $data);

    }

    //Update user type function
    public function updateUser(){

        //Get user data from current session
        $userID = $this->session->userdata('id');

        //Get submitted type of user
        $userInput = $this->input->post('Type');

        //Use values of id and type to make a post request and update the user through the database
        $this->AccountModel->updateType($userInput, $userID);

        redirect('account');

      
    }


}