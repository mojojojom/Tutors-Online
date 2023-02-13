<?php
    include('connection/connect.php');
    error_reporting(0);
    session_start();

    include('header.php');
?>


    <section class="c_course-banner-wrap sec-pad">
        <div class="container">

            <div class="c_course-sub-wrap">
                <div class="row">

                    <!-- MAIN CONTENT -->
                    <div class="col-9 c_course-left-wrap">
                        <div class="c_course-left-nav-wrap">
                            <h5 class="fw-bold">AVAILABLE COURSES</h5>
                            <nav class="card p-2 mb-3">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="c_course-left-nav-search-wrap">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a course you want">
                                            <div class="c_course-left-nav-search-btn">
                                                <a href="#" class="d-flex align-items-center gap-2 justify-content-center">SEARCH<i class="fa-solid fa-magnifying-glass"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Filter</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    </div>
                                </div>
                            </nav>
                        </div>

                        <div class="c_course-left-content-wrap">
                            <span class="alert alert-danger d-flex align-items-center justify-content-center fw-bold">NO COURSES AVAILABLE</span>
                        </div>

                    </div>

                    <!-- SIDEBAR -->
                    <div class="col-3 c_course-right-wrap">

                        <div class="c_course-right-inner-wrap">
                            <h5 class="fw-bold">NEW TUTORS</h5>

                            <div class="card mb-2">
                                <a href="#" class="p-2 py-4">
                                    <div class="c_course-right-main-wrap text-center">
                                        <h4 class="mb-0">Hello</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="card mb-2">
                                <a href="#" class="p-2 py-4">
                                    <div class="c_course-right-main-wrap text-center">
                                        <h4 class="mb-0">Hello</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="card mb-2">
                                <a href="#" class="p-2 py-4">
                                    <div class="c_course-right-main-wrap text-center">
                                        <h4 class="mb-0">Hello</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="c_course-right-btn-wrap">
                                <button class="btn btn-primary d-flex w-100 justify-content-center align-items-center fw-bold">VIEW AVAILABLE TUTORS</button>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>


<?php
    include('footer.php');
?>