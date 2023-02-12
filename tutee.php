<?php
    include('header.php');
?>

    <section class="t_banner-wrap sec-pad">
        <div class="container">

            <div class="row">

                
                <div class="col-lg-6">
                    <div class="row">

                        <!-- CHATS -->
                        <div class="col-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="fw-bold">Chats</h2>

                                    <div class="card t_chat-card">
                                        <div class="card-body">

                                            <!-- MESSAGE -->
                                            <div class="t_chat-wrap border">
                                                <a href="#">
                                                    <div class="t_chat-img-wrap">
                                                        <img src="images/about-sec.jpg" alt="">
                                                    </div>
                                                    <div class="t_chat-user-wrap">
                                                        <p class="t_chat-user-name">Sample Name</p>
                                                        <p class="t_chat-user-msg">This is just a sample message. Lorem ipsum dolor.</p>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="row">

                        <div class="col-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="fw-bold">Courses</h4>

                                    <div class="card t_pending-tutee-card">
                                        <div class="card-body">
                                            <table class="table table-bordered table-responsive t_course-tutors mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Tutor's Name</th>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Rate</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Sample Name</th>
                                                        <td>Science</td>
                                                        <td><span class="badge bg-success">DONE</span></td>
                                                        <td class="d-flex gap-1 justify-content-center align-items-center">
                                                            <span class="t_rating-star" data-value="1"><i class="fa-solid fa-star"></i></span>
                                                            <span class="t_rating-star" data-value="2"><i class="fa-solid fa-star"></i></span>
                                                            <span class="t_rating-star" data-value="3"><i class="fa-solid fa-star"></i></span>
                                                            <span class="t_rating-star" data-value="4"><i class="fa-solid fa-star"></i></span>
                                                            <span class="t_rating-star" data-value="5"><i class="fa-solid fa-star"></i></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
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

<script>
    const stars = document.querySelectorAll(".t_rating-star");

    // for (let star of stars) {
    //     star.addEventListener("click", function() {
    //         const currentValue = Number(this.dataset.value);
    //         let filled = false;

    //             for (let i = 0; i < stars.length; i++) {
    //                 if (stars[i].classList.contains("filled")) {
    //                     filled = true;
    //                 }

    //                 stars[i].classList.remove("filled");

    //                 if (i + 1 === currentValue) {
    //                     break;
    //                 }
    //             }

    //             if (!filled) {
    //                 for (let i = 0; i < currentValue; i++) {
    //                     stars[i].classList.add("filled");
    //                 }
    //             }
    //     });
    // }

    for (let star of stars) {
        star.addEventListener("click", function() {
            for (let i = 0; i < stars.length; i++) {
                stars[i].classList.remove("filled");
            }

            for (let i = 0; i < Number(this.dataset.value); i++) {
                stars[i].classList.add("filled");
            }
        });
    }



</script>