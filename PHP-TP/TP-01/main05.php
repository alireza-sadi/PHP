<?php

echo strlen("Hello")."\n";
// 5

echo str_replace("H","M","Hello")."\n";
// Mello

echo str_repeat("%",50)."\n";
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

// for($i=0;$i<50;$i++)
//     echo "%\n";

// echo str_repeat("%\n",50)."\n";

echo count_chars("Hello world",3)."\n";
// Hdelorw

echo str_word_count("Hello to my world")."\n";
// 4