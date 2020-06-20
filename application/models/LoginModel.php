<?php
class LoginModel extends CI_Model{

    public function loginUser($userName, $userPassword){

        //Collects all user data
        $this->db->where('UserName', $userName);
 
        $query = $this->db->get('users');

        //loops through user data
        if($query->num_rows() > 0){

            foreach($query->result() as $row){

                //Checks to see if inputs inputs a valid password
                $is_password = $row->UserPassword;

                if($userPassword == $is_password){

                    //Creates session and sets the user data
                    $this->session->set_userdata('id', $row->UID);
                    $this->session->set_userdata('username', $row->UserName);
               
                }
                

            }

        }
   
    }
}