<?php

$con= new mysqli('localhost','root','','crud_assignment');

if($con){
    echo"Connection successful";
}
else{
    die(mysqli_error($con));

}

?>