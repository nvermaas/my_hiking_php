
<?php include 'base.php'; ?>
<?php echo '

<div class="container-fluid details-container">

    <div class="row">

        <!-- Top Hike Info -->
        <div class="col-sm-1 col-md-1"></div>
        <div class="col-sm-10 col-md-10 col-lg-10">
            <div class="panel panel-default">
               <div class="panel-heading">' . $hike['title'] . ' ' . $hike['year'] . '</div>
                  <div class="panel-body">
                     <div class="col-sm-4 col-md-4 col-lg-4">
                        <p class="title">' . $hike['place'] . '</p>
                        <a href="' . $hike['hike_image_url'] . '">
                           <img src="' . $hike['hike_image_url'] . '" style="width:100%" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">

                    <ul>
                        <li><p class="prose"> ' . $hike['date'] . ' - ' . $hike['duration'] . '</p></li>
                        <p class="prose">' . $hike['description'] . '</p>
                    </ul>
                    </div>
                    <br>

                </div>
            </div>
        </div>
        <div class="col-sm-1 col-md-1"></div>
    </div>
'?>

    <div class="row">

        <!-- Bottom Detail Info -->
        <div class="col-sm-1 col-md-1"></div>
        <div class="col-sm-10 col-md-10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table" >
                        <tbody>

                        <?php
                            while ($tripdetail = $details->fetchArray(SQLITE3_ASSOC)) {

                                echo '<tr>';

                                if ($tripdetail['kind'] == 'image') {
                                    echo '
                                        <td class = "active">
                                             <h4>' . $tripdetail['title'] . '</h4>
                                             <p class ="prose"> ' . $tripdetail['description'] .  '</p>
                                             <a href="' . $tripdetail['details_url'] . '" target="_blank">
                                                 <img src="' . $tripdetail['details_url'] . '" style="width:100%" class="img-responsive">
                                             </a>

                                         </td>
                                    ';
                                }

                                if ($tripdetail['kind'] == 'movie') {
                                    echo '
                                        <td class="warning">
                                              <a href="' . $tripdetail['details_url'] . '" target="_blank"><h4><span class="glyphicon glyphicon-film"></span> ' . $tripdetail['title'] . '</h4></a>
                                            <p class ="prose"> ' . $tripdetail['description'] .  '</p>
                                        </td>
                                    ';
                                }

                                if ($tripdetail['kind'] == 'link') {
                                    echo '
                                        <td class = "warning">
                                            <a href="' . $tripdetail['details_url'] . '" target="_blank"><h4><span class="glyphicon glyphicon-link"></span> ' . $tripdetail['title'] . '</h4></a>
                                            <p class ="prose"> ' . $tripdetail['description'] . '</p>
                                        </td>
                                    ';
                                }

                                if ($tripdetail['kind'] == 'gallery') {
                                    echo '
                                        <td class = "warning">
                                            <a href="' . $tripdetail['details_url'] . '" target="_blank"><h4><i class="fas fa-images"></i> ' . $tripdetail['title'] . '</h4></a>
                                            <p class ="prose"> ' . $tripdetail['description'] . '</p>
                                        </td>
                                    ';
                                }

                                if ($tripdetail['kind'] == 'map') {
                                    echo '
                                        <td class = "warning">
                                            <a href="' . $tripdetail['details_url'] . '" target="_blank"><h4><i class="fas fa-map"></i> ' . $tripdetail['title'] . '</h4></a>
                                            <p class ="prose"> ' . $tripdetail['description'] . '</p>
                                        </td>
                                    ';
                                }

                                if ($tripdetail['kind'] == 'report') {
                                    echo '
                                        <td class = "warning">
                                            <a href="' . $tripdetail['details_url'] . '" target="_blank"><h4><i class="fas fa-file-alt"></i> ' . $tripdetail['title'] . '</h4></a>
                                            <p class ="prose"> ' . $tripdetail['description'] . '</p>
                                        </td>
                                    ';
                                }

                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <div class="col-sm-1 col-md-1"></div>
    </div>

</div>


<?php include 'footer.php'; ?>