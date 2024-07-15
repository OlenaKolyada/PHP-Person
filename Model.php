<?php

declare(strict_types=1);

include_once 'adult.php';
include_once 'teen.php';
include_once 'child.php';

class Model
{
    public function storeAdultFormData(array $data): bool // why give a boolean type to the method as it always return true, this should be void and return nothing
    {
        $adult = new Adult($data['surname'], $data['name'], (int) $data['age'], $data['vote'] == 1);// ternary operator is useless in this case, because $data['vote'] == 1 already return a boolean
        $_SESSION['adultForm'][] = serialize($adult);

        return true;
    }

    public function storeTeenFormData(array $data): bool
    {
        //another way to do, in PHP 8, for more clarity
        $teen = new Teen(
            surname: $data['surname'],
            name: $data['name'],
            age: (int) $data['age'],
            sport: $data['sport'] == 1
        );
        $_SESSION['teenForm'][] = serialize($teen);

        return true;
    }

    public function storeChildFormData(array $data): bool
    {
        $child = new Child($data['surname'], $data['name'], (int) $data['age'], $data['toy']);
        $_SESSION['childForm'][] = serialize($child);

        return true;
    }
}