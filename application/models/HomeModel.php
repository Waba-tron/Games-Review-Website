<?php
class HomeModel extends CI_Model{

    //Load Database
    public function __construct(){

        $this->load->database();
    }

    //Function to get information for each game function
    public function getGame(){
        
         $query = $this->db->query("SELECT * FROM activereviews");
         return $query->result();
    }

    //Function to get all information where the game is equal to a slug ie information about a specific game
    public function getReview($slug){

        $query = $this->db->query("SELECT * FROM activereviews Where slug = '$slug'");
        return $query->result();
        
    }

    //Function to retrieve game data the user searched for
    public function searchGameReview($gameName){

        $query = $this->db->query("SELECT GameName, slug, ReviewImage FROM `activereviews` Where GameName like '%$gameName%'");

        //input/query is invalid display no data
        if($query == null){

            return 'No Data';
        }
        else{

            //display result
            return $query->result();
        }
    }

    //Function to query all the comments for a specific game
    public function showComment($ReviewID){
        
        $query = $this->db->query("SELECT * FROM `gamescomments` INNER JOIN users where UserID = users.UID AND ReviewID = '$ReviewID'");
        return $query->result();

    }
    
    //Function to insert a comment in to the database, for a individual user and comment
    public function insertComment($userID, $ReviewID, $userComment){

        $query = $this->db->query("INSERT INTO `gamescomments`( `UserID`, `ReviewID`, `UserComment`) VALUES ('$userID', '$ReviewID', '$userComment')");
        return $query->result();

    }

    //Function to query the number of comments for each individual game
    public function getCommentTotal($ReviewID){

        $query = $this->db->query("SELECT COUNT(UserComment) AS `totalComments` FROM `gamescomments` WHERE ReviewID = '$ReviewID'");
        return $query->result();
    }
    
}