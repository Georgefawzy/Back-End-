

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

      <?php

      // Question one (Task one)
      $name = "programmer";
      echo'Hello, ' . $name;
      

            // :::::::::::::::::::::::

      // Question two (Task one)
      echo "<hr/>";
      echo "<br/>";
      
      $numbers = [5,10,1,2,3,4,13,12];
      
      echo "{$numbers[0]} + {$numbers[1]} = " . ($numbers[0] + $numbers[1]) . "<br/>";
      echo "{$numbers[0]} * {$numbers[1]} = " . ($numbers[0] * $numbers[1]) . "<br/>";
      echo "{$numbers[0]} - {$numbers[1]} = " . ($numbers[0] - $numbers[1]) . "<br/>";
      echo "<hr/>";
      
            // :::::::::::::::::::::::

      // Question three (Task one)
      echo "Difference = " . $numbers[2] * $numbers[3]-$numbers[4] * $numbers[5] . "<br/>";
      echo "<hr/>";
      
            // :::::::::::::::::::::::

      
      // Question four (Task one)
      echo "3+2  = " . (($numbers[6] % 10) + ($numbers[7] % 10)) . "<br/>";
      
      echo "<hr/>";

      // :::::::::::::::::::::::

      // Question five (Task one)
      
      $digits = 4569;
      $digits = (string)$digits; 
      
      for ($i = 0; $i < strlen($digits); $i++) {
          $digit = $digits[$i]; 
      
          if ($digit % 2 == 0) {
              echo " $digit is even<br/>";
          } else {
              echo " $digit is odd<br/>";
          }
        }
        echo "<hr/>";
        
        
        // :::::::::::::::::::::::

      // Question six (Task one)
      
      
      
      // Question seven (Task one)
      
      
      //:::::::Task Two :::::::

      // Question One (Task Two)
      
      $freq = 5;
      
      for ($i = 1; $i <= $freq; $i++){
        echo "$i<br/>";
      }
      echo "<hr/>";

      
      // Question Two (Task Two)
      
      $num = 5;
      
      for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 == 0) {
              echo "$i<br/>";
          }
      }
      echo "<hr/>";
      
      // Question Two (Task Two)
      
      $first = 20;
      $second = [1,8,5,7,5];
      
      $maxV= max($first,...$second);
      echo "The maximum number is: $maxV";
      echo "<hr/>";
      
      // other answer
      
      $maxValue = $first;
      foreach($second as $value){
        if($value > $maxValue){
          $maxValue = $value;
        }
      }
      echo "The maximum number is: $maxValue";
      echo "<hr/>";
      
      // Question Three (Task Two)
      
      $prime = 5;
      
      for ($i = 1; $i <= $prime; $i++) {
        if ($i % 2 !== 0) {
          echo "$i YES the number is prime <br/>";
        } else{
          echo "$i NO <br/>";
          }
        }
      echo "<hr/>";
      
      // Question Four (Task Two)


      

            ?>







</body>

</html>