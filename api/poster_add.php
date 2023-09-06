<?php
include "../base.php";

if(isset($_FILES['img']['tmp_name'])){
    $row['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
}
$row['name']=$_POST['name'];
$Poster->save($row);
to("../backend.php?do=rr");

?>