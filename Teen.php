<?php

declare(strict_types=1);

include_once 'minor.php';

class Teen extends Minor
{
    public function __construct(
        $surname,
        $name,
        $age,
        private bool $sport
    )
    {
        parent::__construct ($surname, $name, $age);
    }

    public function setSport(bool $sport): void
    {
        $this->sport = $sport;
    }

    public function getSport(): bool
    {
        return $this->sport;
    }
}