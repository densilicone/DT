<?php

function calculator(string $counter): int
{
    $signsArrai = ['?', '_', '$', '=', '%', '@', '!', '#', '&'];
    $arrai = str_split($counter);
    $arraiLength = count($arrai);

    for ($i = 0; $i < $arraiLength; $i++) {
          
        if (in_array($arrai[$i], $signsArrai)) {
            unset($arrai[$i]);
        }
    }
    
    $arraiNew = implode($arrai);
    return eval("return $arraiNew;");
}
echo calculator('12@4+1#7a5?/5-2');
