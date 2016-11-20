<body>
  <?php
  $a = $_REQUEST["a"];
  $b = $_REQUEST["b"];
  $c = $_REQUEST["c"];
  $d = $b*$b-4*$a*$c;

  echo "a = $a<br>b = $b<br>c = $c<br><br>{$a}x^2 + {$b}x + $c = 0<br>d = $d<br><br>";

  if($d < 0){
    echo "NO SOLUTIONS";
  }
  if($d == 0){
    echo "1 SOLUTION:<br>".-$b/(2*$a);
  }
  if($d > 0){
    echo "2 SOLUTIONS:<br>".(-$b-sqrt($d))/(2*$a)." and ".(-$b+sqrt($d))/(2*$a);
  }
  ?>
  <form action="quadraticEquationInput.html">
    <br><input type="submit" name="back" value="<- Back">
</body>
