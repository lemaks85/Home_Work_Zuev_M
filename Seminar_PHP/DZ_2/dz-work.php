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

// $city = ['Московская область' => ['Подольск', 'Домодедово', 'Кашира'],
//         'Ленинградская область'=> ['Выборг', 'Всеволожск', 'Павловск', 'Кронштадт'],
//         'Рязанская область'=> ['Скопин', 'Сасово', 'Рыбное']
//         ];

// foreach ($city as $key => $value){
//     $num = count($value);
//         echo "$key: ";
//             for($i = 0; $i < $num; $i++){
//                 if($i < $num-1){
//                     echo "$value[$i], ";
//                 }else{
//                     echo "$value[$i]; ";
//                 }
//             }
//         }

// foreach ($city as $key => $value){
//     echo "$key: " . PHP_EOL;
//     print_r($value);
// }

//******************************************************************************* */

// function transLit($text){
//     $alfavit = array('а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'ye', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'к'=>'k', 'л'=>'l','м'=>'m', 'н'=>'n','о'=>'o', 'п'=>'p','р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u','ф'=>'f','х'=>'kh', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh','щ'=>'tch', 'ъ'=>'"', 'ы'=>'y', 'ь'=>'`', 'э'=>'eh', 'ю'=>'yu', 'я'=>'ya');
//         $text_a = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);
//             $text = '';
//                 foreach($text_a as $val) {
//                     $text .= (isset($alfavit[$val])) ? $alfavit[$val] : $val;
//                 }
//     return $text;
// }


//     $text = "привет мир!";
//         echo transLit($text);

//********************************************************************* */

function exponentiation($val, $pow)
	{
		if ($pow == 1){
			return $val;
		}
		if ($pow != 1){
			return $val * exponentiation($val, $pow-1);
		}
	}
	echo exponentiation(2, 2);
