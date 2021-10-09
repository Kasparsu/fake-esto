<?php
//This is example of usage and should be kept as is.

use Faker\Provider\et_EE\Text;

require __DIR__ . '/../vendor/autoload.php';

$faker = Faker\Factory::create('et_EE');
$faker->addProvider(new Text($faker));
echo $faker->realText();