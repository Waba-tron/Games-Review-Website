<title><?php echo $title?></title>
<div class="container">

	<center>

		<h2><?php echo $title?></h2>

		<h2 id="userName"><?php echo $name?></h2>

	</center>

	<div class="row">


		<?php
        
          foreach ($result as $row){

              // Load game data from DB. Get the data and manipulate the DOM
              $thisImage = $row->ReviewImage;
              $thisTitle = $row->GameName;
              $thisInfo = $row->GameBlurb;
              $thisSlug = $row->slug;
              echo '<div class="col-sm">';
              echo '<center>';
              $image = base_url(). "application/images/". $thisImage;
              echo '<h2> '. $thisTitle.'</h2>';
              echo '<img src="'.$image.'"height="400px" width="300px">';
              echo '<div width="200">';
              echo '<p style="width: 200"> '.$thisInfo.'</p>';
              echo '</div>';
              echo '<a href="'.base_url()."index.php/review/".$thisSlug.'"><button type="button" class="btn btn-success">Find out more</button></a>';
              echo '</center>';
              echo '</div>';
            
          
          }
        ?>


	</div>
</div>


</div>

<!--
Display chat bot user interface
-->
<button id="chatButton" class="open-button btn btn-success">Chat is disabled</button>

<div class="chat-popup" id="myForm">

	<form class="form-container">

		<h1>Chat</h1>

		<label for="msg"><b>Message</b></label>

		</textarea>
		<div id="chatspace"></div>

		<input class="form-control mr-sm-2" type="text" id="message" placeholder="Please enter a message"autocomplete="off" required>
		<button id="sendbutton" class="btn">Send</button>
	
	</form>

</div>

<!-- Load in your custom scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
<script src="<?php echo base_url('application/scripts/chat.js')?>"></script>
<script>
	
	//Toggle chat bot interface, giving the user the ability to display and collapse the UI
	function openForm() {
		document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
		document.getElementById("myForm").style.display = "none";
	}

</script>

</body>


</html>
