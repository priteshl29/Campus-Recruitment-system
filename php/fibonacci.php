
<html>
<body>
    <?php
function fibonacci($n) { 
  if($n<=1)
  {
       return 1; 
  }
  else{
       return $n+fibonacci($n-1);
      } 
       
  }
  $n=10;  
  echo "fibonacci $n  =>>0 1 1 " .fibonacci($n);  
?>      
</body>
</html>