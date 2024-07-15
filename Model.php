<?php

declare(strict_types=1);

include_once 'adult.php';
include_once 'teen.php';
include_once 'child.php';

class Model {

    public function storeAdultFormData(array $data): bool {
        $adult = new Adult($data['surname'], $data['name'], (int) $data['age'], $data['vote'] == 1 ? true : false);
        $_SESSION['adultForm'][] = serialize($adult);
        return true;
    }

    public function storeTeenFormData(array $data): bool {
        $teen = new Teen($data['surname'], $data['name'], (int) $data['age'], $data['sport'] == 1 ? true : false);
        $_SESSION['teenForm'][] = serialize($teen);
        return true;
    }

    public function storeChildFormData(array $data): bool {
        $child = new Child($data['surname'], $data['name'], (int) $data['age'], $data['toy']);
        $_SESSION['childForm'][] = serialize($child);
        return true;
    }
}