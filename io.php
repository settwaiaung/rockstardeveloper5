<?php

$file = fopen('list.txt', 'r');
echo "Process One\n";
while ($line = fgets($file)) {
  echo $line;
}
echo "\n";
echo "Process Two\n\n";
fclose($file);