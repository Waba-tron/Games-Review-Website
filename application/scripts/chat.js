$(document).ready(function(){

    //Connect to socket
    var socket = io.connect("http://localhost:8000");

    $("#myForm").submit(function(e){

        e.preventDefault();

        //Get input once user submitted message
        socket.emit("client message", $("#message").get(0).value);

        //Once user submitted empty out the message feild
        $("#message").get(0).value = "";

    });
    
    //If chat server is online display chat UI
    socket.on('connect', function(){
        
        $('#chatButton').click(openForm());
 
    });

    //If chat server is offline display chat button and dont display UI
    socket.on('disconnect', function(){

        $('#chatButton').click(closeForm());
     
  
    });

    //Display message in to Chat UI
    socket.on("server message", function(data){
        
        $("#chatspace").append("<p>"+data +"</p>");
      
    });

});