<?php

$username[] = "aaaaa";
$username[] = "user1";
$username[] = "user2";
$username[] = "user3";
$username[] = "user6";
$username[] = "user7";
$username[] = "user9";
$username[] = "user0";
$username[] = "nnnnn";
$username[] = "22222";
$username[] = "11111";

$result = true;

if (in_array($_GET['username'], $username)) $result=false;

echo json_encode($result);

?>