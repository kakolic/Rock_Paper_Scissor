<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

$human = readline("Enter: rock, paper, scissors");
$computer = 0;
$computer = array_rand(["rock", "paper", "scissors"]);



function game($human, $computer)
{


    switch (true) {
        case $human == $computer;
            print "Tie";
        case "$human == 0 && $computer == 2";
            print "You Won: Rock crushes scissor";
            break;
        case $human == 1 && $computer == 0;
            print "You Won: Paper covers rock";
            break;
        case $human == 2 && $computer == 1;
            print "You Won: Scissor cuts paper";
            break;
        case $human == 0 && $computer == 1;
            print "You Lose: Paper covers rock ";
            break;
        case $human == 1 && $computer == 2;
            print "You Lose: Scissor cuts paper";
            break;
        case $human == 2 && $computer == 0;
            break;
    }
    return false;
}







echo sprintf(game($human, $computer));
