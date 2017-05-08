<?php
function local() {
    global $var_global ;
    echo $var_global . "\n";
}
$var_global = "5";

local();
?>
