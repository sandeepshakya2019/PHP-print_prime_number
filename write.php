<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php

function isPrime($n) 
{ 
    // Corner case 
    if ($n <= 1) 
        return false; 
  
    // Check from 2 to n-1 
    for ($i = 2; $i < $n; $i++) 
        if ($n % $i == 0) 
            return false; 
  
    return true; 
} 

function printPrime($n) 
{ 
    for ($i = 2; $i < $n; $i++)  
    { 
        if (isPrime($i)) 
            echo $i . " "; 
    } 
} 
 
function numberTowords($num)
{
// original string 
    $OriginalString = $num; 
    $number = array(
        "one" => 1,
        "two" => 2,
        "three" => 3,
        "four" => 4,
        "five" => 5,
        "six" => 6,
        "seven" => 7,
        "eight" => 8,
        "nine" => 9,
        "ten" =>10,
        "eleven" => 11,
        "tweleve" => 12,
        "thirteen" => 13,
        "fourteen" => 14,
        "fifteen" =>15,
        "sixteen" => 16,
        "seventeen" => 17,
        "eighteen" => 18,
        "nineteen" => 19,
        "twenty" => 20,
        "thirty" => 30,
        "fourty" => 40,
        "fifty" => 50,
        "sixty" => 60,
        "seventy" => 70,
        "eighty" => 80,
        "ninty" => 90,
        "hundread" => 100,
        "thousand" => 1000
        );
    // Without optional parameter NoOfElements 
    $arraynum = explode(" ",$OriginalString);
    // return sizeof($arraynum);
    if (sizeof($arraynum) == 1){
        if (array_key_exists($arraynum[0],$number))
          {
            return $number[$arraynum[0]];
          }
        else
          {
          return "Value does not exist!";
          }
    }elseif(sizeof($arraynum) == 2){
        if (array_key_exists($arraynum[1],$number))
          {
              if ($arraynum[1] == "hundread"){
                return ($number[$arraynum[0]]*100);
            }else{
            return $number[$arraynum[0]] + $number[$arraynum[1]];
            }
          }
        else
          {
            return "Value does not exist!";
          }
    }elseif(sizeof($arraynum) == 3){
        if (array_key_exists($arraynum[2],$number))
          {
           
            return (($number[$arraynum[0]]*100 ) + $number[$arraynum[2]]);
            
          }
        else
          {
            return "Value does not exist!";
          }
    }else{
        if (array_key_exists($arraynum[2],$number))
          {
              
            if ($arraynum[1] == "hundread"){
                return (($number[$arraynum[0]]*100 ) + $number[$arraynum[2]] + $number[$arraynum[3]]);
            }
          }
        else
          {
            return "Value does not exist!";
          }
    }
    
    
}

   function print_Prime_Number($number_in_text) {
    $convert = numberTowords($number_in_text);
    return printPrime($convert);
}
print_Prime_Number ("twenty five")
?>
</body>
</html>