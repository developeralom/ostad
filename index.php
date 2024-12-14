<?php
// echo "Hello";

// // Basic Function 
//  echo "</br>";

// function functionName($argumnent1, $argumnent2){
//     echo $argumnent1+$argumnent2;

// }
// functionName(2,4);


       // function with default value

// function sum($n1, $n2=5){

//     echo $n1+$n2;
// }
// echo sum(2);


        // type hints function

        // function sum(int $number1,int $number2){
        //     $result=$number1+$number2;
        //     return $result;
        // }
        // echo sum(4,6);


            // multiple type hints 

       // function sum(int|string $ar1, int|string $ar2){
       //        echo $ar1+$ar2;

       // }
       // sum(3,5);
       // sum("6","9");
       
// Nunable type hints

// function myName(?string $text): void{
//        if($text){
//               echo " Text is $text"; 
//        }else{
//               echo "No text provided";
//        }
// }

// myName(null);

       // variadic function 

// function sum(...$number){
//        echo array_sum($number); // array_sum() a built in function 

// }
// sum(1,2,3);



// function sum(... $number){
//        echo $number[2];
// }
// sum(1,2,"3");

       // Anonymous functions 
// (function (){
//        echo "Hello this is anonymous function";
// })();


// $great= function($num){
//        echo "Hello, " .$num. "!";

// };
// echo $great(3);

              // arrow function 
       // $sum=fn($n1,$n2)=>$n1+$n2;
       // echo $sum(2,5);









?>