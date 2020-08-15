<?php
$insert=false;
if(isset($_POST['name'])){
    $insert=true;
    $server="localhost";
    $username="root";
    $password="";

    $con =mysqli_connect($server,$username, $password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    // echo "successfully connected"
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sql="INSERT INTO `trip` . `triptb` (`name`, `age`, `email`, `phone`) VALUES ('$name', '$age', '$email', '$phone');";
    echo $sql;
if($con->query($sql)==true){
    echo "sucessfully inserted";
}
else{
    echo "error: $sql <br> $con->error";
}
$con-> close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h3>Welcome to Kashmir To Kanyakumari Trip form</h3>
    <p> Enter Your details to confirm your participation</p>
    <?php 
    if($insert==true){
    echo "<p>Thanks fr submitting</p>";
    }
    ?>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder ="Enter your name">
        <input type="text" name="age" id="age" placeholder="enter your age">
        <input type="email" name="email" id="email" placeholder="Enter you email" >
        <input type="phone" name="phone" id="phone" placeholder="enter your phone number" >
        <button type="submit" class="btn">Submit</button>   
    </div>
    <script src="index.js">
    
    
    </script>
</body>
</html>