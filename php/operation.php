<?php
require_once("db.php");
require_once("compenent.php");
$con = Createdb();

//CREATE BUTTON 
if(isset($_POST["create"])){
    
    createData();
}





function createData(){
    //$book_name = $_POST['book_name'];// HTML inputundaki name kısmından alınıyor.
    $bookname = textboxValue("book_name");
    $bookpublisher = textboxValue("book_publisher");
    $bookprice = textboxValue("book_price");
    if($bookname && $bookpublisher && $bookprice){
        $sql = "INSERT INTO books(book_name,book_publisher,book_price)
        VALUES('$bookname','$bookpublisher', '$bookprice')
        ";
        if(mysqli_query($GLOBALS['con'],$sql)){
            echo "Record Success";
        }else{
            echo "Error";
        }
    }else{
        //TODO
    }
};


function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


//messages

?>

