<script>
    $(document).ready(function(){
    $("#but_submit").click(function(){
        var username = $("#username").val().trim();
        var password = $("#password").val().trim();

        if( username != "" && password != "" ){
            $.ajax({
                url:'funciones/user.php',
                type:'post',
                data:{username:username,password:password},
                success:function(response){
                    var msg = "";
                    
                    if(response == 1){
                        
                        window.location = "index.php?msg=WELCOME";
                        
                        alert(msg);
                    }else{
                        msg = "Invalid username and password!";
                        
                        alert(msg);
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});
</script>

<div class="row" id="bodyl">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" id="login">
       
    <form onSubmit="return false">
        <div id="div_login">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <br>

                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit" id="but_submit">
                            </div>
                            
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </form> 
    </div>
    <div class="col-sm-4"></div>
</div>