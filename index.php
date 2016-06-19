<?php
class book {
    public $bookID;
    public $meta = array('title'=>'','author'=>'','genre'=>'','pages'=>'');
    public $location;
    
    public function addBookRecord($bookID,$meta,$location) {
        $this->bookID=$bookID;
        $this->meta=$meta;
        $this->location=$location;
    }
    
    public function listBookRecords() {
       echo "<hr>" ;
       echo "Book ID: ".$this->bookID."<br>";
       echo "Title: ".$this->meta['title']."<br>";
       echo "Author: ".$this->meta['author']."<br>";
       echo "Genre: ".$this->meta['genre']."<br>";
       echo "Location: ".$this->location."<br>";
    }
    
    public function borrowBook($bookID, $customerID) {
        
    }
}

class customer {
    public $customerID;
    public $firstName;
    public $lastName;
    public $onLoan;
    
    public function addCustomerRecord() {

    }

    public function listCustomerRecords() {
        
    }
    

}

$book1 = new book;
$meta = array('title'=>'A Hero in France','author'=>'Alan Furst','genre'=>'Espionage','pages'=>'348');
$book1->addBookRecord('0001', $meta, "Shelf A");

$book2 = new book;
$meta = array('title'=>'The Reality Dysfunction','author'=>'Peter F Hamilton','genre'=>'Sci-Fi','pages'=>'520');
$book2->addBookRecord('0002', $meta, "Shelf B");

$book1->listBookRecords();
$book2->listBookRecords();
?>