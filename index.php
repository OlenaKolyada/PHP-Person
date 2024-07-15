<?php

declare(strict_types=1);

session_start();

include_once 'controller.php';
include_once 'view.php';

$view = new View();
$controller = new Controller();

if (empty($_GET['page'])) {
    $view->showHome();
}

switch ($_GET['page']) {
    case 'adult_form':
        $controller->showAdultForm();
        break;
    case 'adult_post':
        $controller->submitAdultForm($_POST);
        break;
    case 'adult_list':
        if (isset($_SESSION['adultForm'])) {
            $adultList = [];

            for ($i = 0; $i < count($_SESSION['adultForm']); $i++) {
                $adultList[] = unserialize($_SESSION['adultForm'][$i]);
            }

            $view->printAdultList($adultList);
        } else {
            $view->showEmpty();
        }
        break;
    case 'teen_form':
        $controller->showTeenForm();
        break;
    case 'teen_post':
        $controller->submitTeenForm($_POST);
        break;
    case 'teen_list':
        if (isset($_SESSION['teenForm'])) {
            $teenList = [];

            for ($i = 0; $i < count($_SESSION['teenForm']); $i++) {
                $teenList[] = unserialize($_SESSION['teenForm'][$i]);
            }

            $view->printTeenList($teenList);
        } else {
            $view->showEmpty();
        }
        break;
    case 'child_form':
        $controller->showChildForm();
        break;
    case 'child_post':
        $controller->submitChildForm($_POST);
        break;
    case 'child_list':
        if (isset($_SESSION['childForm'])) {
            $childList = [];

            for ($i = 0; $i < count($_SESSION['childForm']); $i++) {
                $childList[] = unserialize($_SESSION['childForm'][$i]);
            }

            $view->printChildList($childList);
        } else {
            $view->showEmpty();
        }
        break;
    default:
        $view->showHome();
}
