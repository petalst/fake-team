<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\FakeTeam;
use Faker\Provider\TeamData;
use PHPUnit\Framework\TestCase;

class FakeTeamTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp() : void
    {
        $faker = Factory::create();
        $faker->addProvider(new FakeTeam($faker));
        $this->faker = $faker;
    }

    public function testTeam()
    {
        $this->assertTrue(
            in_array(
                $this->faker->team,
                TeamData::getTeamNames()
            )
        );
    }


}