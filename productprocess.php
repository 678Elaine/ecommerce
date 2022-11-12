<?php
//This is the processing page

//making action aware of controller
include("../controllers/product_controller.php");


//collecting form data
if(isset($_POST["updateproduct"])){
    
 $id=$_POST['product_id'];
  echo $id;


  
// $category =$_POST['category'];
// $brand = $_POST['brand'];
// $title = $_POST['title'];
// $price = $_POST['price'];
// here;
// $description = $_POST['description'];
// $keyword = $_POST['keyword'];

 
// $file = $_FILES["image"];
// $filename = $_FILES['image']['name'];
// $filetmpname = $_FILES['image']['tmp_name'];
// $filesize = $_FILES['image']['size'];
// $fileError = $_FILES['image']['error'];
// $filetype = $_FILES['image']['type'];

// $fileext = explode(".", $filename);
// $filerealext = strtolower(end($fileext));

// $allowed = array("jpg", "jpeg", "png", "pdf");

// if(in_array($filerealext, $allowed)){
//     if($fileError === 0){
//         if($filesize < 5000000){
//             $filenamenew = uniqid('',true).".".$filerealext;

//             $fileDestination = '../Images/product/'.$filenamenew;

//             $move= move_uploaded_file($filetmpname,$fileDestination);
//         }else{
//             echo "Your file is too big";
//         }
//     }else{
//         echo "You cannot uplaod this file type";
//     }
// }else{
//     echo "You cannot upload this type of file";

// }
 

// $results = update_product_controller( $id, $category, $brand, $title, $price, $description, $keyword,);
//     if($results == true){header("Location: ../view/admin.php");
// }
 }

?>