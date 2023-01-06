<?php
session_start();
echo "<br>".isset($_SESSION);
if (!isset($_SESSION["counter"]))
{
    $_SESSION['counter']=1;
}else{
    $_SESSION['counter']++;
}
echo("Page Views:".$_SESSION['counter']);
?>