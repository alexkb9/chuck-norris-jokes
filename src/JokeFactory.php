<?php

namespace Alexkb\ChuckNorrisJokes;

class JokeFactory
{

    protected $jokes = [
        'If you spell Chuck Norris in Scrabble, you win. Forever.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes)
        {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}