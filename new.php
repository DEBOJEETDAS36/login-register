<?php
$username="root";
$password="";
$server="localhost";
$database="curd";
$con=mysqli_connect($server, $username, $password);
$db = mysqli_select_db($con, $database);
if($con){
    ?>
      <script>
      // alert("Connection successful");
      </script>
    <?php
}else{
    echo "No connection";
    // die("no connection". mysqli_connect_error());
}
?>