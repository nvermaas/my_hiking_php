<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\Hike;
use MVC\Models\HikeDetails;

class HikeDetailsController extends Controller {

    public function show($hike_id) {
        $hike = new Hike();
        $my_hike = $hike->getHike($hike_id);

        //$year = $my_hike['year'];
        //echo "<script>alert('$year');</script>";

        $hikeDetails = new HikeDetails();
        $details = $hikeDetails->getHikeDetails($hike_id);

        $this->render('HikeDetails', ['hike' => $my_hike, 'details' => $details]);
    }

}