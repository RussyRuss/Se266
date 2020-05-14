
<?php

function fizzBuzz($num)
{
    if($num % 2 == 0 && $d % 3 ==0){
        return "Fizz Buzz";
    }
    else if($num % 2 == 0){
        return "Fizz";
    }
    else if($num % 3 == 0){
        return "Buzz";
    }
    else {
        return $num;
    }
}
?>
