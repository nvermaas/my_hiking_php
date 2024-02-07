<h1>Hike Details</h1>

    <?php
        echo '<ul>';
        while ($row = $data->fetchArray(SQLITE3_ASSOC)) {
           $details_url = $row['details_url'];
           $description = $row['description'];

           echo '<li><tr><td>' . $details_url . '</td><td>' . $description . '</td></tr></li>';
        }
        echo '</ul>';
    ?>