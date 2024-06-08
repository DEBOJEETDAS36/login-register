<!DOCTYPE html>
<html>
<heaad>
    <title>Job registration form</title>
    <?php include 'links.php' ?>
    <!-- <?php include 'css/st.css' ?> -->

</head>
<body>
    <form method="POST">
        <div class="form-group">
        <input type="text" placeholder="Enter full name" class="form-control" name="name">
        </div>
        <div class="form-group">
        <input type="text" placeholder="Enter your qualifications" class="form-control" name="degree">
        </div>
        <div class="form-group">
        <input type="tel" placeholder="Mobile no." class="form-control" name="mobile">
        </div>
        <div class="form-group">
        <input type="email" placeholder="Enter your email" class="form-control" name="email">
        </div>
        <div class="form-group">
        <input type="text" placeholder="Any references" class="form-control" name="refer">
        </div>
        <div class="form-group">
        <input type="text" placeholder="Position" class="form-control" value="Web Developer" name="jobpost">
        </div>
        <div class="form-group">
        <input type="submit" value="Register" name="submit">
        </div>
    </form>
    <div class="form-group">
        <a href="display.php">Check Form</a>
    </div>
</body>
</html>
<?php
include 'new.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $degree=$_POST['degree'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $refer=$_POST['refer'];
    $jobpost=$_POST['jobpost'];
    $insertquery=" insert into jobregistration (name,degree,mobile,email,refer,jobpost) values('$name', '$degree', 
    '$mobile', '$email', '$refer', '$jobpost') ";
    $res=mysqli_query($con, $insertquery);
    if($res){
        ?>
        <script>
            alert("Data inserted successfully!");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data not inserted successfully!");
        </script>
        <?php 
    }
}
?>