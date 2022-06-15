<?php
session_start();

if (isset($_SESSION['uid'])) 
{
    echo "";
}
else 
{
    header('location:../login.php');
}
?>
<?php
    include('header.php');
    include('title.php');
    include('../dbcon.php');

    $sid = $_GET['sid'];

    $qry = "SELECT * FROM `student` WHERE `id` = '$sid'";

    $run = mysqli_query($con,$qry);

    $data = mysqli_fetch_assoc($run);
?>
<form method="POST" action="updatedata.php" enctype="multipart/form-data">
    <table border="3" align="center" style="width:40%;">
        <tr  >
            <td>Roll No</td>
            <td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
        </tr>
        <tr >
            <td>Name</td>
            <td ><input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
        </tr>
        <tr  >
            <td>City</td>
            <td ><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
        </tr>
        <tr >
            <td>pcont</td>
            <td><input type="text" name="pcont" value=<?php echo $data['pcont']; ?> required></td>
        </tr>
        <tr  >
            <td>standard</td>
            <td ><input type="number" name="std" value=<?php echo $data['standard']; ?> required></td>
        </tr>
        <tr >
            <td>Image</td>
            <td ><input type="file" name="simg" required></td>
        </tr>
        <tr >
            <td colspan="2" align="center">
            <input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>    
            <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
</body>

</html>