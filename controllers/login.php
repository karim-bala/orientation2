<?php 
if(isset($_POST['btn-submit'])){
    dd($_POST['password']);
}
view("login.view.php",[]);