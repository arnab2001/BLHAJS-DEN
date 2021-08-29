<?php
$db=mysqli_connect("localhost","root","","shark");


if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $desc=$_POST['description'];
        $desc1=$_POST['description1'];


        $sql="INSERT INTO `joinus` (`name`,`email`,`description`,`description1`,`datetime`) VALUES ('$name','$email','$desc','$desc1',current_timestamp)";
        if (mysqli_query($db,$sql)) {
          header('Location:join.php');
        }


    }



?>
