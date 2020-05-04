<?php
    session_start();
    unset($_SESSION['num']);
    header('location:session.php');