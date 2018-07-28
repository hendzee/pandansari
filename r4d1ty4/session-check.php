<?php
session_destroy();
session_unset();
if (empty($_SESSION['user'])){
    header('location: login.html');
}