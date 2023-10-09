<?php
session_start();
    
// if the session doesn't exist
if (!isset($_SESSION['email']))
{
    // redirect back to login page
    header('location:Sign-in.php?');
}

?>