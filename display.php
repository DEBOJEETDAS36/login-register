
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'links.php'; ?>
</head>
<body>
<div class="main-div">
    <h1>List of candidates applying for Web Developer job</h1>
    <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Degree</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Refer</th>
                        <th>Post</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>
                <tbody>
                <?php
include 'new.php';
$selectquery="select * from jobregistration";
$query=mysqli_query($con, $selectquery);
$num=mysqli_num_rows($query);
echo $num;
// echo $res[1];
while($res=mysqli_fetch_array($query)){
    ?>
    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['degree']; ?></td>
                        <td><?php echo $res['mobile']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['refer']; ?></td>
                        <td><?php echo $res['jobpost']; ?></td>
                        <td><a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Update">Update</a></td>
                        <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete">Delete</a></td>
                    </tr>
                    <?php
}

?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>