<?php

declare(strict_types=1);

include_once 'model.php';

class Controller
{
    private object $view;
    private object $model;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
    }

    // Adult
    public function showAdultForm(): void
    {
        $this->view->showAdultForm(); // почему тут нельзя сразу напрямую к view обратиться?
    }

    public function submitAdultForm(array $data): void
    {
        $response = $this->model->storeAdultFormData($data);

        if($response) {
            $this->view->showAdultForm($response);
        }
    }

    // Teenager
    public function showTeenForm(): void
    {
        $this->view->showTeenForm();
    }

    public function submitTeenForm(array $data): void
    {
        $response = $this->model->storeTeenFormData($data);

        if($response) {
            $this->view->showTeenForm($response);
        }
    }

    // Child
    public function showChildForm(): void
    {
        $this->view->showChildForm();
    }

    public function submitChildForm(array $data): void
    {
        $response = $this->model->storeChildFormData($data);

        if($response) {
            $this->view->showChildForm($response);
        }
    }
}