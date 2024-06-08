<?php
include 'new.php';

$ids=$_GET['id'];
$showquery= "select * from jobregistration where id={$ids}";
$showdata=mysqli_query($con, $showquery);
$arrdata=mysqli_fetch_array($showdata);


if(isset($_POST['submit'])){

    $updateid=$_GET['id'];


    $name=$_POST['name'];
    $degree=$_POST['degree'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $refer=$_POST['refer'];
    $jobpost=$_POST['jobpost'];
    // $insertquery=" insert into jobregistration (name,degree,mobile,email,refer,jobpost) values('$name', '$degree', 
    // '$mobile', '$email', '$refer', '$jobpost') ";

    $query=" update jobregistration set id=$updateid, name='$name', degree='$degree', mobile='$mobile',
    email='$email', refer='$refer', jobpost='$jobpost' where id=$updateid" ;


    $res=mysqli_query($con, $query);

    if($res){
        ?>
        <script>
            alert("Data updated successfully!");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data not updated successfully!");
        </script>
        <?php 
    }
}
?>

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
        <input type="text" placeholder="Enter full name" class="form-control" name="name" value="<?php echo $arrdata['name']; ?>">
        </div>
        <div class="form-group">
        <input type="text" placeholder="Enter your qualifications" class="form-control" name="degree" 
        value="<?php echo $arrdata['degree']; ?>">
        </div>
        <div class="form-group">
        <input type="tel" placeholder="Mobile no." class="form-control" name="mobile" value="<?php echo $arrdata['mobile']; ?>">
        </div>
        <div class="form-group">
        <input type="email" placeholder="Enter your email" class="form-control" name="email" value="<?php echo $arrdata['email']; ?>">
        </div>
        <div class="form-group">
        <input type="text" placeholder="Any references" class="form-control" name="refer" value="<?php echo $arrdata['refer']; ?>">
        </div>
        <div class="form-group">
        <input type="text" placeholder="Position" class="form-control" value="Web Developer" name="jobpost" 
        value="<?php echo $arrdata['jobpost']; ?>">
        </div>
        <div class="form-group">
        <input type="submit" value="Update" name="submit">
        </div>
    </form>
    <div class="form-group">
        <a href="display.php">Check Form</a>
    </div>
</body>
</html>
