<?php

// Variables
$name = 'Mike the Frog';
$location = 'Orlando, FL';

// Constants
define('YEAR', 2014);
define('JOB_TITLE', 'Developer');
define('MAX_BADGES', 150000);

// Invalid constant
// define('2LEGIT', 'to quit');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <title><?php echo $name ?> | Treehouse Profile</title>
    <link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/avatar.png" alt="<?php echo $name ?>">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location ?></p>
      <hr />
      <p>Welcome to PHP Basics!</p>
      <hr />
      <ul class="social">
        <li><a href=""><span class="icon twitter"></span></a></li>
      </ul>
    </section>
    <section class="main">
      <pre><?php 
          /*
          $names = array(
                        'roy', 
                        'laura', 
                        'georgia', 
                        'ramona', 
                        'sumo'
                        );
          */
          // print_r($names);
          // $one = 1;
          // $two = 2;
          // $three = 3;
          // $string_one = '1';

          // echo $one;
          // echo "1";

          // $distance_to_home = 1.5;
          // $distance_to_work = 8.1;
          // echo gettype($one)
          // echo $two + $distance_to_home + $distance_to_work
          
          // $greeting = 'Hello, Friends!';
          // $greeting{0} = 'J';
          // $secondary_greeting = 'How are you today?';
          // echo $greeting;
          // echo $secondary_greeting;

          // $bool = TRUE;
          // var_dump($bool);
          // $bool = FALSE;
          // var_dump($bool);

          // var_dump((bool) '');
          // var_dump((bool) 0);
          // var_dump((bool) 1);
          // var_dump((bool) -1);
          // var_dump((bool) 0.0);
          // var_dump((bool) array());
          
          // echo YEAR;
          // echo JOB_TITLE;
          // echo MAX_BADGES;
          
          // // ARRAYS
          // $array_example = array();
          // $array_example = [];
          // $eye_colors = ['blue', 'green', 'brown'];
          
          // print_r($eye_colors);

          // // Change value within the array
          // $eye_colors[1] = 'hazel';

          // print_r($eye_colors);

          // // Add value to array
          // $eye_colors[] = 'purple';

          // print_r($eye_colors);
  
          // // ASSOCIATIVE ARRAYS
          // $eye_colors = [
            // 'roy' => 'green',
            // 'laura' => 'brown',
            // 'georgia' => 'unknown'
          // ];

          // print_r($eye_colors);

          // $eye_colors['roy'] = 'hazel';

          // echo $eye_colors['roy'];

          // $eye_colors['ramona'] = 'brown';

          // print_r($eye_colors);
  
          ////////////////////////////////
          ////////// OPERATORS ///////////
          ////////////////////////////////
          
          // // Operators
            // $a = 10;
            // $b = 10;

            // $sum = $a + $b;
            // $diff = $a - $b;
            // $product = $a * $b;
            // $quotient = $a / $b;

            // echo $sum;
            // echo $diff;
            // echo $product;
            // echo $quotient;
            // echo $sum++; =21
          
          // // Comparison Operators
            // $a = 10;
            // $b = 10;
            // $c = 20;
            // $d = '10';

            // var_dump( $a == $b ); // True
            // var_dump( $a === $b ); // True
            // var_dump( $a === $d ); // False
            // var_dump( $a != $b ); // False
            // var_dump( $a != $c ); // True
            // var_dump( $a !== $b ); // False
            // var_dump( $a !== $d ); // True
            // var_dump( $a < $b ); // False
            // var_dump( $a < $c ); // True
            // var_dump( $a <= $b ); // True
            // var_dump( $a >= $b ); // True
  
          // // Logical Operators
            // $a = TRUE;
            // $b = TRUE;
            // $c = FALSE;

            // var_dump( $a and $b ); // True
            // var_dump( $a && $b ); // True
            // var_dump( $a and $c ); // False
            // var_dump( $a or $c ); // True
            // var_dump( $a || $c ); // True
            // var_dump( $b or $c ); // True
            // var_dump( ! $a ); // False
            // var_dump( ! $c ); // True

      ?></pre>
    </section>
  </body>
</html>