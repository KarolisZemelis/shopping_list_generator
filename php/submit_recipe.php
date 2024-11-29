<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        print_r($_POST);

}
?>