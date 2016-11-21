<body>
  <?php
  $a = $_REQUEST["a"];
  $b = $_REQUEST["b"];
  $c = $_REQUEST["c"];
  $d = $b*$b-4*$a*$c;

  echo "You entered:<br>a = $a<br>b = $b<br>c = $c<br><br>Formula:<br><i>f</i>(x)=";

  if($a == 1){
    echo "x<sup>2</sup>";
  }
  elseif($a == -1){
    echo "-x<sup>2</sup>";
  }
  else{
    echo "{$a}x<sup>2</sup>";
  }

  if($b < -1){
    echo "{$b}x";
  }
  elseif($b > 1){
    echo "+{$b}x";
  }
  elseif($b == 1){
    echo "+x";
  }
  elseif($b == -1){
    echo "-x";
  }

  if($c < 0){
    echo "$c";
  }
  elseif($c > 0){
    echo "+$c";
  }

  echo "<br><br>Discriminant:<br>d = $d<br><br>Roots:<br>";

  if($d < 0){
    echo "No real roots.<br>Two complex roots: ";#.-$b/(2*$a)."-i".sqrt(-$d)/(2*$a)." and ".-$b/(2*$a)."+i".sqrt(-$d)/(2*$a);
    if(-$b/(2*$a) != 0){
      echo -$b/(2*$a);
    }
    echo "-i";
    if(sqrt(-$d)/(2*$a) > 0){
      echo sqrt(-$d)/(2*$a);
    }
    else{
      echo "(".sqrt(-$d)/(2*$a).")";
    }
    echo " and ";
    if(-$b/(2*$a) != 0){
      echo -$b/(2*$a);
    }
    echo "+i";
    if(sqrt(-$d)/(2*$a) > 0){
      echo sqrt(-$d)/(2*$a);
    }
    else{
      echo "(".sqrt(-$d)/(2*$a).")";
    }
  }
  elseif($d == 0){
    echo "1 real root: ".-$b/(2*$a);
  }
  else{
    echo "2 real roots: ".(-$b-sqrt($d))/(2*$a)." and ".(-$b+sqrt($d))/(2*$a);
  }
  ?>
  <form action="quadraticEquationInput.html">
    <br><input type="submit" name="back" value="<- Back">
</body>
