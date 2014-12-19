<?php
require_once("../includes/functions.php");
?>

<html lang="en">
     <?php
  $par="Placement";
  echo head_body_create($par); ?>


  <body>

   <?php
	$par="Placement";
	echo navigation_bar1($par);
	?>

    <style type="text/css">
    .jumbotron p{margin-bottom:400px;font-size:21px;font-weight:200}
    .jumbotron{padding:30px 15px;margin-bottom:30px}
    .jumbotron {
      height: 400px !important;
    }
    .jumbotron{
    background-image: url('../Images/ms.jpg'); 
    }

    </style>


    <div class="jumbotron">
  
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>View DB</h2>
          <a class="btn btn-default" href="../view_db/view_table.php" role="button">View Table&raquo;</a>
        </div>
        <div class="col-md-4">
          <h2>Edit DB</h2>
          <a class="btn btn-default" href="../edit_db/create_table.php" role="button">Create Table &raquo;</a>
       </div>
        <div class="col-md-4">
          <h2>Graphs</h2>
          <a class="btn btn-default" href="../graphs/show_graphs.php" role="button">Company,Year &raquo;</a>
        </div>
      </div>

      <hr>

      <footer>
        
      </footer>
    </div>


   <script src="../stylesheets/footer_1.js"></script>
    <script src="../stylesheets/footer_2.js"></script>
    <script src="../stylesheets/footer_3.js"></script>
  </body>
</html>
