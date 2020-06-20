<?php
//If there is no result of after the users submitted from the search bar, display no Data
if($gameList == null){

    echo <<<_END

    <div class="h-50 row align-items-center">
        <div class="col">
            <center>
                <h1>No Data</h1>
            </center>
        </div>
    </div>
_END;
}
//If there is a result after submitting from the search bar, display the game data
else{
    
    foreach ($gameList as $row){

        echo '<center>';
    
        // Load game data from DB. Get the data and manipulate the DOM
        $thisImage = $row->ReviewImage;
        $thisTitle = $row->GameName;
        $thisInfo = $row->GameBlurb;
        $thisSlug = $row->slug;
        $image = base_url()."application/images/". $thisImage;
        echo '<h2> '. $thisTitle.'</h2>';
        echo '<img src="'.$image.'"height="550" width="400">';
        echo '<p> '. $thisInfo.'</p>';

        echo '<a href="'.base_url()."index.php/review/".$thisSlug.'"><button type="button" class="btn btn-success">Find out more</button></a>';
    
        echo '<br>';
        echo '</center>';
     
   
    }
}


?>



</div>
