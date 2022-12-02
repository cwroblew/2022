<?php

    $file = fopen("calories.txt", "r");
    $elf = array();
    $count = 0;
    $calories = 0;
    while (($line = fgets($file)) !== false)
    {
        if (strlen($line) > 2)
        {
            $calories += intval($line);
        } else {
            echo $count. " Calories Total: ".$calories."\n";
            $elf [] = $calories;
            $count++;
            $calories = 0;
        }
    }
    print_r($elf, true);
    $max = max($elf);
    $elfNum =  array_keys($elf, $max);
    echo "Elf #: ".$elfNum[0]." - " . $max;