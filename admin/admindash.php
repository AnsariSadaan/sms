<?php
    session_start();
    if($_SESSION['uid'])
    {
       // echo $_SESSION['uid'];
    }

    else
    {
        header('location: ../login.phps');
    }
?>
<?php
    include('header.php');
?>
    <div class="admintitle" align="center">
        <h4><a href="logout.php" style="float: right; margin-right: 30-px; color:#fff; font-size:20px;">Logout</a></h4>
        <h1>Welcome to Admin Dashboard</h1>
    </div>

    <div class="dashboard">
        <table align="center" style="width: 50%;">
            <tr>
                <td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
            </tr>

            <tr>
                <td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
            </tr>

            <tr>
                <td>3.</td><td><a href="Deletestudent.php">Delete Student Details</a></td>
            </tr>
        </table>
    </div>
</body>
</html>