<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\Hike;

class HikeController extends Controller {
    public function index() {
        $users = [
            new Hike('John Doe', 'john@example.com'),
            new Hike('Jane Doe', 'jane@example.com')
        ];

        $this->render('hike/index', ['hikes' => $hikes]);
    }
}