<?php 

class ShiftChiper{

    private $key = '5';

    function encrypt($text) 
    { 
        $result = "";

        for ($i = 0; $i < strlen($text); $i++) 
        {
            if (ctype_upper($text[$i])) 
                $result = $result.chr((ord($text[$i]) + $this->key - 65) % 26 + 65);  
            else
                $result = $result.chr((ord($text[$i]) + $this->key - 97) % 26 + 97); 
        }
        return $result; 
    }

    function decrypt($text) 
    { 
        $result = "";

        for ($i = 0; $i < strlen($text); $i++) 
        {
            if (ctype_upper($text[$i])) 
                $result = $result.chr((ord($text[$i]) - $this->key - 65) % 26 + 65);  
            else
                $result = $result.chr((ord($text[$i]) - $this->key - 97) % 26 + 97); 
        }
        return $result; 
    } 
}
?>