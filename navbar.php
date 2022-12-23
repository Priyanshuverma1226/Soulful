<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOULFUL | Order Food </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand text-warning fs-4" href="#">Soulful</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                  

                </ul>

                <?php
                if (!isset($_SESSION['user'])) {


                ?>
                    <button class="btn btn-danger" type="button" class="me-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
                    <button class=" ms-2 btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#Signup">Sign Up</button>
                <?php
                } else {

                ?>
                    <div class="dropdown">
                        <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class=" ms- 2 bi bi-person-circle"></i>
                            <?php
                            echo $_SESSION['user'];
                            ?>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="functions/login/logout.php">Logout</a></li>

                        </ul>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </nav>