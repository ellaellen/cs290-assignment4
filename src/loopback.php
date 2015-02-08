
<?php
header('Content-Type: text/plain');

if ($_GET != NULL)
{
    $jsonObj = json_encode($_GET);
    echo "{\"Type\":\"[GET]\", \"parameters\":" . $jsonObj . "}";
    return $jsonObj;
}
else {
    echo "{\"Type\":\"[GET]\", \"parameters\":null}\n";
}

if ($_POST != NULL)
{
    $jsonObj = json_encode($_POST);
    echo "{\"Type\":\"[POST]\", \"parameters\":" . $jsonObj . "}";
    return $jsonObj;
}
else {
    echo "{\"Type\":\"[POST]\", \"parameters\":null}\n";
}
?>
