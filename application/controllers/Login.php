<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct(){

        parent::__construct();

        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');

        // Load in your Models below.
        $this->load->model('LoginModel');

    }

    public function index(){

        // Display title of the page
        $data['title'] = 'Login page';

        // Condition checking if the user exists.
        if (!$userExists)
        {
            //The user doesn't exist so change your page accordigly.
            $data['show'] = true;

        }
        else
        {
            //The user does exist so change your page accordigly.
            $data['show'] = false;
    
        }
        
        //load data in to view
        $data['head'] = 'login';
        $this->load->view('component', $data);
    
    }


    
    public function validateUser(){

        //Get user inputs for username and password
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //Place inputs in valide user function
        $result = $this->LoginModel->loginUser($username, $password);

        //Check to see if it is a valide user or not
        if($result == ''){

            redirect(base_url());
        }
        else{

            echo "Wrong details";
        }

    }
    
}
