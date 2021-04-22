<?php

namespace Faker\Provider;

class TeamData
{
    public static function getTeamNames(): array
    {
        return static::$teamNames;
    }

    protected static $teamNames = [
        'Bears',
        'Heats',
        'Lakers',
        'Boulders',
        'Rocks',
        'River',
        'Fire',
        'Storm',
        'Stars',
        'Thunder',
        'Suns',
        'Flames',
        'Hurricanes',
        'Avalanche',
        'Bulls',
        'Penguins',
        'Dolphins',
        'Elks',
        'Tigers',
        'Eagles',
        'Hornets',
        'Hawks',
        'Grizzlies',
        'Bucks',
        'Wolves',
        'Pelicans',
        'Falcons',
        'Ravens',
        'Panthers',
        'Lions',
        'Jaguars',
        'Chickens',
        'Ducks',
        'Coyotes',
        'Sharks',
        'Dragons',
        'Aliens',
        'Magic',
        'Raptors',
        'Wizards',
        'Titans',
        'Devils',
        'Warriors',
        'Vikings',
        'Miners',
        'Chiefs',
        'Patriots',
        'Saints',
        'Giants',
        'Steelers',
        'Oilers',
        'Kings',
        'Rangers',
        'Jets',
        'Pistons',
        'Clippers'
    ];

}