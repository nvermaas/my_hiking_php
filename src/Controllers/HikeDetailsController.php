<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\HikeDetails;

class HikeDetailsController extends Controller {

    public function show() {
        $hike_id=70;
        $hikeDetails = new HikeDetails();
        $data = $hikeDetails->getHikeDetails($hike_id);

        $this->render('HikeDetails', ['data' => $data]);
    }

}