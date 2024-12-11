<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$merchandise = htmlspecialchars($_POST['merchandise'], ENT_QUOTES);
$numOfOrder = htmlspecialchars($_POST['numOfOrder'], ENT_QUOTES);
print "私の名前は、" . $name . "<br>";
print "ご希望の商品は、" . $merchandise . "<br>";
print "注文数は、" . $numOfOrder . "<br>";