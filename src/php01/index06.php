<?php
for ($i = 0; $i < 4; $i++) {
    echo $i;
}
echo "<br>";

echo "----------------<br>";

for ($i = 1; $i <= 5; $i++) {
  echo $i * 2 . '<br />';
}
echo "----------------<br>";
$count = 0;
while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}
echo "----------------<br>";
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
}
echo "<br>";
echo "----------------<br>";
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}
echo "<br>";
echo "----------------<br>";

$count = 0;

while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}
echo "----------------<br>";
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";
for ($count =1;$count <= 50; $count++) {
  if ($count % 3 === 0) {
    echo $Fizz . '<br />';
        continue;
  }
  else if ($count % 5 === 0) {
    echo $Buzz . '<br />';
        continue;
  }
  else if ($count % 15 === 0) {
        echo $FizzBuzz . '<br />';
        continue;
    }
    else {
        echo $count . '<br />';
    }
}
echo "----------------<br>";
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) {
        echo $FizzBuzz;
    } else if ($i % 3 == 0) {
        echo $Fizz;
    } else if ($i % 5 == 0) {
        echo $Buzz;
    } else {
        echo $i;
    }
}
echo "<br>";
echo "----------------<br>";

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}

