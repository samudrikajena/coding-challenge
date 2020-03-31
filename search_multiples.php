<? php 

/* 
  Write a program that prints all the numbers from 1 to 100. However, for

  multiples of 3, instead of the number, print "Linio". For multiples of 5 print

  "IT". For numbers which are multiples of both 3 and 5, print "Linianos".
    
        
  But here's the catch: you can use only one `if`. No multiple branches, ternary

  operators or `else`.  

  
    # Requirements

     * PHP 7

     * Maximum of 1 if

     * You can't use `else`, `else if` or ternary
*/

function search_multiples(int $n)
{
  $c1 = 3;    // keeps tracking multiples of 3
  $c2 = 5;    // keeps tracking multiples of 5
      
  for($i = 1 ; $i <= $n ; $i++){
      $str = "";
      
      // Find multiples of 3
      
      if($i == $c1 ){
              $c1 +=3; // Update next multiple of 3 
              $str .= "Linio <br />";
      }
      
      if($i == $c2 ){
              $c2 +=5; // Update next multiple of 5 
              $str .="IT <br />";
      }
      
      if($str !== "")
              echo $str. "<br />";
      echo $i."<br />"
      
  }
}

search_multiples(100);

