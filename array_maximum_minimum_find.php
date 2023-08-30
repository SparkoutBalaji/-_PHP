<?php 
$a = [1, 125, 130, 1234,500, 900, 789, 911 ];   //array elemets
            
            $maximum = 0;                       //maximum value is o, and able to $manimum = $a[0]; $a[0] takes value 1
            $elements = count($a);              //number of elements in the array
            for($i=0;$i<$elements;$i++)
            {
                if($a[$i] > $maximum)           // i value set to the array index key
                {
                    $maximum = $a[$i];          //if any number have a maximum value then its put on the array index value, then its repeat the loop for any maximum value is found
                }

            }
            echo "[1, 125, 130, 1234,500, 900, 789, 911 ] Maximum value from the List : <br/><br/>";
            echo "MAXIMUM : ".$maximum."<br/><br/>";

$b = [125, 130, 1234, 12, 5, 400, 500, 900, 789, 911 ];
            
            $minimum = $b[0];                   //if am put minimum value is zero then, its return value is 0. So am put the arrays first index key is a minimum
            $elements = count($b);
            for($i=0;$i<$elements;$i++)
            {
                if($b[$i] < $minimum)
                {
                    $minimum = $b[$i];          //if any number have a maximum value then its put on the array index value, then its repeat the loop for any maximum value is found
                }

            }
            echo "[125, 130, 1234, 12, 5, 400, 500, 900, 789, 911 ] Minimum value from the list : <br/><br/>";
            echo "MINIMUM : ".$minimum."<br/><br/>";
