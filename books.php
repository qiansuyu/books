<?php
	 
	 class Books {

           private $books = array(
			array('Title' => 'JavaScript Step By Step 3e',
					"Author" => 'Steve Suehring', 'ISBN' => "5150"),
			array('Title' => "Trees", "Author" => "Unknown",
					"ISBN" => "0931"),
			array("Title" => "Php", "Author" => "Wiley",
					"ISBN" => "04708")
		 );
         function getISBN($title) {

                foreach ($this->books as $key =>$val){
                    if ($val['Title'] == $title){
                        return $val['ISBN'];
                    }


                    }
                     return'not found ';
                }




		 
		 function getAuthor($title)
         {   foreach ($this->books as $key =>$val){
             if ($val['Title'] == $title){

                 return $val['Author'];
             }


             }return'not found ';

         }
	 }


?>