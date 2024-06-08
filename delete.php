<?php
include 'new.php';

$id=$_GET['id'];
$deletequery="delete from jobregistration where id=$id";
$query=mysqli_query($con, $deletequery);
if($query){
    ?>
    <script>
        alert("A field is deleted!");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Data not deleted!");
    </script>
    <?php
}
header('location:display.php');
?>