<?php

declare(strict_types=1);

session_start();

include_once 'adult.php';
include_once 'teen.php';
include_once 'child.php';
include_once 'view.php';

$view = new View();

if(isset($_GET['page']) && $_GET['page'] === 'adult_form') {
    $view->printAdultForm();
}

elseif(isset($_GET['page']) && $_GET['page'] === 'teen_form') {
    $view->printTeenForm();
}

elseif(isset($_GET['page']) && $_GET['page'] === 'child_form') {
    $view->printChildForm();
}

elseif (isset($_GET['page']) && $_GET['page'] === 'adult_post') {
    $adult = new Adult($_POST['surname'], $_POST['name'], (int) $_POST['age'], $_POST['vote'] == 1 ? true : false);
    $_SESSION['adultForm'][] = serialize($adult);
    $view->printAdultForm(true);
}

elseif (isset($_GET['page']) && $_GET['page'] === 'teen_post') {
    $teen = new Teen($_POST['surname'], $_POST['name'], (int) $_POST['age'], $_POST['sport'] == 1 ? true : false);
    $_SESSION['teenForm'][] = serialize($teen);
    $view->printTeenForm(true);
}

elseif (isset($_GET['page']) && $_GET['page'] === 'child_post') {
    $child = new Child($_POST['surname'], $_POST['name'], (int) $_POST['age'], $_POST['toy']);
    $_SESSION['childForm'][] = serialize($child);
    $view->printChildForm(true);
}

elseif (isset($_GET['page']) && $_GET['page'] === 'adult_list') {
    if(isset($_GET['page']) && $_GET['page'] === 'adult_form') {
        $adultList = [];
        for ($i = 0; $i < count($_SESSION['adultForm']); $i++) {
            $adultList[] = unserialize($_SESSION['adultForm'][$i]);
        }
        $view->printAdultList($adultList);
    } else {
        $view->printEmpty();
    }
}

elseif (isset($_GET['page']) && $_GET['page'] === 'teen_list') {
    if(isset($_GET['page']) && $_GET['page'] === 'teen_form') {
        $teenList = [];
        for ($i = 0; $i < count($_SESSION['teenForm']); $i++) {
            $teenList[] = unserialize($_SESSION['teenForm'][$i]);
        }
        $view->printTeenList($teenList);
    } else {
        $view->printEmpty();
    }
}

elseif (isset($_GET['page']) && $_GET['page'] === 'child_list') {
    if(isset($_GET['page']) && $_GET['page'] === 'child_form') {
        $childList = [];
        for ($i = 0; $i < count($_SESSION['childForm']); $i++) {
            $childList[] = unserialize($_SESSION['childForm'][$i]);
        }
        $view->printChildList($childList);
    } else {
        $view->printEmpty();
    }
}

else {
    $view->printMain();
}

exit;