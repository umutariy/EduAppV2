<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body class="img">

    <!-- Navigation Bar -->
    <nav>
      <div class="nav-wrapper" style="background-color: #0097a7">
          <a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
          <a class = "btn dropdown-button" style="background-color: transparent;" href = "#" data-activates = "dropdown">
          <i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Academics</a>  
          <a href = "index.html" style="background-color: transparent;" class="right">Sign Out</a>
      </div>
    </nav>

    <!-- Main Body -->
    
    <center>
    <h4 style="color: #0097a7">Your Dashboard</h4>
      <fieldset style="width:150" align="center" class="fieldset">

        <!-- <form method="" action="index.php/quiz1"> -->
          <div class='row'>
            <button class="btn btn-block waves-effect waves-light" type="submit" name="records">View Records
              <i class="material-icons right">assignment</i>
            </button>         
          </div>
         
          <div class='row'>
            <a href="students_questions"><button class="btn btn-block waves-effect waves-light" type="submit" name="assignment">Start Assignment
              <i class="material-icons right">mode_edit</i>
            </button></a>        
          </div>

          <div class='row'>
            <button class="btn btn-block waves-effect waves-light" type="submit" name="message">View Message from teacher
              <i class="material-icons right">email</i>
            </button>         
          </div>
        <!-- </form> -->

      </fieldset>
    </center>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
</html>