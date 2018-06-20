<pre>
<?php

$data = "hello";

foreach (hash_algos() as $v) {
	$r = hash($v, $data, false);
	printf("%-12s %3d %s\n", $v, strlen($r), $r);
}



?>
</pre>