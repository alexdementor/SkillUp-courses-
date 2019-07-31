<?php
/*           <?= 123 ?>  или <?php echo 123?>  -- форма записи чтобы вывести на экран                       */

//
#
/* ...*/            // виды комментариев 
/**...*/

// переменная в php начинается со знака доллара !


// $a = 'test';               // string 

// $a = false;                 //bool

// $a =123;                    //int

// $a = 123.01;               //float

// $a = [1, 2, 'test'];      // array

// $a = null;	              //null

// $a = function () {};     //Closure

// $a = new DateTime ();    //object

// $a = fopen('newfile.php', 'r+b');       // resource


// var_dump($a);  //как console.log (type of a) в Javascript

//////////////////////////////////////////////////////////////////////////////////
// $a = 'test'+'2';

// $a = 'test'.'2';
// $a = 'test'.(string)123;

$a = 1;
$b = 2;

$c = $a + $b; 
$c = $a - $b; 
$c = $a * $b; 
$c = $a / $b; 
$c = $a % $b; 

var_dump($c); 
