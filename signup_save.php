<?php include('index_header.php'); ?>
<body>
<?php
include('dbcon.php');
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$conn->query("insert into members (username,password,firstname,lastname,image) values ('$username','$password','$firstname','$lastname','images/default_pic.png')");
?>
<script>
	alert('Sign UP Success Please Login Your Account');
	window.location = 'index.html';
</script>
</body>
</html>