<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tutor</title>

        <?php
        include('styles.php');
        ?>

    </head>
    <body>
        

        <header class="main_header" id="main_header">
            <nav class="container" id="main_nav">
                <div class="main_nav">

                    <div class="main_nav-logo">
                        <a href="#" class="fw-bold">LOGO</a>
                    </div>
                    <div class="main_nav-links d-none d-lg-flex">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="courses.php">Courses</a></li>
                            <li><a href="tutors.php">Tutors</a></li>
                            <div class="main_nav-hr"></div>
                            <li><a href="register.php?type=tutee">Be a Tutee</a></li>
                            <li><a href="register.php?type=tutor">Be a Tutor</a></li>
                            <li><a class="c-btn c-btn-sm c-btn-sm-primary t-light" href="#loginModal" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                        </ul>
                    </div>
                    <div class="main_nav-toggler d-flex d-lg-none">
                        <a href="#"><i class="fa-solid fa-bars"></i></a>
                    </div>
                    <div class="main_nav-mobile">
                        <a href="#" class="close-btn"><i class="fa-solid fa-xmark"></i></a>
                        <ul class="d-block">
                        <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="courses.php">Courses</a></li>
                            <li><a href="tutors.php">Tutors</a></li>
                            <li><a href="register.php?type=tutee">Be a Tutee</a></li>
                            <li><a href="register.php?type=tutor">Be a Tutor</a></li>
                            <li><a class="c-btn c-btn-sm c-btn-sm-primary t-light" href="#loginModal" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>


