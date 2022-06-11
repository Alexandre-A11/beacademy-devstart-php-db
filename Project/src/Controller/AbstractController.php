<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController {
    public function render(string $viewName, $data = null): void {
        include "../src/View/_partials/head.php";
        include "../src/View/{$viewName}.php";
        include "../src/View/_partials/footer.php";
        // include dirname(__DIR__) . "/View/_partials/head.php";
        // include dirname(__DIR__) . "/View/{$viewName}.php";
        // include dirname(__DIR__) . "/View/_partials/footer.php";
    }
}
