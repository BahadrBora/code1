<?php

//include 'index.php';            // optional
//include_once 'index.php';       // optional once
//require 'index.php';            // mandatory
require_once 'greater.php';       // mandatory once
require_once 'equal.php';
//require_once 'auth.php';

/**
 * 1 1 1        *
 * 1 1 2        *
 * 1 2 1        *
 * 2 1 1        *
 * 2 2 1
 * 1 2 2
 */
//$isGreater = greater(3,4,5);

function testForTheFirstNumberWasTheGreatest() {
    $firstNumber = 6;
    $secondNumber = 5;
    $thirdNumber = 4;

    $expectedNumber = 6;

    $actualNumber = greater($firstNumber, $secondNumber, $thirdNumber);

    assert($expectedNumber === $actualNumber, 'First number should be the greatest');
}

function testForTheSecondNumberWasTheGreatest() {
    $firstNumber = 60;
    $secondNumber = 500;
    $thirdNumber = 4;

    $expectedNumber = 500;

    $actualNumber = greater($firstNumber, $secondNumber, $thirdNumber);

    assert($expectedNumber === $actualNumber, 'Second number should be the greatest');
}

function testForTheThirdNumberWasTheGreatest() {
    $firstNumber = 60;
    $secondNumber = 5;
    $thirdNumber = 499;

    $expectedNumber = 499;

    $actualNumber = greater($firstNumber, $secondNumber, $thirdNumber);

    assert($expectedNumber === $actualNumber, 'Third number should be the greatest');
}//added by bora

function testForAllNumbersAreEquals() {
    $firstNumber = 60;
    $secondNumber = 60;
    $thirdNumber = 60;

    $expectedNumber = 60;

    $actualNumber = greater($firstNumber, $secondNumber, $thirdNumber);

    assert($expectedNumber === $actualNumber, 'All numbers are should be the equal');
}//added by bora


testForTheFirstNumberWasTheGreatest();
testForTheSecondNumberWasTheGreatest();
testForTheThirdNumberWasTheGreatest();
testForAllNumbersAreEquals();