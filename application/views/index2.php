<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">

</head>
<body class="img">
    <div class="section"></div>
    <main>
        <center>

            <!-- Header -->
            <h3 style="color: #0097a7">Welcome to EduApp</h3>

            <!-- Form -->
            <form action="" method="POST">
                <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">
                    <div class="section"></div>
                    
                    <!-- Username -->
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type="text" name='username' required />
                            <label for='username'>Username</label>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class='row'>
                        <div class='input-field col m12'>
                            <input class='validate' type='password' name='password' id='password' required />
                            <label for='password'>Password</label>
                        </div>
                    </div>
                    
                    <!-- Login button -->
                    <div class='row'>
                        <a href="Teacher_addStudent.html"><button class="btn waves-effect waves-light" type="submit" name="action">Login
                            <i class="material-icons right">send</i>
                        </button> </a>
                        <br> 

                        <!-- create an account -->
                        <label>
                            <b style="color: #0097a7;">Don't have an Acount? <a href="signup2">Sign Up</a></b>
                        </label>        
                    </div><!-- end of login div -->
                </div><!-- end of the entire div -->
            </form>
        </center>
    </main>

    <!-- Javascript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
</body>
</html>