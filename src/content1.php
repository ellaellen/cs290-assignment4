<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//header('Content-Type: text/plain');
session_start();
//if ($_SERVER['REQUEST_METHOD'] != "POST"){
if (!$_GET['login']){
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "<h2>Content1.php</h2>";
if(session_status() == PHP_SESSION_ACTIVE){
    if ($_POST['username'] == NULL && !isset($_SESSION['name'])){
        echo " A username must be entered. Click " . "<a href = \"login.php\">here</a>" . " to return to the login screen.";
        //session_destroy();
    }
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $_SESSION['name'] = $_POST['username'];
        if (!isset($_SESSION['visits'])){
            $_SESSION['visits'] = 0;
        }
        else {
            $_SESSION['visits']++;
        }
        echo "Hello $_SESSION[name], you have visited this page $_SESSION[visits] times before.\n";
        echo "Click " . "<a href = \"login.php?logout=true\">here</a>" . " to logout.\n";
        echo "Click " . "<a href = \"content2.php?login=true\">here</a>" . " to another page content2.php.\n";
        
    }
}

?>
</body>
</html>

