<?php include('index_header.php'); ?>
<?php
include('dbcon.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = $conn->query("select * from members where username = '$username' and password = '$password'");
$count = $query->rowcount();
$row = $query->fetch();
if ($count > 0){
session_start();
$_SESSION['id'] = $row['member_id'];
 header('location:home.php'); 
}else{
    ?>
    <script>
	alert('Invalid Username and Password. Please enter details again.');
	window.location = 'index.html';
</script>
    <?php 
 //header('location:index.html'); 
}
include "footer.php";
?>