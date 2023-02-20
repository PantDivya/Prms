<?php
session_start();
if(!isset($_SESSION['UserId']))
{
    header('Location:form_login.php');
    exit();
}
?>