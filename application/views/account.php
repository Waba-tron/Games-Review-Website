<?php 

//Toggle page, if the user is not logged in display, MUST BE LOGGED IN MESSAGE
if($show){

    echo <<<_END

    <div class="h-25 row align-items-center">
        <div class="col">
            <center>
                <h1>$name</h1>
            
            </center>
        </div>
    </div>
_END;


}

else{

    //Toggle page, if the user is logged in
    $URL = base_url("index.php/account/updateUser");

    foreach ($Type as $row){
        
        $currentUserType = $row->TypeUser;

    }

    //Enable functionality for the user to be able to change their type of Admin or Basic
    echo <<<_END

    <div class="h-50 row align-items-center">
        <div class="col">
            <center>

                <h1>$name</h1>
                <h1>You are a $currentUserType user</h1>
            
                <form action=$URL method="post">

                    <input type="radio" name="Type" value="Admin" required>
                    <label for="male">Admin</label><br>
                    <input type="radio" name="Type" value="Basic" required>
                    <label for="female">Basic</label><br>
                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
                
            </center>
        </div>
    </div>

_END;

}

?>