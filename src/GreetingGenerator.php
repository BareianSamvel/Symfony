<?php
namespace App;

class GreetingGenerator
{
    public function getRandomGreeting()
    {
        $greetings = ['Hey', 'Guten Tag', 'Howdy'];
        $greeting = $greetings[array_rand($greetings)];

        return $greeting;
    }
}