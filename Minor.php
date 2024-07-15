<?php

declare(strict_types=1);

include_once 'person.php';

class Minor extends Person
{
    public function __construct(
        $surname,
        $name,
        $age
    )
    {
        parent::__construct ($surname, $name, $age);
    }
}