<?php
	require_once 'book_controller.php';
	$name = $_GET["name"];
	$books = SearchBook($name);


  echo "<tr>";
echo '<td>ID</td>';
echo '<td>Name</td>';
echo '<td>Author</td>';
echo '<td>Edition</td>';
  echo "</tr>";

	foreach($books as $book){
		echo "<tr>";
  echo '<td><a href="../views/book_detail.php?id='.$book["id"].'">'.$book["id"].'</a></td>';

    echo '<td>'.$book["name"].'</td>';
    echo '<td>'.$book["author"].'</td>';
    echo '<td>'.$book["edition"].'</td>';
		echo "</tr>";
	}
?>
