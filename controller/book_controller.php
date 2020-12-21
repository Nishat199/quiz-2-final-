<?php
	require_once '../models/db_connect.php';
function SearchBook($name){
  $query = "SELECT * FROM books WHERE name LIKE '%$name%'";
  $books = getArray($query);
  //if(count($categories) < 2)
  return $books;
}
function getBook($id){
  $query="SELECT * FROM books WHERE id=$id";
  $books = getArray($query);
  return $books[0];

}
 ?>