
<?php
$dbcon=mysqli_connect('localhost','root','','passin');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       * {
            text-align:center;
            background-color:dodgerblue;
        }
    </style>
</head>
<body style="margin-top:200px;">
<body>
    <h2>WELCOME to distributor login page<h2>
    <form action="dsperrorform.php" method="POST">
        DSPid:<input type="text" name="dsp1" required><br><br>
        PASSword:<input type="password" name="pword" required><br><br>
        <button type="submit" name="save">login</button>
    </form>

    </body>
</html>

<!-- <?php
if (isset($_POST['save'])){
    $userid=$_POST['dsp1'];
    $password=$_POST['pword'];

    $sql="INSERT INTO passout(dspid,dsppasswd)values('$userid','$password')";
    
    $qry=$dbcon->query($sql);
  

} 

?>  -->