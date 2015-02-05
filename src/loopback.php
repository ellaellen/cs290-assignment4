
<?php
header('Content-Type: text/plain');

if ($_GET != NULL)
{
    $jsonObj = json_encode($_GET);
    echo $jsonObj;
    return $jsonObj;
}

if ($_POST != NULL)
{
    $jsonObj = json_encode($_POST);
    echo $jsonObj;
    return $jsonObj;
}
?>
