<?php

    $file = fopen("calories.txt", "r");
    $elf = array();
    $top3 = array(0, 0, 0);
    $max3 = 0;
    $count = 0;
    $calories = 0;
    while (($line = fgets($file)) !== false)
    {
        if (strlen($line) > 2)
        {
            $calories += intval($line);
        } else
        {
            echo $count . " Calories Total: " . $calories . "\n";
            $elf [] = $calories;
            $count++;
            $calories = 0;
        }
    }
    print_r($elf, true);
    for ($i=0;$i<3;$i++)
    {
        $subset = $elf;
        for ($i =0;$i<3;$i++)
        {
            $max = max($subset);
            echo $max."\n";
            $top3[$i] = $max;
            $key = array_keys($subset, $max);
            unset($subset[$key[0]]);
            echo " - Top ".$i.": " . $top3[$i]."\n";
            $max3 += $top3[$i];
        }
    }
    echo "Total: ". $max3;