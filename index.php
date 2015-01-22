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
      <p>Let's Get Started!</p>
      <p><?php echo 'Hello, World!' ?></p>
      <pre>
        <?php 
          $names = array(
                        'roy', 
                        'laura', 
                        'georgia', 
                        'ramona', 
                        'sumo'
                        );
          print_r($names);
        ?>
        <?php
        // PHP Data Types
          // Integers
          $one = 1;
          $two = 2;
          $three = 3;
          $string_one = '1';

          echo $one;
          // echo "1";

          $distance_to_home = 1.5;
          $distance_to_work = 8.1;
        ?>
        <ul>
          <li><?php echo gettype($one)?></li>
          <li><?php echo $two + $distance_to_home + $distance_to_work?></li>
        </ul>
      </pre>
      <pre><?php
          
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
          echo MAX_BADGES;

      ?></pre>
    </section>
  </body>
</html>