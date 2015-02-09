<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>CS290 Assignment4 login</title>
</head>
<body>
<form action = "content1.php?login=true" method = "POST">
<p>Please enter your username here</p>
<input type="text" name="username">
<input type="submit" value ="Login">
<?php
    if (isset($_GET['logout'])){
        session_unset();
        session_destroy();
    }
?>

</body>
</html> 
