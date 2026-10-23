<?php
$test = 0 ;
$result ="" ;
    while ($test < 91){
    if   ($test >= 90) {
     $result = $result . $test ;  
    }
    else{
        $result = $result . $test . ", " ;
        }
        $test = $test + 10   ;
    }
?>
<html>
<head>
</head>
<body>
 <h1> getalen reeks </h1>
  <p><?= $result ?></p>
</body>
</html>