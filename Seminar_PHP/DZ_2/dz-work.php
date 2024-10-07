<?php

// function arithmeticOperation($num1, $num2, $operation)
// {
//         if($operation == "+")
//             return $num1 + $num2;
//         if($operation == "-")
//             return $num1 - $num2;
//         if($operation == "*")
//             return $num1 * $num2;
//         if($operation == "/")
//             return $num1 / $num2;
//         return "There is no such operator";
// }

// $num1 = 4;
// $num2 = 5;
// $operation = "+";

// echo arithmeticOperation ($num1, $num2, $operation);

// **********************************************************************

// function  mathOperation($arg1, $arg2, $operation)
// {
//     switch ($operation)
//     {
//         case "+":
//             return $arg1 + $arg2;
//             break;
//         case "-":
//             return $arg1 - $arg2;
//             break;
//         case "*":
//             return $arg1 * $arg2;
//             break;
//         case "/":
//             return $arg1 / $arg2;
//             break;
//         default:
//             return "There is no such operator";
//     }
// }

// $arg1 = 4;
// $arg2 = 5;
// $operation = "+";

// echo mathOperation($arg1, $arg2, $operation);

//********************************************************************

$city = ['Московская область' => ['Подольск', 'Домодедово', 'Кашира'],
        'Ленинградская область'=> ['Выборг', 'Всеволожск', 'Павловск', 'Кронштадт'],
        'Рязанская область'=> ['Скопин', 'Сасово', 'Рыбное']
        ];

foreach ($city as $key => $value){
    $num = count($value);
        echo "$key: ";
            for($i = 0; $i < $num; $i++){
                if($i < $num-1){
                    echo "$value[$i], ";
                }else{
                    echo "$value[$i]; ";
                }
            }
        }

    // foreach ($city as $key => $value){
    //     echo "$key: " . PHP_EOL;
    //     print_r($value);
    // }