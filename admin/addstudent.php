<?php
session_start();

if (isset($_SESSION['uid'])) {
    echo "";
}
# else {
#   echo "ERROR!";
#}
else {
    header('location:../login.php');
}
?>
<?php
include('header.php');
include('title.php');
?>
<form method="POST" action="addstudent.php" enctype="multipart/form-data">
    <table border="3" align="center" style="width:40%;">
        <tr  >
            <td>Roll No</td>
            <td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
        </tr>
        <tr >
            <td>Name</td>
            <td ><input type="text" name="name" placeholder="Enter your Name" required></td>
        </tr>
        <tr  >
            <td>City</td>
            <td ><input type="text" name="city" placeholder="Enter City" required></td>
        </tr>
        <tr >
            <td>pcont</td>
            <td><input type="text" name="pcont" placeholder="Enter your Contact Number" required></td>
        </tr>
        <tr  >
            <td>standard</td>
            <td ><input type="number" name="std" placeholder="Enter standard" required></td>
        </tr>
        <tr >
            <td>Image</td>
            <td ><input type="file" name="simg" required></td>
        </tr>
        <tr >
            <td colspan="2" align="center">
            <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
</body>

</html>

<?php
if (isset($_POST['submit'])) { 
    include('../dbcon.php');
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcont = $_POST['pcont'];
    $standard = $_POST['std'];

    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    $qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`,`images`) VALUES ('$rollno','$name','$city','$pcont','$standard','$imagename')";
    $run = mysqli_query($con, $qry) or die(mysqli_error($con));
    if ($run == true) {
?>
        <script>
            alert('Data Inserted Successfully');
        </script>
<?php
    }
}
?>