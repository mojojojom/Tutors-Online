        <!-- LOGIN MODAL -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body position-relative login_modal-body">
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                        
                        <div class="login_choices-wrap">

                            <!-- WELCOME WRAP -->
                            <div class="login_welcome-wrap">
                                <h2 class="fw-bold text-center mb-0 pb-1">HELLO!</h2>
                                <p class="text-center">Please select your role.</p>
                                
                                <div class="login_tutor-card text-center mb-2">
                                    <a href="#" class="choices" id="login_as_tutor">Login as Tutor</a>
                                </div>
                                <div class="login_tutee-card text-center mb-2">
                                    <a href="#" class="choices" id="login_as_tutee">Login as Tutee</a>
                                </div>
                                <div class="login_admin-card text-center mb-2">
                                    <a href="#" class="choices" id="login_as_admin">Login as Admin</a>
                                </div>
                            </div>

                            <!-- LOGIN AS TUTOR -->
                            <div class="login_as_tutor-wrap">
                                <h3 class="text-center fw-bold">Tutor Login</h3>
                                <form method="POST" id="login_tutor">

                                    <div class="row">
                                        <div class="mb-2">
                                            <label for="email" class="form-label mb-0">Email/Username</label>
                                            <input type="email" class="form-control" id="login_tutor_email" placeholder="Enter your email/username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label mb-0">Password</label>
                                            <input type="password" class="form-control" id="login_tutor_password" placeholder="Enter your password" required>
                                        </div>
                                        <div class="mb-2">
                                            <input type="submit" name="login_tutor" id="login_tutor_btn" class="login_tutor_btn" value="Login">
                                        </div>
                                        <div class="mb-1 text-center">
                                            <p class="mb-0"><a href="#">Forgot Password?</a></p>
                                        </div>
                                        <div class="mb-2 text-center">
                                            <p class="mb-0">Don't have an account? <a href="#tutor_signup" class="target_tutor" data-bs-toggle="modal" data-bs-target="tutor_signup">Sign Up</a></p>
                                        </div>

                                        <div class="mb-0">
                                            <a href="#" class="go_back_btn"><i class="fa-solid fa-arrow-left-long"></i> Go back</a>
                                        </div>

                                    </div>

                                </form>
                            </div>

                            <!-- LOGIN AS TUTEE -->
                            <div class="login_as_tutee-wrap">
                                <h3 class="text-center fw-bold">Tutee Login</h3>
                                <form method="POST" id="login_tutee">

                                    <div class="row">
                                        <div class="mb-2">
                                            <label for="email" class="form-label mb-0">Email/Username</label>
                                            <input type="email" class="form-control" id="login_tutee_email" placeholder="Enter your email/username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label mb-0">Password</label>
                                            <input type="password" class="form-control" id="login_tutee_password" placeholder="Enter your password" required>
                                        </div>
                                        <div class="mb-2">
                                            <input type="submit" name="login_tutee" id="login_tutee_btn" class="login_tutee_btn" value="Login">
                                        </div>
                                        <div class="mb-1 text-center">
                                            <p class="mb-0"><a href="#">Forgot Password?</a></p>
                                        </div>
                                        <div class="mb-2 text-center">
                                            <p class="mb-0">Don't have an account? <a href="#tutee_signup" class="target_tutee" data-bs-toggle="modal" data-bs-target="tutee_signup">Sign Up</a></p>
                                        </div>
                                        
                                        <div class="mb-0">
                                            <a href="#" class="go_back_btn"><i class="fa-solid fa-arrow-left-long"></i> Go back</a>
                                        </div>

                                    </div>

                                </form>
                            </div>

                            <!-- LOGIN AS ADMIN -->
                            <div class="login_as_admin-wrap">
                                <h3 class="text-center fw-bold">Admin Login</h3>
                                <form method="POST" id="login_admin">

                                    <div class="row">
                                        <div class="mb-2">
                                            <label for="email" class="form-label mb-0">Email/Username</label>
                                            <input type="email" class="form-control" id="admin_email" placeholder="Enter your email/username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label mb-0">Password</label>
                                            <input type="password" class="form-control" id="admin_password" placeholder="Enter your password" required>
                                        </div>
                                        <div class="mb-2">
                                            <input type="submit" name="login_admin" id="login_admin_btn" class="login_admin_btn" value="Login">
                                        </div>
                                        <div class="mb-1 text-center">
                                            <p class="mb-0"><a href="#">Forgot Password?</a></p>
                                        </div>
                                        
                                        <div class="mb-0">
                                            <a href="#" class="go_back_btn"><i class="fa-solid fa-arrow-left-long"></i> Go back</a>
                                        </div>

                                    </div>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>        

        <!-- TUTEE SIGN UP MODAL -->
        <div class="modal fade" id="tutee_signup" tabindex="-1" aria-labelledby="tutee_signupLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body position-relative" style="padding: 24px;">
                        <button type="button" class="btn-close position-absolute" style="right: 10px;top:10px;" data-bs-dismiss="modal" aria-label="Close"></button>
                        
                        <h3 class="fw-bold mb-0 t-dark">GET AN ACCESS TO OUR SERVICE</h3>
                        <p class="mb-3 t-desc">Please Fill Out All Fields</p>

                        <form action="" method="post" id="tutee_signup_form" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-12 mb-2">
                                    <label for="username" class="form-label mb-1">Username</label>
                                    <input type="text" class="form-control" name="username" id="tutee_username" placeholder="Enter username" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="f_name" class="form-label mb-1">First Name</label>
                                    <input type="text" class="form-control" name="f_name" id="tutee_f_name" placeholder="Enter your first name" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="l_name" class="form-label mb-1">Last Name</label>
                                    <input type="text" class="form-control" name="l_name" id="tutee_l_name" placeholder="Enter your last name" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="course" class="form-label mb-1">Course</label>
                                    <input type="text" class="form-control" name="course" id="tutee_course" placeholder="Enter your course" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="level" class="form-label mb-1">Year Level</label>
                                    <select id="tutee_level" class="form-select" name="level" aria-label="Default select" required>
                                        <option selected>Open this to select year level</option>
                                        <option value="1">I</option>
                                        <option value="2">II</option>
                                        <option value="3">III</option>
                                        <option value="4">IV</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="password" class="form-label mb-1">Password</label>
                                    <input type="password" class="form-control" name="password" id="tutee_password" placeholder="Enter password" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="c_password" class="form-label mb-1">Confirm Password</label>
                                    <input type="password" class="form-control" name="c_password" id="tutee_c_password" placeholder="Confirm password" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="email" class="form-label mb-1">Email</label>
                                    <input type="email" class="form-control" name="email" id="tutee_email" placeholder="Enter your email" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="phone" class="form-label mb-1">Mobile Number</label>
                                    <input type="number" class="form-control" name="phone" id="tutee_phone" min="11" max="13" placeholder="Enter your mobile number" required>
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="image" class="form-label">Your image</label>
                                    <input class="form-control" type="file" id="tutee_image">
                                </div>

                                <div class="col-12 mt-3 mb-2">
                                    <input class="c-btn c-btn-primary c-btn-inline" type="submit" name="tutee_register" id="tutee_register-btn" value="Register">
                                </div>
                                <div class="col-12 text-center">
                                    <p class="mb-0">Already have an account? <a href="#loginModal" class="target_login_modal_tutee" data-bs-target="#loginModal" data-bs-toggle="modal">Sign in</a></p>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>    

        <!-- TUTOR SIGN UP MODAL -->
        <div class="modal fade" id="tutor_signup" tabindex="-1" aria-labelledby="tutor_signupLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body position-relative">
                        <button type="button" class="btn-close position-absolute" style="right: 10px;top:10px;" data-bs-dismiss="modal" aria-label="Close"></button>
                        
                        <h3 class="fw-bold mb-0 t-dark">BE A TUTOR</h3>
                        <p class="mb-3 t-desc">Please Fill Out All Fields</p>

                        <form action="" method="post" id="tutor_signup_form" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-12 mb-2">
                                    <label for="username" class="form-label mb-1">Username</label>
                                    <input type="text" class="form-control" name="username" id="tutor_username" placeholder="Enter username" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="f_name" class="form-label mb-1">First Name</label>
                                    <input type="text" class="form-control" name="f_name" id="tutor_f_name" placeholder="Enter your first name" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="l_name" class="form-label mb-1">Last Name</label>
                                    <input type="text" class="form-control" name="l_name" id="tutor_l_name" placeholder="Enter your last name" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="course" class="form-label mb-1">Course</label>
                                    <input type="text" class="form-control" name="course" id="tutor_course" placeholder="Enter your course" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="level" class="form-label mb-1">Year Level</label>
                                    <select id="tutor_level" class="form-select" name="level" aria-label="Default select" required>
                                        <option selected>Open this to select year level</option>
                                        <option value="1">I</option>
                                        <option value="2">II</option>
                                        <option value="3">III</option>
                                        <option value="4">IV</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="password" class="form-label mb-1">Password</label>
                                    <input type="password" class="form-control" name="password" id="tutor_password" placeholder="Enter password" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="c_password" class="form-label mb-1">Confirm Password</label>
                                    <input type="password" class="form-control" name="c_password" id="tutor_c_password" placeholder="Confirm password" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="email" class="form-label mb-1">Email</label>
                                    <input type="email" class="form-control" name="email" id="tutor_email" placeholder="Enter your email" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="phone" class="form-label mb-1">Mobile Number</label>
                                    <input type="number" class="form-control" name="phone" id="tutor_phone" min="11" max="13" placeholder="Enter your mobile number" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="image" class="form-label">Your image</label>
                                    <input class="form-control" type="file" id="tutor_image">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="image" class="form-label">Attach your CV:</label>
                                    <input class="form-control" type="file" id="tutor_cv">
                                </div>

                                <div class="col-12 mt-3 mb-2">
                                    <input class="c-btn c-btn-primary c-btn-inline" type="submit" name="tutor_register" id="tutor_register-btn" value="Register">
                                </div>
                                <div class="col-12 text-center">
                                    <p class="mb-0">Already have an account? <a href="#loginModal" class="target_login_modal_tutor" data-bs-target="#loginModal" data-bs-toggle="modal">Sign in</a></p>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>    
        
        <!-- SCROLL TO TOP -->
        <div class="scroll-to-top">
            <a href="#home"><i class="fa-solid fa-circle-chevron-up"></i></a>
        </div>

        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer_logo-wrap text-center text-md-start">
                            <a href="#" class="mb-0">LOGO</a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="footer_copyright-wrap text-center text-md-end ">
                            <p class="mb-0">© <?= date('Y')?> <a href="#" class="fw-bold">Tutor</a>, All Right Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        
        
        
        <script src="node_modules/slick-carousel/slick/slick.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    </body>
