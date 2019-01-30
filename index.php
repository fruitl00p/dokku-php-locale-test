<pre>
<?php
setlocale(LC_ALL,'nl_NL.utf-8');
echo strftime('%A %e %B %Y', mktime(0, 0, 0, 12, 22, 1978)).PHP_EOL;

setlocale(LC_ALL,'en_GB');
echo strftime('%A %e %B %Y', mktime(0, 0, 0, 12, 22, 1978)).PHP_EOL;

setlocale(LC_ALL,'en_US');
echo strftime('%A %e %B %Y', mktime(0, 0, 0, 12, 22, 1978)).PHP_EOL;
?>
</pre>
