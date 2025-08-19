<?php

$makefoo = true;

/* ここでは関数foo()はまだ定義されていないので
   コールすることはできません。
   しかし関数 bar()はコールできます。 */

bar();

if ($makefoo) {
    function foo()
    {
        echo "I don't exist until program execution reaches me.\n";
    }
}

/* ここでは $makefooがtrueと評価されているため 
   安全にfoo()をコールすることができます。 */

if ($makefoo) foo();

function bar()
{
    echo "I exist immediately upon program start.\n";
}
echo "<br>";
echo "--------------<br>";
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}

outputNumber(2);
echo "<br>";
echo "--------------<br>";
function outputHello()
{
    echo "Hello world";
}

outputHello(); // ①
echo "<br>";
echo "--------------<br>";
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 4);
echo $total;
echo "<br>";
echo "--------------<br>";
function addNumber($a, $b)
{
    $add = $a + $b;
    return $add;
}

$total = addNumber(2, 3);
print $total;
echo "<br>";
echo "--------------<br>";
function exam($score1, $score2,$score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210){
        echo $total . "点なので合格です";
        }else{
        echo $total . "点なので不合格です";
        }
}
echo (exam(80, 90, 60));
echo "<br>";
echo "--------------<br>";
function triangleArea($width,$height)
{
    $triangle = $width * $height / 2;
    return $triangle;
}
echo "三角形の面積は" . triangleArea(10, 5) . "です";
echo "<br>";
function squareArea($width, $height)
{
    $square = $width * $height;
    return $square;
}
echo "四角形の面積は" . squareArea(10, 5) . "です";
echo "<br>";
function trapezoidArea($width, $height)
{
    $trapezoid = ($width + $height) / 2;
    return $trapezoid;
}
echo "台形の面積は" . trapezoidArea(10, 5) . "です";
echo "<br>";
echo "--------------<br>";
function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

echo "<br>";
echo "--------------<br>";
