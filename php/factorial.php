
<html>
  <body>
      <?php
 function factorial($n) { 
    if($n<=1)
    {
         return 1; 
    }
    else{
         return $n*factorial($n-1);
        } 
         
    }
    $n=10;  
    echo "Factorial $n  =>>" .factorial($n);  
?>      
</body>
</html>