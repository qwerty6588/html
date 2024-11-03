<?php
function randomNum ($min, $max){
    return rand($min, $max);
}
echo randomNum(100, 1000);
