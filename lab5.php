<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab No. 5</title>
</head>
<body>
<div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Clark College Aboretum</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item disabled">
                        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://clark.edu">Clark College</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid mt-3">
        <div class="jumbotron p-3">
            <p class="lead font-weight-bold">Welcome to the Clark College Arboretum! From your desktop or mobile
                device, you can search through the trees
                growing on campus.
                <p>The Clark College Arboretum exists because of the vision and dedication of faculty and staff members
                    of Clark College who recognized the value of connecting education to the natural beauty of the campus landscape at 1933 Fort Vancouver Way. The Arboretum owes much of its abundance to the work and dedication of former Biology Professor Anna Pechanec. It was under her direction and shovel that many of the tree species on campus were planted in the 1950s through the 1970s. The Arboretum now boasts over 120 distinct
                    species, including a number of cultivated varieties.</p>
                <p>The Clark College Facilities Services Grounds Maintenance Department maintains our Arboretum.
                    Oversight of campus tree management is performed by the Campus Tree Advisory Committee according to
                    guidelines established by the Arbor Day Foundation's Tree Campus USA Program, of which Clark College is a proud awardee. The committee serves to provide guidance on issues such as: campus tree health, opportunities to plant additional species and varieties, preserving existing trees in the face of growing needs
                    for building expansion, as well as planning campus tree-related projects and celebrations. Our goal is
                    to preserve and expand the Clark College Arboretum for the benefit of all who find themselves on the
                    campus today and for many years to come.</p>
        </div>
    </div>

    <div class="container-fluid mt-3">

        <?php                 
            if (isset($_GET['aralia'])) {
                if ($_GET['aralia'] == 'yes') {
                    include 'includes/aralia.html';
                }
            }
                        
            if (isset($_GET['arborvitae'])) {
                if ($_GET['arborvitae'] == 'yes') {
                    include 'includes/arborvitae.html';
                }
            }
                        
            if (isset($_GET['ash'])) {
                if ($_GET['ash'] == 'yes') {
                    include 'includes/ash.html';
                }
            }

            if (!isset($_GET['aralia']) && !isset($_GET['arborvitae']) && !isset($_GET['ash'])) {
                include 'includes/aralia.html';
                include 'includes/arborvitae.html';
                include 'includes/ash.html';
            }
        ?>
        
</div>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>