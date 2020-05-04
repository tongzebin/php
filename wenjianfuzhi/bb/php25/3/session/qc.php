<?php
    session_start();
    unset($_SESSION['q']);
    header('location:js.php');