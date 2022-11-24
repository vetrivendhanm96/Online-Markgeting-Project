

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

*{background-color:MediumSeaGreen;}
  
.header-right {
  float: right;
}

table, th, td {
  border: 1px solid black;
  
  border-color: rgb(201, 76, 76);
}

h2{
    text-align:left;
}

    </style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


</head>
<body>
<h1>WELCOME to METRO SHOPPING</h1>

<div class="header">
  <h2>Available Products:</h2>
</div>


<div class="header-right">


<a href="contact.php"><button style="font-size:24px">Contact <i class="fa fa-phone"></i></button></a>

    <a href="commonf.php"><button style='font-size:24px'>Logout<i class='fas fa-sign-out-alt'></i></a>
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


   <h2>PRODUCT ORDING:</h2>

 <form action="" method="POST">
    user_id:<input type="text" name="user"><br><br>
    prod_name:<input type="text" name="prod"><br><br>
    prod_brand:<input type="text" name="brand"><br><br>
 prod_desc:<input type="text" name="retail"><br><br>
    prod_quantity:<input type="text" name="quantity"><br><br>
   order_date:<input type="date" name="updated"><br><br>

<input type="submit" name="submit">
</form>

<?php
$dbcon=mysqli_connect('localhost','root','','goods');


    if (isset($_POST['submit'])){
        $user_id=$_POST['user'];
        $prod_name=$_POST['prod'];
        $prod_brand=$_POST['brand'];
        $prod_desc=$_POST['retail'];
        $prod_quantity=$_POST['quantity'];
        $date_updated=$_POST['updated'];
        $sql="INSERT INTO sales(userid,prodname,prodbrand,proddesc,prodquantity,dateupdated)
        values('$user_id','$prod_name','$prod_brand','$prod_desc','$prod_quantity','$date_updated')";

    
        $qry=$dbcon->query($sql);
        if ($qry){
           
        echo "<script>
        alert('save successfully')
        </script>";
        }else{
            echo "not inserted";
        }
    
    }
    ?>