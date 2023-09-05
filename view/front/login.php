<?php

if(isset($_SESSION['login'])){
    to("backend.php");
};
if(!empty($_POST)){
    if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
        $_SESSION['login']=$_POST['acc'];
        to("backend.php");
    };
}
;


?>
<div class="ct">
    <form action="?do=login" method="post">
    <table>
    <tr>
        <td>帳號:</td>
        <td><input type="text" name='acc'></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="password" name='pw'></td>
    </tr>
    <tr class='ct'>
        <td><input type="submit" value="確定"><input type="reset" value="清除"></td>
    </tr>
    </table>
    </form>
</div>