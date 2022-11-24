

<?php
$dbcon=mysqli_connect('localhost','root','','goods');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
   
    h1{
    text-align:center;
}

*{background-color:pink;}
  
.header-right {
  float: right;
}

table, th, td {
  border: 1px solid black;
  
 
}

h2{
    text-align:left;
}
  
.header-right {
  margin-right:20;
}
    </style>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>



<body>
<h1>WELCOME to METRO SHOPPING</h1>



<div class="header-right">

<a href="dspform.php" class="w3-button w3-blue">BACK</a>

</div>



<div class="header">
  <h2>Order Products:</h2>
</div>


<table>
    <tr>
        <th>userid</th>
        <th>prodname</th>
        <th>prodbrand</th>
       
        <th>proddesc</th>
      
        <th>prodquantity</th>
        <th>dateupdated</th>
</tr>
<?php

$sql="SELECT * FROM sales";

$qry=$dbcon->query($sql);
while($rst = $qry->fetch_assoc()){



    $user= $rst['userid'];
    $name= $rst['prodname'];
    $brand= $rst['prodbrand'];
    
    $desc= $rst['proddesc'];
   
    $quantity= $rst['prodquantity'];
    $date= $rst['dateupdated'];
    ?>
    <tr>                                         
    <td><?php echo $user;?></td>
    <td><?php echo $name;?></td>
    <td><?php echo $brand ;?></td>

    <td><?php echo $desc ;?></td>
  
    <td><?php echo $quantity ;?></td>
    <td><?php echo $date ;?></td>
   
    </tr>

    
    <?php
    }
    ?>

 </table>
 </body>
</html>