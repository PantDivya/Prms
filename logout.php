<?php
session_start();
session_destroy();
header('Location:form_login.php?message=User Log out successfully');
exit();
?>