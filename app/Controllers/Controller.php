<?php

namespace app\Controllers;

class Controller {
    protected function render($view, $data = []) {
        extract($data);

        include "app/Views/$view.php";
    }
}
