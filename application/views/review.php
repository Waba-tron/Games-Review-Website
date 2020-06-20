<title><?php echo $title?></title>

<div class="container-fluid">
	<div class="row content">
		<div class="col-sm-3 sidenav">
		
		<hr>

		<?php
    	// Load game data from DB. Get the data and manipulate the DOM
		foreach ($result as $row){

			$thisImage = $row->ReviewImage;
			$thisTitle = $row->GameName;
			$thisInfo = $row->GameBlurb;
			$thisSlug = $row->slug;
			$thisID = $row->ID;
			
			echo '<h1 id="GameID">' .$thisID. '</h1>';
			echo '<h2> '. $thisTitle.'</h2>';
			echo '<hr>';
			// These classes onlywork if you attach Bootstrap.
			echo '<div class="card cardBodyWidth '.$cssBodyClass.'">';
		
			$image = base_url(). "application/images/". $thisImage;
			echo '<img src="'.$image.'"height="600" width="100%">';
			echo '<p> '. $thisInfo.'</p>';
			echo '</div>';
		
		}

        ?>


		</div>

		<div class="col-sm-9">

			<hr>
			<h2>Our Review</h2>
			<hr>

			
			<?php
			//Display game review for current game
				foreach ($result as $row){

					$thisReview = $row->GameReview;

					echo '<p>'. $thisReview.'</p>';
				
				}
			?>

		  	<br>

			<h4>Leave a Comment:</h4>

			<!-- Starting point of vueJS app component -->
			<div id="app">

				<div class="form-group">
					
					<!-- User input feild for the comments -->
					<textarea class="form-control" name="usercomment" id="commentArea" rows="3" required></textarea>
				
				</div>

				<!-- My list of buttons that will POST GET and hide the list of comments for a specific game -->
				<button class="btn btn-success" v-on:click="setList();">Submit</button>
				<button class="btn btn-success" v-on:click="getList();">Show Comments</button>
				<button class="btn btn-success" v-on:click="hideList();">Hide Comments</button>
			
				<br>
				<br>

				<h1>{{heading}}</h1>
				<!-- Display number of comments for said -->
				<p><span class="badge">{{totalNumberofComments}}</span> Comments:</p>

				<!-- Display user name and users comment for said game -->
				<div v-for="currentcomment in comments">

					<div class="col-sm-10">
						
						<h4>{{currentcomment.UserName}}</h4>
						<p>{{currentcomment.UserComment}}</p>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('application/scripts/CustomVue.js')?>"></script>
</body>

</html>
