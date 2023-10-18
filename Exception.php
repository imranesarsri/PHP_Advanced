<?php


function divide($num1, $num2)
{

    if ($num2 == 0) {
        throw new Exception("connet dvide by 0");
    } else {
        return $num1 / $num2;
    }
}

try {
    echo divide(4, 0);
} catch (Exception $e) {
    echo $e->getMessage();
}
