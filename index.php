<?php

declare(strict_types=1);

session_start();

include_once 'controller.php';
include_once 'view.php';

$view = new View();
$controller = new Controller();

// Adult
if(isset($_GET['page']) && $_GET['page'] === 'adult_form') {
    $controller->showAdultForm();
}

elseif (isset($_GET['page']) && $_GET['page'] === 'adult_post') {
    $controller->submitAdultForm($_POST);
}

elseif (isset($_SESSION['adultForm']) && isset($_GET['page']) && $_GET['page'] === 'adult_list') {
        $adultList = [];
        for ($i = 0; $i < count($_SESSION['adultForm']); $i++) {
            $adultList[] = unserialize($_SESSION['adultForm'][$i]);
        }
        $view->printAdultList($adultList);
}

elseif (isset($_GET['page']) && $_GET['page'] === 'adult_list') {
    $view->showEmpty();
}

// Teenager
elseif (isset($_GET['page']) && $_GET['page'] === 'teen_form') {
    $controller->showTeenForm();
}

elseif (isset($_GET['page']) && $_GET['page'] === 'teen_post') {
    $controller->submitTeenForm($_POST);
}

elseif (isset($_SESSION['teenForm']) && isset($_GET['page']) && $_GET['page'] === 'teen_list') {
    $teenList = [];
    for ($i = 0; $i < count($_SESSION['teenForm']); $i++) {
        $teenList[] = unserialize($_SESSION['teenForm'][$i]);
    }
    $view->printTeenList($teenList);
}

elseif (isset($_GET['page']) && $_GET['page'] === 'teen_list') {
    $view->showEmpty();
}

// Child
elseif (isset($_GET['page']) && $_GET['page'] === 'child_form') {
    $controller->showChildForm();
}

elseif (isset($_GET['page']) && $_GET['page'] === 'child_post') {
    $controller->submitChildForm($_POST);
}

elseif (isset($_SESSION['childForm']) && isset($_GET['page']) && $_GET['page'] === 'child_list') {
    $childList = [];
    for ($i = 0; $i < count($_SESSION['childForm']); $i++) {
        $childList[] = unserialize($_SESSION['childForm'][$i]);
    }
    $view->printChildList($childList);
}

elseif (isset($_GET['page']) && $_GET['page'] === 'child_list') {
    $view->showEmpty();
}

// Home
else {
    $view->showHome();
}