# fake-esto

provider for faker to generate fake estonian text based on A.H.Tammsaares "Tõde ja õigus" ("Truth and justice")

## Installation
`composer require kasparsu/fake-esto`

## Usage

```php
$faker = Faker\Factory::create('et_EE');
$faker->addProvider(new Faker\Provider\et_EE\Text($faker));
echo $faker->realText();
```