<?php include 'base.php'; ?>

    <?php include 'filter_buttons.php'; ?>

    <div class="hiking-container container-fluid">
        <div class="row">

            <?php
                while ($row = $data->fetchArray(SQLITE3_ASSOC)) {
                   $imagePath = $row['hike_image_url'];
                   $imageId = $row['title'];

                echo '
                    <div class="col-sm-6 col-lg-4">
                        <div class="thumbnail">
                           <img class="img-rounded" src="' . $imagePath . '" class="card-img-top" alt="Image ' . $imageId . '">
                        </div>

                        <div class="caption">
                            <h4 class="card-title">' . $row['title'] . ' ' . $row['year'] . ' - <small>' . $row['place'] . '</small></h4>

                            <td>
                                <form action="hike/' . $row['id'] . '" method="post">
                                  <input type="hidden" name="id" value="' . $row['id'] . '">
                                  <button class="btn btn-primary btn-sm" type="submit" name="details"><i class="fas fa-list"></i> Hike Details</button>
                                </form>

                              &nbsp;&nbsp;
                            </td>
                        </div>
                    </div>
                ';
               }
            ?>
         </div>
    </div>


<?php include 'footer.php'; ?>