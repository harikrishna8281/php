<?php
    require_once(dirname(__FILE__) . '/../defines.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title><?= SITE_NAME ?> - <?= PAGE_NAME ?></title>
    <link rel="stylesheet" href="style/main.css" charset="utf-8"/>
</head>
<body>
    <div id="wrapper">
        <header>
            <h1><?= PAGE_NAME ?></h1>
            <?php require('menu.php'); ?>
        </header>