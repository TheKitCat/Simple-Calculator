<?php
/**
 * Simple calculator
 */
class Calculator{
      
    /**
     * @assert (1,1) == 2
     * @assert (2,4) == 6
     * @param type $a
     * @param type $b
     * @return type
     */
    function add($a, $b){
        
        return $a+$b;
    }           
         
}
$myOb = new Calculator();
echo $myOb->add(3, 4);
?>
