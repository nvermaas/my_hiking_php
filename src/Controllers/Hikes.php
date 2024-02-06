<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\Hike;

class Hikes extends Controller {

    public function index() {
        $country="ALL";
        $hike = new Hike();
        $data = $hike->getHikesByCountry($country);

        $this->render('hike/index', ['data' => $data]);
    }

    public function filter() {
        $country="Sweden";
        $hike = new Hike();
        $data = $hike->getHikesByCountry($country);

        $this->render('hike/filtered', ['data' => $data]);
    }

    public function showHikesPerCountry($country) {
        $hike = new Hike();
        $data = $hike->getHikesByCountry($country);

        $this->render('hike/index', ['data' => $data]);
    }

    public function filterAction() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['filter'])) {

            // Handle form submission

            $country = $_POST['country'];

            $hike = new Hike();
            $data = $hike->getHikesByCountry($country);

            // Render the view with filtered data
            $this->render('hike/filter', ['data' => $data]);
        }
    }

}