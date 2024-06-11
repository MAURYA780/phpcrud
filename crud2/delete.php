<?php
include('connection.php');

$id=$_GET['id'];

$query="delete from form where id='$id'";
$data=mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('data deleted successfully')</script>";
        ?>
        <meta http-equiv="refresh" content="0; URL=http://localhost/crud2/display.php" />

        <?php
}
else
{
    echo "Deletation Failed";
}
?>