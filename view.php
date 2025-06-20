<?php

declare(strict_types=1);

class View {

    // Home
    public function showHome(): void {
        include_once 'templates/home.html';
    }

    // Adult
    public function showAdultForm(bool $adultFormSent = false): void {
        include_once 'templates/adult_form.html';
    }

    public function printAdultList(array $adultList): void {
        include_once 'templates/adult_list.html';
    }

    // Teenager
    public function showTeenForm(bool $teenFormSent = false): void {
        include_once 'templates/teen_form.html';
    }

    public function printTeenList(array $teenList): void {
        include_once 'templates/teen_list.html';
    }

    // Child
    public function showChildForm(bool $childFormSent = false): void {
        include_once 'templates/child_form.html';
    }

    public function printChildList(array $childList): void {
            include_once 'templates/child_list.html';
    }

    // Empty
    public function showEmpty(): void {
        include_once 'templates/empty.html';
    }
}