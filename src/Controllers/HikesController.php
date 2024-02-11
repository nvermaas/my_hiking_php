<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\Hike;

class HikesController extends Controller {

    public function index() {
        $country="ALL";
        $hike = new Hike();
        $data = $hike->getHikesByCountry($country);
        //echo "<script>alert('$country');</script>";
        $this->render('Hikes', ['data' => $data]);
    }

    public function country($country) {
        $hike = new Hike();
        $data = $hike->getHikesByCountry($country);
        //echo "<script>alert('$country');</script>";
        $this->render('Hikes', ['data' => $data]);
    }

    public function filterAction() {
        echo "<script>alert('filterAction');</script>";
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