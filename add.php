<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'csm';
    $conn = new mysqli($host, $user, $pass, $db);

    if(isset($_POST['roll_no']))
    {
    $roll = $_POST['roll_no'];
    $name = $_POST['name'];
    $branch = $_POST['branch'];

    $sql = "INSERT INTO `stud`(`roll`, `name`, `branch`) VALUES ('$roll', '$name', '$branch');";
    mysqli_query($conn, $sql);
    }
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<h2>Add Record</h2>
<form action="add.php" method="post" >
<table>
    <tr>
        <td>Roll no.</td>
        <td><input id="id_roll" type="text" name="roll_no"></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input id="id_name" type="text" name="name"></td>
    </tr>
    <tr>
        <td>Branch</td>
        <td><input id="id_branch" type="text" name="branch"></td>
    </tr>
</table>
    <br>
    <center><input type="submit" value="submit" onclick="koi_bhi_name()"></center>
</form>


<script type="text/javascript">  
function koi_bhi_name(){  
    var roll=document.getElementById("id_roll").value;  
    var name=document.getElementById("id_name").value;  
    var branch=document.getElementById("id_branch").value;  
    alert('Roll no: '+ roll + ' Name: ' + name + ' Branch: ' + branch +' is recorded!!! ');  
}  
</script> 
