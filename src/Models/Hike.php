<?php

namespace MVC\Models;

class Hike {
    public $title;
    public $place;

    public function __construct($title, $place) {
        $this->title = $title;
        $this->place = $place;
    }
}