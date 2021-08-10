<?php
require_once('../connection.php');
    session_start();

    if(isset($_SESSION['User']))
    {
        echo ' Well Come ' . $_SESSION['User'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:index.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Shkallet pharma</title>
  <!-- Favicon -->
  <link rel="icon" href="../img/core-img/icon.png">
</head>
<body>
<table border="1" class="table">
    <tr>
        <th >Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Company Name</th>
        <th>Mobile No</th>
        <th>Message</th>
    </tr>
<?php
$books_query=mysqli_query($con, "select * from contact_us");
while($books_rows=mysqli_fetch_array($books_query)){
?>
<tr>
<td><?php echo $books_rows['id'] ; ?></td>
<td><?php echo $books_rows['name'] ; ?></td>
<td><?php echo $books_rows['email'] ; ?></td>
<td><?php echo $books_rows['companyName'] ; ?></td>
<td><?php echo $books_rows['mobileno'] ; ?></td>
<td><?php echo $books_rows['message'] ; ?></td>
</tr>
<?php }?>
</table> 
</body>
</html>