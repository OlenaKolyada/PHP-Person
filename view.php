<?php

declare(strict_types=1);

class View {

    public function printMain(): void {
        include_once 'templates/main.html';
    }

    public function printEmpty(): void {
        include_once 'templates/empty.html';
    }

    public function printAdultForm(bool $adultFormSent = false): void {
        include_once 'templates/adult_form.html';
    }

    public function printAdultList(array $adultList): void {
        include_once 'templates/adult_list.html';
    }

    public function printTeenForm(bool $teenFormSent = false): void {
        include_once 'templates/teen_form.html';
    }

    public function printTeenList(array $teenList): void {
        include_once 'templates/teen_list.html';
    }

    public function printChildForm(bool $childFormSent = false): void {
        include_once 'templates/child_form.html';
    }

    public function printChildList(array $childList): void {
            include_once 'templates/child_list.html';
    }
}