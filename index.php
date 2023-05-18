<?php
// timestamp: 3:00
// $array = [5, 2, 1];
$array = [1, 2, 5];
echo isDescendingOrder($array);
// $array = [4, 1, 2, 5];
$result = [];
if (isDescendingOrder($array)) {
    echo "The array is already arranged in descending order.";
}
 else {
    // echo "the array is not in desceing order";
    do {
        for ($i =  count($array)- 1; $i >= 0; $i--) {
            if ($i == 0 ) {
                // $i = count($array)- 1;
                break;
            }
             if ($array[$i] > $array[$i - 1]) {
                $temp = $array[$i];
                $array[$i] = $array[$i - 1];
                $array[$i - 1] = $temp;
                array_push($result, $array);
            }
        }
     print_r($result);  

    }
     while (isDescendingOrder($array));
}
function isDescendingOrder($array)
{
    for ($i = 0; $i < (count($array) - 1); $i++) {
        if ($array[$i] > $array[$i + 1]) {
            return true;
        }
    }
    return false;
}

