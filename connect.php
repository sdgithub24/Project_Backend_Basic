<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn = mysqli_connect('localhost','root','','form_data') or die("Connection not succeded".mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['email'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sql = "INSERT INTO `registration` (`name`,`email`) VALUES ('$name','$email')";
            $query = mysqli_query($conn,$sql);
            if($query){
                echo 'Details saved successfully';
            }
            else{
                echo 'Error please resubmit';
            }
        }
    }