<!DOCTYPE html>
<?php
use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();

$debugbar["messages"]->addMessage("hello world!");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyle.css"/>
    <link rel="icon" href="favicon.png">

    <title>Hiking Nico</title>
    <?php echo $debugbarRenderer->renderHead() ?>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- Header -->
            <div class="navbar-header">
                <a class="navbar-brand"> <i class="fas fa-hiking"></i>&nbsp; My Hiking Trips</a>
            </div>
    </nav>

    <?php include 'filter_buttons.php'; ?>

    <div class="hiking-container container-fluid">
        <div class="row">

            <?php
                while ($row = $data->fetchArray(SQLITE3_ASSOC)){
                   $imagePath = $row['hike_image_url'];
                   $imageId = $row['title'];

                    // Use Bootstrap card component to display each image
                    echo '
                    <div class="col-sm-6 col-lg-4">

                        <div class="thumbnail">
                           <img class="img-rounded" src="' . $imagePath . '" class="card-img-top" alt="Image ' . $imageId . '">
                        </div>
                        <div class="caption">
                            <h4 class="card-title">' . $row['title'] . ' ' . $row['year'] . ' - <small>' . $row['place'] . '</small></h4>

                                <td>
                                    <a href="" class="btn btn-primary btn-sm" role="button"><i class="fas fa-list"></i> Hike Details</a>
                                    &nbsp;&nbsp;
                                </td>

                                <td>
                                    if $hike->link_to_gallery {
                                       <a href=$hike->link_to_gallery class="btn btn-success btn-sm" role="button" target="_blank"><i class="fas fa-images"></i> Gallery</a>&nbsp;
                                    }
                                </td>
                                <td>
                                    if hike.link_to_movie {
                                       <a href="{{ hike.link_to_movie }}" class="btn btn-success btn-sm" role="button" target="_blank"><i class="fas fa-film"></i> Movie</a>&nbsp;
                                    }
                                </td>
                                <td>
                                    if hike.link_to_map {
                                       <a href="{{ hike.link_to_map }}" class="btn btn-success btn-sm" role="button" target="_blank"><i class="fas fa-map"></i> Map</a>&nbsp;
                                    }
                                </td>
                                <td>
                                    {% if hike.link_to_report %}
                                       <a href="{{ hike.link_to_report }}" class="btn btn-success btn-sm" role="button" target="_blank"><i class="fas fa-file-alt"></i> Report</a>&nbsp;
                                    {% endif %}
                                </td>
                                <td>
                                    {% if hike.link_to_gps %}
                                       <a href="{{ hike.link_to_gps }}" class="btn btn-success btn-sm" role="button" target="_blank"><i class="fas fa-map-marked-alt"></i> GPS</a>&nbsp;
                                    {% endif %}
                                </td>
                        </div>

                    </div>';

                }
            ?>
         </div>
    </div>
<p class="footer"> version 7 feb 2024</p>

<?php echo $debugbarRenderer->render() ?>
</body>
</html>