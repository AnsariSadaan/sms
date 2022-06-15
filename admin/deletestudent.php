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
?>

<table align="center">
    <form action="deletestudent.php" method="post">
        <tr>
            <th>Enter Standard</th>
            <td><input type="number" name="standard" placeholder="Enter Standard" required="required"/></td>
    
            <th>Enter Student Name</th>
            <td><input type="text" name="stuname" placeholder="Enter Student Name" required="required"/></td>

            <td colspan="2"><input type="submit" name="submit" value="search"/></td>
        </tr>
        
    </form>
</table>


<table align="center" border="1" width="80%" style="margin-top: 10px;">
    <tr style="background-color: #000; color: #fff">
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Rollno</th>
        <th>Edit</th>
    </tr>

    <?php
    if(isset($_POST['submit']))
    {
        include('../dbcon.php');

        $Standard = $_POST['standard'];
        $name = $_POST['stuname'];

        $qry = "SELECT * FROM `student` WHERE `standard` = '$Standard' AND `name` LIKE '%$name%'";

        $run = mysqli_query($con,$qry);

        if(mysqli_num_rows($run)<1)
        {
            echo "<tr><td colspan='5'>No Records Found</td></tr>";

        }
        else
        {
            $count =0;
            while($data= mysqli_fetch_assoc($run))
            {
                $count++;
                ?>
                  <tr align="center">
                      <td><?php echo $count; ?></td>
                        <td><img src="../dataimg/<?php echo $data['images'] ?>" style="max-width: 100px;"></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['rollno']; ?></td>
                        <td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
                </tr>
                <?php
                
            }
        }
    }

?>

</table>

