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
                                    <p class="mb-0">Don't have an account? <a href="register.php?type=tutor" class="target_tutor">Sign Up</a></p>
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
                                    <p class="mb-0">Don't have an account? <a href="register.php?type=tutee" class="target_tutee">Sign Up</a></p>
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


<script src="node_modules/slick-carousel/slick/slick.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="node_modules/datatables/media/js/jquery.dataTables.min.js"></script>


<script>
    jQuery(function($) {
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

        // MOBILE NAV
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