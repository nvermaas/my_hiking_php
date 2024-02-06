<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\Hike;

class Hikes extends Controller {

    public function index() {
        $country="Sweden";
        $Hike = new Hike();
        $data = $Hike->getHikesByCountry($country);

        $this->render('hike/index', ['data' => $data]);
    }

    public function showHikesPerCountry($country) {
        $Hike = new Hike();
        $data = $Hike->getHikesByCountry($country);

        $this->render('hike/index', ['data' => $data]);
    }
}