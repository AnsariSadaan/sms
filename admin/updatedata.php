<?php

    include('../dbcon.php');
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pcont = $_POST['pcont'];
        $standard = $_POST['std'];
        $id = $_POST['sid'];

        $imagename = $_FILES['simg']['name'];
        $tempname = $_FILES['simg']['tmp_name'];
        move_uploaded_file($tempname,"../dataimg/$imagename");
    
        $qry = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', 
        `standard` = '$standard', `images`= '$imagename' WHERE `id` = $id;";
        $run = mysqli_query($con, $qry) or die(mysqli_error($con));
        if ($run == true) {
?> 
        <script>
            alert('Data Updated Successfully');
            window.open('updateform.php?sid=<?php echo $id; ?>','_self');
        </script>
<?php
    }
?>

