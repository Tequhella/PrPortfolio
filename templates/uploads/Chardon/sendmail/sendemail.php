<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

if (isset($_POST['email']) && isset($_POST['obj']) && isset($_POST['txt']))
{
    send_email (htmlspecialchars($_POST['email']), htmlspecialchars($_POST['obj']), htmlspecialchars($_POST['txt']));
}

function send_email (string $email, string $obj, string $txt): void
{
    $txt = str_replace ("\n.", "\n..", $txt);
    
    $email = "From: " . $email . "\r\n";
    
    var_dump ($email);
    
    mail ("lilian.chardon@gmail.com", $obj, $txt, $email);
    
    header ("Location: ../public/index.php");
}

?>