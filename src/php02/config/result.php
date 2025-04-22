<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
print "お名前は、" . $name . "<br>";

$radiobtn = htmlspecialchars($_POST["radiobtn"], ENT_QUOTES);
print "ご希望商品は、" . $radiobtn . "<br>";

$num = htmlspecialchars($_POST["num"], ENT_QUOTES);
print "注文数は、" . $num;