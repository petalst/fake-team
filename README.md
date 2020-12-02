# Fake-Team
Faker provider for fake team name


## Installation

```sh
composer require petalst/fake-team
```

## Basic Usage
```php
$faker = (new \Faker\Factory())::create();
$faker->addProvider(new \Faker\Provider\FakeTeam($faker));


// Generate team name as a string
echo $faker->team; // Bears

// Can also be added to a city name like this
echo $faker->city .' '. $faker->team; // Chicago Bulls

```