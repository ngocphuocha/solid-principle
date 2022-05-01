<?php

namespace App\Solid;


class Duck implements Speakable, Flyable, Walkable
{

    public function speak()
    {
        return 'statrt speaking';
    }

    public function walk()
    {
        return 'start walking';
    }

    public function fly()
    {
        return 'start flying';
    }
}
