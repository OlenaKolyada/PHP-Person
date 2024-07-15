<?php

declare(strict_types=1);

include_once 'model.php';

class Controller {
    private object $view;
    private object $model;

    public function __construct() {
        $this->view = new View;
        $this->model = new Model;
    }

    // Adult
    public function showAdultForm(): void {
        $this->view->showAdultForm(); // почему тут нельзя сразу напрямую к view обратиться?
    }

    public function submitAdultForm(array $data): void {
        $responce = $this->model->storeAdultFormData($data);
        if($responce) {
            $this->view->showAdultForm($responce);
        }
    }

    // Teenager
    public function showTeenForm(): void {
        $this->view->showTeenForm();
    }

    public function submitTeenForm(array $data): void {
        $responce = $this->model->storeTeenFormData($data);
        if($responce) {
            $this->view->showTeenForm($responce);
        }
    }

    // Child
    public function showChildForm(): void {
        $this->view->showChildForm();
    }

    public function submitChildForm(array $data): void {
        $responce = $this->model->storeChildFormData($data);
        if($responce) {
            $this->view->showChildForm($responce);
        }
    }
}