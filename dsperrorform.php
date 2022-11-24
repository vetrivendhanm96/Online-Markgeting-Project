
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
      
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="contain
      
        

      </div> <!-- end of container -->
    </nav>

    
    <div class="container" style="padding-top:150px;">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px;">
          <?php
                    

                      // Credentials
                      $hostname= "localhost";
                      $username= "root";
                      $password= "";
                      $database= "passin";


                      // UserInput Test
                      function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                       
                        return $data;
                      } 

                      if(empty($_POST['dsp1']) || empty($_POST['pword']))
                      {
                        $error= "UserName or Password is Required.";
                      }
                      else
                      {
                        $admin_name= test_input($_POST['dsp1']);
                        $admin_password= test_input($_POST['pword']);


                        //Establish Connection
                        $dbcon=mysqli_connect('localhost','root','','passin');

                        //Check
                        if(!$dbcon)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }

                        $sql= "SELECT * FROM passin.passout WHERE	dspid='".$admin_name."' AND dsppasswd='".$admin_password."'";
                        $qry=$dbcon->query($sql);
                       

                        
                        if(mysqli_num_rows($qry)==1)
                        {
                          header("location:dspform.php");
                        }
                        else
                        {
                          $error="Sorry !! Authentication Failed";
                          
                          echo "<p class='alert alert-danger'><strong>$error</strong></p>";

                          echo "<p class='normalFont text-primary'><strong>Your Combination of Username and Password is In-correct. Better, You contact to the developer of system.</strong> </p>";
                          echo "<br><a href='dspf.php' class='btn btn-primary'><span class='glyphicon glyphicon-refresh'></span> <strong>Try Again</strong></a>";
                        }

                        mysqli_close($dbcon);

                      }
                    
          ?>

          </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


