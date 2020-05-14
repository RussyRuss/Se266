<?php include 'header.php'; ?>
    
<h1>PHP and MySQL - Erik van Renselaar</h1>
<p>
Welcome to my PHP and MySQL page. You can find an overview of all my working PHP projects along with my code.
</p>
<h2>Assignment Overview</h2>

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
    