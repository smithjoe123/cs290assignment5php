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
        
            $_GET['min-multiplicand'] = 3;   
            
            $_GET['max-multiplicand'] = 9;
                    
            $_GET['min-multiplier'] = 4;     
                    
            $_GET['max-multiplier']= 9;       
        
            if(!isset($_GET['min-multiplicand']))
            {
                echo "min-multiplicand is not set<br>";
            }
            if(!isset($_GET['max-multiplicand']))
            {
                echo "max-multiplicand is not set<br>";
            }    
            if(!isset($_GET['min-multiplier']))
            {
                echo "min-multiplier is not set<br>";
            }             
            if(!isset($_GET['max-multiplier']))
            {
                echo "max-multiplier is not set<br>";
            }               

            $minMultiplicand = $_GET['min-multiplicand'];
            
            $maxMultiplicand = $_GET["max-multiplicand"];
        
            $minMultiplier = $_GET["min-multiplier"];
            
            $maxMultiplier = $_GET["max-multiplier"];
            
            if ($minMultiplicand > $maxMultiplicand)
            {
                
                echo "Min-multiplicand is not less than or equal to max-multiplicand. <br>";
            
            }
            if ($minMultiplier > $maxMultiplier)
            {
                
                echo "Min-multiplier is not less than or equal to max-multiplier. <br>";
                
            
            }
            
            if(!is_int($_GET['min-multiplicand']))
            {
                
                echo "min-multiplicand must be an interger. <br>";
                
            }
            

            if(!is_int($_GET['max-multiplicand']))
            {
                
                echo "max-multiplicand must be an interger. <br>";
                
            }            


            if(!is_int($_GET['min-multiplier']))
            {
                
                echo "min-multiplier must be an interger. <br>";
                
            }            


            if(!is_int($_GET['max-multiplier']))
            {
                
                echo "max-multiplier must be an interger. <br>";
                
            }
            //echo "df";
            echo "<table>";
            
            for($i = 0; $i < (($maxMultiplicand - $minMultiplicand) + 2); $i++)
            {
                
                echo "<tr>";
                for($i2 = 0; $i2 < (($maxMultiplier - $minMultiplier) + 2); $i2++)
                {
                    
                    echo "<td>";
                    //echo ">" . $i . $i2 . "<";
                    if (($i === 0) && ($i2 === 0))
                    {
                        
                        echo " ";
                        continue;
                        
                        
                        
                    }
                    
                    else if (($i === 0) && ($i2 != 0))
                    {
                        
                        echo $minMultiplier+$i2;
                        
                        continue;
                        
                    }
                    
                    else if (($i2 === 0) && ($i != 0))
                    {
                        
                        echo $minMultiplicand+$i;
                        
                        continue;
                        
                    }         
                    
                    else
                    {
                        echo (($minMultiplier+$i2) * ($minMultiplicand+$i));
                        
                        //echo ($i*$i2);
                        
                        continue;
                    }
                    
                    
                    
                    echo "</td>";
                
                }
                //if ($i == 0)
                echo "</tr>";
            
            }
            
            echo "</table>";
            
        ?>
    </body>
</html>

