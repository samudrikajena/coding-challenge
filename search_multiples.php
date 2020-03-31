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
      
  for($i = 1 ; $i <= $n ; $i++){
      switch($i){
              case($i % 3 === 0 && $i % 5 === 0): echo "Linianos <br />";
                   break;
              case($i % 3 === 0) : echo "Linio <br />";
                   break;
              case($i % 5 === 0) : echo "IT <br />";
                   break;
              default:
                echo $i. "<br />";              
              
             }
      
        }
}

search_multiples(100);
