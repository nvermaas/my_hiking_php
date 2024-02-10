<?php

namespace MVC\Models;

use SQLite3;

class Hike {
    private $db;

    public function __construct() {
        $this->db = new SQLite3('hiking.sqlite3');
    }

    public function getHikesByCountry($country) {
        if ($country == "ALL") {
            $query = "SELECT * FROM hiking_hike ORDER BY date DESC";
        } else {
            $query = "SELECT * FROM hiking_hike WHERE country = '" . $country . "' ORDER BY date DESC";
        }
        $result = $this->db->query($query);
        return $result;
    }

    public function getHike($hike_id) {
        $query = "SELECT * FROM hiking_hike WHERE id = " . $hike_id;
        $result = $this->db->query($query);

        $my_hike = NULL;
        while ($hike = $result->fetchArray(SQLITE3_ASSOC)) {
            $my_hike = $hike;
        }
        return $my_hike;
    }

    public function __destruct() {
        $this->db->close();
    }
}