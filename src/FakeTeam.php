<?php

namespace Faker\Provider;

class FakeTeam extends Base
{

    /**
     * Get random team name
     *
     * @return string
     * @throws \Exception
     */
    public static function team() : string
    {
        return static::teamName();
    }


    /**
     * Get random vehicle brand
     *
     * @return string
     * @throws \Exception
     */
    public static function teamName() : string
    {
        return (string) static::randomElement(array_values(TeamData::getTeamNames()));
    }


    /**
     * Get random elements from input array
     *
     * @param array $array The input array
     *
     * @return string
     * @throws \InvalidArgumentException
     * @throws \Exception
     */
    public static function randomElement($array = []) : string
    {
        return $array[mt_rand(0,  count($array))];
    }

}