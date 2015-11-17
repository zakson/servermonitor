<?php
$output = 'Host Raport - '.shell_exec(hostname).PHP_EOL;
$output .= shell_exec('date').PHP_EOL;
$output .= shell_exec('uptime').PHP_EOL;
$output .= shell_exec('df -h').PHP_EOL;
echo "<pre>$output</pre>";
?>

