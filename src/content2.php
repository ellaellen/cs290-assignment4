<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//header('Content-Type: text/plain');
session_start();
//if (empty($_SESSION[$this->GetLoginSessionVar()])){
//if (!isset($_SESSION['name'])){
//if (!($_GET['login']) || !isset($_SESSION['name'])){
if (!$_GET['login']){
    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html>
<body>
<?php
$name = $_GET['username'];
echo "<h2>Content2.php</h2>";
echo "Click " . "<a href = \"login.php?logout=true\">here</a>" . " to logout.\n";
echo "Click " . "<a href = \"content1.php?login=true&username=$name\">here</a>" . " to another page content1.php.\n";

?>
</body>
</html>

