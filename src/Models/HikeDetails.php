<?php

namespace MVC\Models;

use SQLite3;

class HikeDetails {
    private $db;

    public function __construct() {
        $this->db = new SQLite3('hiking.sqlite3');
    }

    public function getHikeDetails($hike_id) {
        $query = "SELECT * FROM hiking_tripdetail WHERE hike_id = '" . $hike_id . "' ORDER BY 'order' DESC";
        $result = $this->db->query($query);
        return $result;
    }

    public function __destruct() {
        $this->db->close();
    }
}