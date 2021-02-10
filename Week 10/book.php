<?php
include 'tableGenerator.php';
class Book{
  public $title, $author, $isbn, $type = 'paperback';

}

function displayBook($book){
  echo "Title of the book : $book->title.
  <br>Author of the book : $book->author.
  <br>ISBN of the book : $book->isbn.
  <br>Type of the book : $book->type.
  <br>Chapter of the Book: <br>";
}

$book1 = new Book();
$book1->title = "No Longer Human";
$book1->author = "Osamu Dazai";
$book1->isb = "1232112";
// $book1->chapter[0] = "The First Notebook";
// $book1->chapter[1] = "The Second Notebook";
// $book1->chapter[2] = "The Third Notebook";
// displayBook($book1);
// foreach ($book1->chapter as $chapter) {
//   echo "$chapter<br>";
// }

$tableGenerator = new tableGenerator;
$tableGenerator->setHeading(['Title', 'Author', 'ISBN']);
$tableGenerator->addRow($book1);
echo $tableGenerator->getHTML();
 ?>
