<?php
include_once "../base.php";
dd($_POST);

foreach($_POST['name'] as $id=>$value){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $Poster->del($id);
    }else{
        $row=$Poster->find($id);
        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        $row['name']=$value;
        $row['sp']=$_POST['sp'][$id];
        $Poster->save($row);
    }
}

to("../backend.php?do=rr");
?>
