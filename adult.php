<?php

declare(strict_types=1);

include_once 'person.php';

class Adult extends Person {

    public function __construct(
        $surname,
        $name,
        $age,
        private bool $vote) {
        parent::__construct($surname, $name, $age);
    }

    public function setVote(bool $vote): void {
        $this->vote = $vote;
    }

    public function getVote(): bool {
        return $this->vote; 
    }
}