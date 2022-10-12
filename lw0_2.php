<?php

function sumTime(string $timeFirst, string $timeSecond): string
{
    $firstMassive = [];
    $secondMassive = [];
    $arrZnaki = ['?', '/', '_', '$', '=', '%', '@', '!', '#', '^', '&', '*'];
    $arrFirst = str_split($timeFirst);
    $arrSecond = str_split($timeSecond);
    $arrLength = count(array_merge($arrFirst, $arrSecond));
    for ($i = 0; $i < $arrLength; $i++) {
        if (in_array($arrFirst[$i], $arrZnaki)) {
            unset($arrFirst[$i]);
        }
        if (in_array($arrSecond[$i], $arrZnaki)) {
            unset($arrSecond[$i]);
        }
    }
    $timeFirst = implode($arrFirst);
    $timeSecond = implode($arrSecond);
    $firstMassive = explode(":", $timeFirst);
    $secondMassive = explode(":", $timeSecond);
    $firstSumm = $firstMassive[0] + $secondMassive[0];
    $secondSumm = $firstMassive[1] + $secondMassive[1];
    $thirdSumm = $firstMassive[2] + $secondMassive[2];
    while ($thirdSumm >= 60) {
        $thirdSumm = $thirdSumm - 60;
        $secondSumm = $secondSumm + 1;
    }
    while ($secondSumm >= 60) {
        $secondSumm = $secondSumm - 60;
        $firstSumm = $firstSumm + 1;
    }
    while ($firstSumm > 23) {
        $firstSumm = $firstSumm - 24;
    }
    return $firstSumm . ":" . $secondSumm . ":" . $thirdSumm;
}
echo sumTime("2%42@:4@53$:125^3$", "2%42@:4@53$:125^3$");

?>