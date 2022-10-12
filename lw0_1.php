<?php

function calculator(string $counter): int
{
    $signsArrai = ['?', '/', '_', '$' . '=', '%', '@', '!', '#', '^', '&', '*', ''];
    $arrai = str_split($counter);
    $arrLength = count($arrai);

    for ($i = 0; $i < $arrLength; $i++) {
        if (in_array($arrai[$i], $signsArrai)) {
            unset($arrai[$i]);
        }
    }
    $arrNew = implode($arrai);
    return eval("return $arrNew;");
}
echo calculator('12@4+175?/5-2');

?>