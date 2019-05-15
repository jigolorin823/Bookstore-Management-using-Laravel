<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body style="text-align: center;">
  	<h1>Laboratory Activity 4</h1>
  	<fieldset style="width: 40%; margin: auto auto auto auto;">
    <form method="post">
      <input type="text" name="n" value="<?php echo isset($_POST['n']) ? $_POST['n'] : '' ?>">
      <input type="submit" name="submit" placeholder="submit" value="submit">

      <br>
      <?php
        $n = '';
        $i = 0;


        echo "<br>";

// /
        if(isset($_POST["submit"])) {

          $n = $_POST["n"];
          while($i<$n) {
            echo "<input type=\"text\" name=\"$i\">";
            $i++;
          }
        }

        echo "<input type=\"submit\" name=\"submit1\" placeholder=\"submit\" value=\"submit\">";


        echo "<br>";


        if(isset($_POST["submit1"])) {
          $g = $_POST['n'];
          $x = 0;
          $sum = 0;
          $even = array(0);
          $e = 0;
          $odd = array(0);
          $o = 0;
          echo 'input: ';
          while($x<$g) {
              $z = $_POST["$x"];
              echo $z, ' ';
              $sum += $z;
              if($z%2 === 0) {
                $even[$e] = (int)$z;
                $e++;
              }
              else {
                $odd[$o] = (int)$z;
                $o++;
              }

              $x++;
          }
          echo "<br><br><fieldset style=\"width:30%; margin: auto auto auto auto;\">";
         
          a($g,$sum);
          b($e,$o,$even,$odd);
          echo "<br>";
          c($e,$o,$even,$odd);
          echo "</fieldset>";
        }
        function a($num,$sum){
        	for ($i=1; $i<=$num; $i++) { 
          	echo $i." ";
          	}
          echo '<br>Sum: ', $sum, "<br>";
        }
        function b($e,$o,$even,$odd){
        	rsort($even);
      	    rsort($odd);
        	echo "Even: ";
        	for($j = 0; $j<$e; $j++) {
         		echo $even[$j], ' ';
         	}
          	echo "<br>";
         	echo "Odd: ";
          	for($j = 0; $j<$o; $j++) {
          		echo $odd[$j], ' ';
          }
        }
        function c($e,$o,$even,$odd){
        	echo 'Even average: ', (array_sum($even)/$e);
         	echo "<br>";
          	echo 'Odd average: ', (array_sum($odd)/$o);

        }

      ?>


    </form>
    </fieldset>
  </body>
</html>