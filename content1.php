<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
  
        <?php
        
        
            
        
            //error_reporting(E_ALL); ini_set('display_errors','On');

            
            
           // echo "test var is :>" . $_SESSION['test'] ."<";
            
            //echo "logged in is:" . $_SESSION['loggedin'];
            
             //var_dump($_SESSION[loggedin]);

            
            if(isset($_POST['username']))
            {
                $_SESSION['loggedin'] = true;
                
                $userName = $_POST['username'];
                
                $_SESSION['username'] = $_POST['username'];
                
            }

            
            if($_SESSION['loggedin'] != true )
            {
                
                echo"Not logged in. Click <a HREF=\"login.php\">here</a> to return to the login screen.<br>";
                
                exit();
            }                        

            
            if(($_SESSION['username'] === "") || ($_SESSION['username'] == null) )
            {
                
                echo "A username must be entered. Click <a HREF=\"login.php\">here</a> to return to the login screen.<br>";
               
                exit();
                
            }
 
            if ($_SESSION['visited'] == null)
            {

                $_SESSION['visited']++;

            }

            $times = $_SESSION['visited'];

            echo "Hello $_POST[username] you have visited the page $times times before.  <form action=\"login.php\" method=\"post\"><button type=\"submit\" name=\"logout\"> click here </button></form> to logout.<br>";
            
            echo "<a HREF=\"content2.php\">content2.php</a><br>";

            
            $_SESSION['visited']++;
            
                       
            
        
            
        ?>
    </body>
</html>

