
<?php
    $db = new SQLite3('hiking.sqlite3');
    $sql = "SELECT * FROM hiking_hike ORDER BY date DESC";
    $result = $db->query($sql);
?>


<!DOCTYPE html>
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
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- Header -->
            <div class="navbar-header">
                <a class="navbar-brand"> <i class="fas fa-hiking"></i>&nbsp; My Hiking Trips</a>
            </div>
    </nav>

    <div class="card">
     <div class="card-body">
       <table>
         <tr>
           <td>
               <a href="{% url 'hiking:hike-set-filter' 'all' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> ALL</a>
               <a href="{% url 'hiking:hike-set-filter' 'austria' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Austria</a>
               <a href="{% url 'hiking:hike-set-filter' 'canada' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Canada</a>
               <a href="{% url 'hiking:hike-set-filter' 'finland' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Finland</a>
               <a href="{% url 'hiking:hike-set-filter' 'france' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> France</a>
               <a href="{% url 'hiking:hike-set-filter' 'italy' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Italy</a>
               <a href="{% url 'hiking:hike-set-filter' 'new zealand' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> New Zealand</a>
               <a href="{% url 'hiking:hike-set-filter' 'norway' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Norway</a>
               <a href="{% url 'hiking:hike-set-filter' 'peru' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Peru</a>
               <a href="{% url 'hiking:hike-set-filter' 'spain' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Spain</a>
               <a href="{% url 'hiking:hike-set-filter' 'sweden' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Sweden</a>
               <a href="{% url 'hiking:hike-set-filter' 'turkey' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Turkey</a>
               <a href="{% url 'hiking:hike-set-filter' 'uk' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> UK</a>
               <a href="{% url 'hiking:hike-set-filter' 'usa' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> USA</a>
           </td>
         </tr>

       </table>
     </div>
    </div>

    <div class="hiking-container container-fluid">
        <div class="row">
            <?php
                while ($row = $result->fetchArray(SQLITE3_ASSOC)){
                   $imagePath = $row['hike_image_url'];
                   $imageId = $row['title'];

                    // Use Bootstrap card component to display each image
                    echo '
                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                            <div class="thumbnail">
                               <img class="img-rounded" src="' . $imagePath . '" class="card-img-top" alt="Image ' . $imageId . '">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">' . $row['title'] . ' ' . $row['year'] . ' - <small>' . $row['place'] . '</small></h5>
                            </div>
                        </div>
                    </div>';

                }
                unset($db)
            ?>
         </div>
    </div>
<p class="footer"> version 4 feb 2024</p>

</body>
</html>