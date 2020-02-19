<?php 
require_once ("books.php");
$book = new Books();


    if ((isset($_POST['answer'])) && (($_POST['answer']) ==  'Author')) {


        print $book->getAuthor(($_POST['title']));
       exit();
    }
if ((isset($_POST['answer'])) && (($_POST['answer']) ==  'ISBN')) {


        print $book->getISBN(($_POST['title']));

        exit();

    }

else{
    print "please fill the form ";
}
?>