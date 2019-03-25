<?php
include './vendor/autoload.php';

$user = new App\User();
$user->setName('Lira');
echo $user->getName() . PHP_EOL;

$employee = new App\Employee();
echo $employee->role . PHP_EOL;