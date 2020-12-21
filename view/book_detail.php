<?php
require_once '../controllers/book_controller.php';
$key = $_GET["id"];

$book = getBook($name);



    echo "  <table>";





  echo "<tr>";

    

        echo "</tr>";

      echo "<tr>";
  echo '<td > <strong>'.$book["name"].' </strong></td>';

    echo "</tr>";

    echo "<tr>";
  echo '<td >  Author : '.$book["author"].'</td>';

    echo "</tr>";
    echo "<tr>";
  echo '<td > Edition : '.$book["edition"].'</td>';

  echo "</tr>";

  echo "  </table>";

  echo '<a href="dashboard.php">Dashboard</a>';




 ?>

