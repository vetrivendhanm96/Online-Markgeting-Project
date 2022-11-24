<?php
$dbcon = mysqli_connect('localhost', 'root', '', 'passin');
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
            text-align: center;
            background-color: orange;
        }
    </style>
</head>

<body style="margin-top:200px;">


    <h1>WELCOME to USERLOGIN page</h1>
    <form action="usererrorform.php" method="POST">
        USERid:<input type="text" name="id1"><br><br>
        PASSword:<input type="password" name="word"><br><br>
        <button type="submit" name="submit">login</button>
    </form>

</body>

</html>


<!-- 
<?php
if (isset($_POST['submit'])) {
    $userid = $_POST['id1'];
    $password = $_POST['word'];

    $sql = "INSERT INTO passout(userid,password2)values('$userid','$password')";
    echo $sql;
    $qry = $dbcon->query($sql);
    if ($qry) {
        echo "successfully inserted";
    } else {
        echo "not inserted";
    }
}
?>    -->