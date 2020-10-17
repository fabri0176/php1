<?php 

require __DIR__.'/vendor/autoload.php';

var_dump(App\Validate::email('email1@test.com'));
var_dump(App\Validate::email('email1@@test.com'));