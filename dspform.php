

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

*{background-color:Green;}
  
.header-right {
  float: right;
}

table, th, td {
  border: 1px solid black;
  

}


    </style>


</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<h1>WELCOME to METRO SHOPPING</h1>

<div class="header">
  <h2>Available Products:</h2>
</div>




        <div class="header-right">

        <a href="orderform.php" class="w3-button w3-yellow">ORDER</a>

        <a href="productthings.php" class="w3-button w3-blue">ADD PRODUCT</a>
        
        <a href="commonf.php" class="w3-button w3-red">LOGOUT</a>
</div>

<table>
    <tr>
        <th>sys_id</th>
        <th>prod_name</th>
        <th>prod_brand</th>
        <th>prod_desc</th>
        <th>retail_cost</th>
        <th>selling_cost</th>
        <th>prod_quantity</th>
        <th>date_updated</th>
</tr>
<?php

$sql="SELECT * FROM selling";

$qry=$dbcon->query($sql);
while($rst = $qry->fetch_assoc()){



    $sys= $rst['sys_id'];
    $name= $rst['prod_name'];
    $brand= $rst['prod_brand'];
    $desc= $rst['prod_desc'];
    $retail= $rst['retail_cost'];
    $selling= $rst['selling_cost'];
    $quantity= $rst['prod_quantity'];
    $date= $rst['date_updated'];
    ?>
    <tr>                                         
    <td><?php echo $sys;?></td>
    <td><?php echo $name;?></td>
    <td><?php echo $brand ;?></td>
    <td><?php echo $desc ;?></td>
    <td><?php echo $retail ;?></td>
    <td><?php echo $selling ;?></td>
    <td><?php echo $quantity ;?></td>
    <td><?php echo $date;?></td>
   
    </tr>

    
    <?php
    }
    ?>

 </table>
 </body>
</html>