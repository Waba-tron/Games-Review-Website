
<div class="container">
    <div class="h-55 row align-items-center">

        <div class="col">

        <!--
            Display form for the login page
        -->
            <form action=<?php echo base_url()."index.php/login/validateUser"?> method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">User name</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name ="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <button id="chatButton" class="open-button btn btn-success" onclick="openForm()">Chat</button>
            <div class="chat-popup pull-right" id="myForm">
            <form id="myform" class="form-container">
            </form>
        </div>

        </div>
    </div>
</div>

</body>


</html>