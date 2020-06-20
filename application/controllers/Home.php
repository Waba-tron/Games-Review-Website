<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){

        parent::__construct();
        
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');

        // Load in your Models below.
        $this->load->model('HomeModel');

    
    }

    public function index(){

        $userExists = $this->session->userdata('id');
        $user = $this->session->userdata('username');

        // Change this to whatever title you wish.
        $data['title'] = 'Games Reviews';

        // Condition checking if the user exists.
        if (!$userExists){

            //The user doesn't exist so change page accordigly.
            $data['show'] = true;
            $data['name'] = 'Please login to view your account';
        
        }
        else{

            //The user does exist so change your page accordigly.
            $data['show'] = false;
            $data['name'] = "Hi ".$user;

        }

        
        // Get the data from our Home Model.
        $data['result'] = $this->HomeModel->getGame();
        
        //Load the view and send the data accross.
        $data['head'] = 'home';
        $this->load->view('component', $data);
    }

    public function review($slug){

        //collect for current session userID
        $userExists = $this->session->userdata('id');

        // Change this to whatever title you wish.
        $data['title'] = 'Games Reviews';

        // Condition checking if the user exists.
        if (!$userExists){

            //The user doesn't exist so change page accordigly.
            $data['show'] = true;
       
        }
        else{

            //The user does exist so change page accordigly.
            $data['show'] = false;

        }
        
        // Get the data from our Home Model.
        $data['result'] = $this->HomeModel->getReview($slug);

        //Load data on to our view page
        $data['head'] = 'review';
        $this->load->view('component', $data);

  
    }


    //Search for specific game function
    public function searchgame(){
        
        //collect for current session userID
        $userExists = $this->session->userdata('id');

        //Collect user input from the search bar
        $userInput = $this->input->post('searchgamereview');

        $data['title'] = 'Search list';

        // Condition checking if the user exists.
        if (!$userExists){

            //The user doesn't exist so change page accordigly.
            $data['show'] = true;
        
        }
        else{
            //The user does exist so change page accordigly.
            $data['show'] = false;

        }
        
        //collect data for when user searchs for a game
        $data['gameList'] = $this->HomeModel->searchGameReview($userInput);  
      
        $data['head'] = 'results';  
        $this->load->view('component', $data);

    }

    //User logout function
    public function logout(){

        //When user clicks log out delete the current session
        $data = $this->session->all_userdata();

        foreach($data as $row => $row_value){

            $this->session->unset_userdata($row);
        }

        //Once session is deleted redirect to the login page
        redirect('login');
    }

    //Display comment for each individual game function
    public function comments($ReviewID){

        //Use HomeModel to display each individual comments
        $commentData = $this->HomeModel->showComment($ReviewID);

        header('Content-Type: application/json');

        //Echo out data in json format
        echo json_encode($commentData);
        
    }

    //Add comment for each individual game function
    public function addcomments($ReviewID){

        //collect for current session userID
        $userID = $this->session->userdata('id');

        //Get the user input/comment they wrote
        $userComment = $this->input->post()['UserComment'];

        //Use homemodel to make a post request and put comment in to the database
        $this->HomeModel->insertComment($userID, $ReviewID, $userComment);

    }

    //Get number of comments for each game function
    public function commentTotal($ReviewID){

        //Get data from homemodel
        $total = $this->HomeModel->getCommentTotal($ReviewID);

        header('Content-Type: application/json');

        //Echo out data in to json format
        echo json_encode($total);
    }


}