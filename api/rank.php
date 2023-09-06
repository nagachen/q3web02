<?php
include "../base.php";
$id=explode("-",$_POST['id']);
$row1=$Poster->find($id[0]);
$row2=$Poster->find($id[1]);
$tmp=$row1['rank'];
$row1['rank']=$row2['rank'];
$row2['rank']=$tmp;

$Poster->save($row1);
$Poster->save($row2);