</html>

<script>
    jQuery(function($) {
        $(document).ready(function () {
            // HEADER ACTIVE LINKS
            $('body').on('click', '.main_nav-links ul li a', function() {
                $('.main_nav-links ul li a').removeClass('active');
                $(this).addClass('active');
            })

            // CHANGE MODAL
            $('.target_login_modal_tutor').on('click', function() {
                $('#tutor_signup').modal('toggle');
            })
            $('.target_login_modal_tutee').on('click', function() {
                $('#tutee_signup').modal('toggle');
            })
            $('.target_tutor').on('click', function() {
                $('#tutor_signup').modal('toggle');
                $('#loginmodal').modal('toggle');
            })
            $('.target_tutee').on('click', function() {
                $('#tutee_signup').modal('toggle');
                $('#loginmodal').modal('toggle');
            })

            $('button.btn-close').on('click', function() {
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            })

        })
    })

    // HEADER FUNCTION
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            $("header").addClass("scrolled shadow-sm");
            $(".scroll-to-top").show();
        } else {
            $("header").removeClass("scrolled shadow-sm");
            $(".scroll-to-top").hide();
        }
    });


</script>

<script>
    jQuery(function($) {

        $(document).ready(function () {
            
            $(document).on('click', function(e) {
                var navMobile = $('.main_nav-mobile');

                if (!navMobile.is(e.target) && navMobile.has(e.target).length === 0 && navMobile.css('left') === '0px') {
                    navMobile.animate({
                        left: '-100%'
                    }, 500);
                }
            });

            $('.main_nav-toggler a').on('click', function(e) {
                e.preventDefault();
                console.log('clicked');
                var navMobile = $('.main_nav-mobile');

                if (navMobile.css('left') === '-100%') {
                    navMobile.animate({
                        left: '-100%',
                        display: 'flex'
                    }, 500);
                } else {
                    navMobile.animate({
                        left: '0'
                        // display: 'flex'
                    }, 500);
                }
            });

            $('.main_nav-mobile a').on('click', function() {
                var navMobile = $('.main_nav-mobile');

                navMobile.animate({
                    left: '-100%'
                }, 500);
            });

        })




        // COURSES SLIDER
        $('.h_courses-slider').slick({
            nextArrow: $('.h_courses-slider-custom-right'),
            prevArrow: $('.h_courses-slider-custom-left'),
            infinite: true,
            speed: 500,
            cssEase: 'linear',
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        // TUTORS SLIDER
        $('.h_tutors-slider').slick({
            nextArrow: $('.h_tutors-slider-custom-right'),
            prevArrow: $('.h_tutors-slider-custom-left'),
            infinite: true,
            speed: 500,
            cssEase: 'linear',
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        // TESTIMONIALS SLIDER
        $('.h_testi-slider').slick({
            nextArrow: $('.h_testi-slider-custom-right'),
            prevArrow: $('.h_testi-slider-custom-left'),
            infinite: true,
            speed: 500,
            cssEase: 'linear',
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        // LOGIN
        $(document).ready(function () {
            $('#login_as_tutor, #login_as_tutee, #login_as_admin').on('click', function(e) {
                e.preventDefault();
                $('.login_welcome-wrap').hide();
                $('.' + $(this).attr('id') + '-wrap').show();
            });

            $('.go_back_btn').on('click', function(e) {
                e.preventDefault();
                $('.login_welcome-wrap').show();
                $('.login_as_tutor-wrap, .login_as_tutee-wrap, .login_as_admin-wrap').hide();
            });
        });


    })
</script>