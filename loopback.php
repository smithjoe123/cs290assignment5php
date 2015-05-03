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
        error_reporting(E_ALL); ini_set('display_errors','On');
        
        //echo "get is " . $_SERVER['REQUEST_METHOD'];// sizeOf($_GET);
        
        if (($_SERVER['REQUEST_METHOD'] === 'GET') && (sizeOf($_GET) === 0))
        {
            $response = array('type' => 'GET', 'parameters' => null);
            
            echo json_encode($response);
            
            exit();
        }
        
        else if (($_SERVER['REQUEST_METHOD'] === 'POST') && (sizeOf($_POST) === 0))
        {
            
           $response = array('type' => 'POST', 'parameters' => null);
           
          
           
           echo json_encode($response);
           
           exit();
              
            
        }
        
        
        
        else if (($_SERVER['REQUEST_METHOD'] === 'GET'))
        {
            
            
            /*
            $response = array();
            
            foreach ($_GET as $key => $value)
            {
                
                $reponse[$key] = $value; 
                //array_push($response, $value);
               // array_push($response, 4);
                
                //echo $key;
                
                //$response["jj"] = 9;
                // echo $response["jj"];
                
                // echo $response["j"];
                
                
                
            }
            
            //echo $reponse;
            
            $response["h"] = 5;
            
            echo $response;
            
            echo $response["h"];
             * 
             */
            $response = $_GET;
            echo json_encode($response); 
            
            exit();
            
        }
        
        else if(($_SERVER['REQUEST_METHOD'] === 'POST'))
        {
            /*
            $response = array();
            
            foreach ($_POST as $key => $value)
            {
                
                $reponse[$key] = $value; 
                
            }
            
            echo json_encode($response); 
            
            exit();          
             * 
             */  
            $response = $_POST;
            echo json_encode($response); 
            
            exit();
            
        }
        

            
        ?>
    </body>
</html>

