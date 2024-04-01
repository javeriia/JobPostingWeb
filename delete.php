<?php

$id=$_GET['no'];

$connection=mysqli_connect("localhost","root","","jobform");

$query="DELETE FROM form WHERE id='{$id}'";



if (mysqli_query($connection,$query)) {
    # code...
    header("Location: index.php");

}else{
    echo "Data has not been deleted";
}
?>