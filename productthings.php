
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
        *{background-color:gray;}


        .header-right {
  float: right;
}
        </style>

</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>


<div class="header-right">

<a href="dspform.php" class="w3-button w3-blue">Back</a>
</div>

    <h1>ADD products:</h1>
<form action="" method="POST">
    sys_id:<input type="text" name="sys"><br><br>
    prod_name:<input type="text" name="prod"><br><br>
    prod_brand:<input type="text" name="brand"><br><br>
    prod_desc:<input type="text" name="desc"><br><br>
    retail_cost:<input type="text" name="retail"><br><br>
    selling_cost:<input type="text" name="selling"><br><br>
    prod_quantity:<input type="text" name="quantity"><br><br>
    date_updated:<input type="date" name="updated"><br><br>
     <input type="submit" name="submit">


    </form>
</body>
</html>
<?php

    if (isset($_POST['submit'])){
    $sys_id=$_POST['sys'];
    $prod_name=$_POST['prod'];
    $prod_brand=$_POST['brand'];
    $prod_desc=$_POST['desc'];
    $retail_cost=$_POST['retail'];
    $selling_cost=$_POST['selling'];
    $prod_quantity=$_POST['quantity'];
    $date_updated=$_POST['updated'];
    $sql="INSERT INTO selling(sys_id,prod_name,prod_brand,prod_desc,retail_cost,selling_cost,prod_quantity,date_updated)
    values('$sys_id','$prod_name','$prod_brand','$prod_desc','$retail_cost',' $selling_cost','$prod_quantity','$date_updated')";
 
    
    
   
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