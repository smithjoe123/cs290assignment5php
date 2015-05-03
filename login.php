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
        <form action="content1.php" method="POST">
              
            <input type="text" name="username">
            
            <input type="submit">  
              
        </form>  
        <?php
        
            session_start();
            if(isset($_POST['logout']))
                 {
                
                    $_SESSION['loggedin'] = false;
                    
                    echo "logged in is: $_SESSION[loggedin] ";
                    
                    var_dump($_SESSION[loggedin]);
                 
                 }  
                 
            
            
        ?>
    </body>
</html>

