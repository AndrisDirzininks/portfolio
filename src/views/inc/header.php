<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Andris Dirzininks portfolio</title>
</head>
<body>

<div class="position-fixed ml-3 custom-icon-wrap">
    <a role="button">
        <img class="custom-icon ml-3 pt-2 mt-1" onclick="manageNav()" src="public/media/menu.jpg" >
    </a>
</div>

<div class="page-wrapper">
    <div class="container-fluid header-container" id="me">
        <div class="row">
            <div class="col-12 pr-0 pl-0 position-relative d-lg-none">
                <div class="my-image"></div>
            </div>
        </div>
    </div>
    <?php
        require_once("src/views/pages/main-content.php");
    ?>
    <div class="container-fluid header-container bg-white">
        <div class="row">
            <div class=" col-12 col-lg-4 pr-0 pl-0 text-uppercase text-center border-bottom border-dark d-none d-lg-block">
                <p class="my-2 py-1 "><small>about</small></p>
            </div>
            <div class="col-12 col-lg-4 pr-0 pl-0 text-uppercase text-center border-bottom border-dark d-none d-lg-block
            align-self-center">
                <p class="my-2 py-1 "><small>work</small></p>
            </div>
            <div class="col-12 col-lg-4 pr-0 pl-0 position-absolute d-none d-lg-block">
                <div class="my-image"></div>
            </div>
        </div>
    </div>
