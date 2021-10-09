<?php
//This is example of usage and should be kept as is.

require __DIR__ . '/../vendor/autoload.php';

$faker = Faker\Factory::create('et_EE');
echo $faker->name;