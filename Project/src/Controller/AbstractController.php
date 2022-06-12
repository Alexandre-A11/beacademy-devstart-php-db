<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController {
    public function render(string $viewName, $data = null): void {
        include "../src/View/_partials/head.php";
        include "../src/View/{$viewName}.php";
        include "../src/View/_partials/footer.php";
    }

    public function renderMessage(string $message, string $goBack = "/"): void {
        include dirname(__DIR__) . "/View/_partials/head.php";
        include dirname(__DIR__) . "/View/_partials/message.php";
        include dirname(__DIR__) . "/View/_partials/footer.php";
    }

    public function renderErrorMessage(string $message) {
        return "<div class='mt-3 alert alert-danger'>
                    {$message}
                </div>";
    }

    public function getPage(): string {
        return "/" . explode("/", $_SERVER["REQUEST_URI"])[1];
    }
}
