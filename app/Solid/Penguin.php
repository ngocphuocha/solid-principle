<?php

namespace App\Solid;

class Penguin implements Speakable, Walkable
{

    public function speak(): string
    {
        return 'start speaking';
    }


    public function walk(): string
    {
        return 'start walking';
    }
}
