<?php
$output = 'Host Raport - '.shell_exec('hostname').PHP_EOL;
$output .= shell_exec('date').PHP_EOL;
$output .= shell_exec('uptime').PHP_EOL;
$output .= shell_exec('df -h').PHP_EOL;
$output .= shell_exec('ping -c 1 -q 8.8.8.8').PHP_EOL;
echo "<pre>$output</pre>";
?>

