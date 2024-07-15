<?php

declare(strict_types=1);

include_once 'minor.php';

class Child extends Minor
{

    public function __construct(
        $surname,
        $name,
        $age,
        private string $toy
    )
    {
        parent::__construct ($surname, $name, $age);
    }

    public function setToy(string $toy): void
    {
        $this->toy = $toy;
    }

    public function getToy(): string
    {
        return $this->toy;
    }
}