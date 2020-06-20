var body = new Vue({
	// Add the id here.
	el: '#app',
	data: {
		// Holding my data
		heading: 'Vue js is working',
		comments: [],
		totalNumberofComments: 0,
	},

	created() {

		//function to output list of comments and number of comments for each game
		this.getList(),
		this.totalList()
	},

	methods: {

		//Function to output the list of comments for a specific game
		getList: function () {

			let thisID = $("#GameID").text();

			$.get(`http://localhost/games-review/index.php/home/comments/${thisID}`, function (data) {

				for (let i = data.length - 1; i >= 0; i--) {

					body.comments.push(data[i]);

				}

			});
        },
        
        //Function to output the total number of comments for each game
		totalList: function () {

			let thisID = $("#GameID").text();

			$.get(`http://localhost/games-review/index.php/home/commentTotal/${thisID}`, function (data) {

				body.totalNumberofComments = data[0].totalComments;

			});

        },
        
        //Function to hide the list of comments for a specific game
		hideList: function () {

			this.comments = []

        },
        
        //Function to insert/add a comment for a specific game
		setList: function () {

			//Collect game id
            let thisID = $("#GameID").text();
            
            //Collects user input
			var postData = {
				'UserComment': $('#commentArea').val()
            };
            
            //Only add a comment if the user has inputted text in the comment area, preventing comments of empty strings
            //I tried using required in the html, but it wasnt working
			if ($('#commentArea').val() != "") {

				$.post(`http://localhost/games-review/index.php/home/addcomments/${thisID}`, postData)

                body.comments.push(postData);
                
                //Once user has submitted a comment delete the text on the input feild
                $('#commentArea').get(0).value = "";

				//List new comments and number of comments
				this.hideList();
				setTimeout(this.getList, 100);
				setTimeout(this.totalList, 100);
			
			}

		},

	}

});
