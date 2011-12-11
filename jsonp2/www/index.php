<?php
$callback = $_GET['callback'];
$method = $_GET['method'];
echo $callback.'('."{'field':'".$method."'}".')';
?>