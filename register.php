<?php
    include('connection/connect.php');
    error_reporting(0);
    session_start();
    include('styles.php');

    if(!empty($_SESSION['tutee_id'])) {
        header('Location: index.php');
    } else if(isset($_SESSION['tutor_id'])) {
        header('Location: tutor/index.php');
    }
    else if(isset($_SESSION['admin_id'])) {
        header('Location: admin/index.php');
    } else {
        $type = $_GET['type'];

        if(!empty($type)) {
    ?>
    
            <section class="r_register-wrap">
                <div class="r_register-inner-wrap">
                    <div class="col-md-6 r_register-left-col">
                        <div class="r_register-left-content">
                            <div class="r_register-left-logo-wrap">
                                <h3>LOGO</h3>
                            </div>
                            <h1>Helping Students<br> Expand Their Knowledge</h1>
                        </div>
                    </div>
                    <div class="col-md-6 r_register-right-col">
                        <div class="r_register-right-form-wrap">
                            <a href="index.php" class="mb-3 r_register-back-btn"><i class="fa-solid fa-arrow-left-long"></i> GO BACK</a>
    
                            <?php
                            if($type === 'tutor') {
                            ?>
    
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
    
                            <?php
                            } else if($type === 'tutee') {
                            ?>
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
                            <?php
                            } else {
                                header('Location: index.php');
                            }
                            ?>
    
                        </div>
                    </div>
                </div>
            </section>
    
        <?php
        } else {
            header('Location: index.php');
        }
    }
        ?>


<?php
    include('scripts.php');
?>