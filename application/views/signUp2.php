<!DOCTYPE html>
<html>
<head>
    <title>SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

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
                    
                    <!-- first name and last name -->
                    <div class='row'>
                        <div class='input-field col s6'>
                            <input class='validate' type="text" name='firstname' required />
                            <label for='firstname'>First Name</label>
                        </div>
                        <div class='input-field col s6'>
                            <input class='validate' type="text" name='lastname' required />
                            <label for='lastname'>Last Name</label>
                        </div>
                    </div>

                    <!-- phone number and password -->
                    <div class='row'>
                        <div class='input-field col s6'>
                            <input class='validate' type="text" name='phonenumber' required />
                            <label for='phonenumber'>Phone Number</label>
                        </div>
                        <div class='input-field col s6'>
                            <input class='validate' type='password' name='password' id='password' required />
                            <label for='password'>Password</label>
                        </div>
                    </div>

                    <!-- email and type of user -->
                    <div class='row'>
                        <div class='input-field col s6'>
                            <input class='validate' type="text" name='email' required />
                            <label for='email'>Email</label>
                        </div>
                        <div class="input-field col s6">
                            <select>
                              <option value="" disabled selected>Select User Type</option>
                              <option value="1">Administrator</option>
                              <option value="2">Student</option>
                              <option value="3">Teacher</option>
                              <option value="4">Parent</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Signup button -->
                    <div class='row'>
                        <a href="index"><button class="btn waves-effect waves-light" type="submit" name="action">Sign Up
                            <i class="material-icons right">send</i>
                        </button></a>        
                    </div> <!-- end of signup button -->
                </div> <!-- end of the entire div -->
            </form>
        </center>
    </main>

    <!-- Java Script -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
</html>