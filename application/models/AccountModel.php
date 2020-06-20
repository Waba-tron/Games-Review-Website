<?php
class AccountModel extends CI_Model{

    //Function that will query the users type and display it on the users account page
    public function getUserType($userID){

        $query = $this->db->query("SELECT TypeUser FROM users WHERE UID = '$userID'");
        return $query->result();

    }

    //Function that will update the users type and stores that information in to database
    public function updateType($userInput, $userID){
   
        $query = $this->db->query("UPDATE users SET TypeUser = '$userInput' WHERE UID = '$userID'");
        return $query->result();
    }

}