 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro class</title>
 </head>
 <body>

      <h1> This is our first class on PHP<h1>

      <?php
      echo "This is PHP in html block";
      ?>
    
 </body>
 </html>

     <?php
     echo "Hello world!"."<br>";
      
     $x = 30;
     $y = 10;

     $result = $x+$y;

     echo "<h1>The result is =".$result ."</h1>";

     for($i = 1; $i <= 5; $i++){

      echo "Hello world!"."<br>";
     }
      $phpArray = [40, 50, 76, 30];
      
      for($i = 0; $i <=3; $i++ ){

         echo $phpArray[$i]."<br>";
      }
         
      ?>