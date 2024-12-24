<?php $page = 'home'; ?>
<?php
$courses = [
    [
        'title' => 'SSC & HSC',
        'description' => 'PVT SSC & HSC (Maharashtra, NIOS Board & International Board)',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/institution.png'
    ],
    [
        'title' => 'GRADUATION',
        'description' => 'GRADUATION IN (BSc, BSc IT, BCA, BBA, BCOM, BA )',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/homework.png'
    ],
    [
        'title' => 'MASTERS',
        'description' => 'MA, MSc, MBA in (Marketing, Sales, Finance, HRM, IT, Environment Management & Auditing, Project Monitoring & Evaluation, Project Management, Organizational Development, Finance Services & Secutiry Analysis, Hospitality Management, Operational Management, International Business, Supply Chain Management)',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/master.png'
    ],
    [
        'title' => 'ENGINEERING COURSES',
        'description' => 'ENGINEERING COURSES (B.TECH, M.TECH, DIPLOMA IN ENGINEERING, POST GRADUATION DIPLOMA IN ENGINEERING)',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/engineering.png'
    ],
    [
        'title' => 'IT COURSES',
        'description' => 'IT COURSES (BCA, MCA, M.SC IN COMPUTER SCIENCE, M.SC IT)',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/programming.png'
    ],
    [
        'title' => 'MANAGEMENT COURSES',
        'description' => 'MANAGEMENT COURSES (BBA, MBA, EMBA)',
        'image' => 'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/team.png'
    ]
];
?>
<?php
$unilogos = [
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo.png',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo1.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo2.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo3.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo4.png',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo5.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo6.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo7.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo8.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo9.jpg',
    'https://alfaeducation.org.in/wp-content/themes/alfa-theme/assets/images/u-logo10.png'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alfa Education </title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>
        <div class="banner-wrapper">
            <div class="banner_wrapper_inner">

                <div class="containerFull">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner_content">
                                <div class="banner_content_inner">


                                    <p class="heading text-white">
                                        Welcome to
                                    </p>
                                    <h1 class="fontHeading large_heading fontWeight700 mt-3 text-white">
                                        ALFA EDUCATION
                                    </h1>
                                    <p class="text-white mt-3">
                                        Avail result-oriented educational services for students to achieve growth with
                                        the
                                        best educational agency in Mumbai.
                                    </p>
                                    <div class="banner_list">
                                        <ul>
                                            <li>
                                                <div class="img_box">
                                                    <img src="images/icons/university.png"
                                                        alt="India's Best Universities" />
                                                </div>
                                                <p>India's Best Universities</p>
                                            </li>
                                            <li>
                                                <div class="img_box">
                                                    <img src="images/icons/financial-advisor.png"
                                                        alt="100% Free Counseling" />
                                                </div>
                                                <p>100% Free Counseling</p>
                                            </li>
                                            <li>
                                                <div class="img_box">
                                                    <img src="images/icons/saving-money.png"
                                                        alt="Affordable Programmes" />
                                                </div>
                                                <p>Affordable Programmes</p>
                                            </li>
                                            <li>
                                                <div class="img_box">
                                                    <img src="images/icons/community (1).png"
                                                        alt="NIRF Ranked Universities" />
                                                </div>
                                                <p> 60000+ Student served</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6 banner_form_main">
                            <div class="banner_form">
                                <h4 class="text_primary FontHeading fontWeight600">
                                    Enquire Now

                                </h4>
                                <p>


                                    100% Free Career Counseling
                                </p>
                                <form>
                                    <div class="formItem">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name">
                                    </div>

                                    <div class="formItem">
                                        <label for="mobile">Mobile Number:</label>
                                        <input type="tel" id="mobile" name="mobile">
                                    </div>

                                    <div class="formItem">
                                        <label for="email">Email ID:</label>
                                        <input type="email" id="email" name="email">
                                    </div>

                                    <div class="formItem">
                                        <label for="course">Course Name:</label>
                                        <input type="text" id="course" name="course">
                                    </div>

                                    <!-- <div class="formItem">
                                        <label for="message">Message:</label>
                                        <textarea id="message" name="message" rows="4" cols="50"></textarea>
                                    </div> -->

                                    <div class="formItem mt-3">
                                        <button class="btn_2 w-100" type="submit">Submit</button>
                                    </div>
                                </form>




                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_img_grid">
                            <div class="about_img ">
                                <img src="images/about-us-graduation-image.webp" alt="About Us" />

                            </div>
                            <div class="about_img">
                                <img src="images/about-us-graduation-group-image.webp" alt="About Us" />

                            </div>
                            <div class="about_img">
                                <h4 class="fontHeading sub_heading fontWeight600 text-white">
                                    12+ Years of Experience

                                </h4>
                                <p>

                                    Best Courses For Everyone
                                </p>

                            </div>

                        </div>


                    </div>
                    <div class="col-lg-6 ps-5">
                        <h4 class="heading fontWeight600 h_underline">

                            About Us
                        </h4>
                        <p class="mt-4">
                            Alfa Education is a leading educational consultancy in Mumbai, India. We provide
                            comprehensive educational services to students who wish to study in India and abroad. Our
                            services include career counseling, admission guidance, visa assistance, and more. We have
                            helped thousands of students achieve their academic goals and secure admissions in top
                            universities around the world.

                        </p>
                        <div class="about_grid">
                            <ul>
                                <li>
                                    <div class="img_box">
                                        <img src="images/icons/university (1).png" alt="Universities" />
                                    </div>
                                    <p>40+ <br /> Universities</p>
                                </li>
                                <li>
                                    <div class="img_box">
                                        <img src="images/icons/graduation-hat.png" alt="Graduates" />
                                    </div>
                                    <p>10,000+ <br /> Graduates</p>
                                </li>
                                <li>
                                    <div class="img_box">
                                        <img src="images/icons/execution.png" alt="Courses" />
                                    </div>
                                    <p>720+ <br /> Courses</p>
                                </li>
                                <li>
                                    <div class="img_box">
                                        <img src="images/icons/experience.png" alt="Years of Experience" />
                                    </div>
                                    <p>12+ Years <br /> of Experience</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="features_grid_main">
            <div class="containerFull">
                <ul class="features_grid">
                    <li>
                        <p><strong>Customer Support</strong><br>24/7</p>
                    </li>
                    <li>
                        <p><strong>Affordable Courses</strong><br>Less money</p>
                    </li>
                    <li>
                        <p><strong>India's Top Universities</strong><br>Best in India</p>
                    </li>
                    <li>
                        <p><strong>100% Free Counselling</strong><br>Free of Cost</p>
                    </li>
                </ul>
            </div>
        </div>
        <section>
            <div class="containerFull">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <h4 class="heading fontWeight600 h_underline text-center">
                            Programs & Courses Offered
                        </h4>
                        <p class="text-center mt-4 ">
                            Our vast range of Courses that has helped students to complete their education.
                            Our Universities are UGC Recognised, AICTE Approved, DEB approved, MHRD approved.
                        </p>
                    </div>

                </div>
                <div class="">
                    <div class=" row mt-5">
                        <?php foreach ($courses as $course): ?>
                            <div class="col-md-4 mb-3">
                                <div class="course_box">
                                    <div class="img_box ">
                                        <img src="<?php echo $course['image']; ?>" alt="<?php echo $course['title']; ?>">
                                    </div>
                                    <h4 class="text-center mt-3 fontHeading fontWeight600 title h_underline">
                                        <?php echo $course['title']; ?>
                                    </h4>
                                    <p class=" text-center mt-4">
                                        <?php echo $course['description']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>

            </div>
        </section>
        <section class="affiliated_uni">
            <div class="containerFull">
                <h4 class="heading fontHeading fontWeight600 h_underline">Affiliated Universities</h4>
                <p class="mt-4">
                    List of universities in our collaboration.
                </p>

                <div class="swiper universities_slider mt-5 ">
                    <div class="swiper-wrapper">

                        <?php foreach ($unilogos as $index => $logo): ?>
                            <div class="swiper-slide mb-2">
                                <div class="bx-inner">
                                    <img src="<?php echo $logo; ?>" alt="Logo <?php echo $index + 1; ?>">
                                </div>

                            </div>
                        <?php endforeach; ?>


                    </div>
                    <div class="swiper-button-next text_primary"></div>
                    <div class="swiper-button-prev text_primary"></div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>

            </div>
        </section>
        <section class="cta_1 bg_primary">
            <div class="containerFull">
                <div class="row">
                    <h4 class="heading text-white fontHeading fontWeight600 h_underline text-center">
                        Need Guidance, Have a Doubt?
                    </h4>
                    <p class="mt-4 text-center text-white">
                        Get the answers you need and the guidance you seek <br /> with our Expert Counselors
                    </p>

                    <div class="d-flex justify-content-center mt-5">
                        <a class=" " href="tel:+91 8097044229"> <button class="btn_3"><i
                                    class="fa-solid fa-phone me-1"></i> +91 8097044229</button></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="addmission_process">
            <div class="containerFull">
                <h4 class="heading fontHeading fontWeight600 h_underline">
                    Admission Process
                </h4>
                <p class="mt-4">
                    Our Admission Process starts with the application form submission.
                </p>


                <div class="process_grid ">
                    <div class="process_item ">
                        <div class="steps">
                            1
                        </div>
                        <h4>
                            Select Your Desired course

                        </h4>
                        <p>
                            Move a step closer to achieving your dream career by carefully selecting the perfect course

                        </p>
                    </div>
                    <div class="process_item col-lg-4">
                        <div class="steps">
                            2
                        </div>
                        <h4>
                            Select Your Desired course

                        </h4>
                        <p>
                            Move a step closer to achieving your dream career by carefully selecting the perfect course

                        </p>
                    </div>
                    <div class="process_item col-lg-4">
                        <div class="steps">
                            3
                        </div>
                        <h4>
                            Select Your Desired course

                        </h4>
                        <p>
                            Move a step closer to achieving your dream career by carefully selecting the perfect course

                        </p>
                    </div>
                    <div class="process_item col-lg-4">
                        <div class="steps">
                            4
                        </div>
                        <h4>
                            Select Your Desired course

                        </h4>
                        <p>
                            Move a step closer to achieving your dream career by carefully selecting the perfect course

                        </p>
                    </div>
                    <div class="process_item col-lg-4">
                        <div class="steps">
                            5
                        </div>
                        <h4>
                            Select Your Desired course

                        </h4>
                        <p>
                            Move a step closer to achieving your dream career by carefully selecting the perfect course

                        </p>
                    </div>

                </div>

            </div>
        </section>



    </div>
    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".universities_slider", {
            spaceBetween: 10,
            // centeredSlides: true,
            slidesPerView: 4,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 2,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 2,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 4,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".countries_slider", {
            spaceBetween: 20,
            // centeredSlides: true,
            slidesPerView: 4,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 1,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 1,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     }
            //     1024: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".next_1",
                prevEl: ".prev_1",
            },
        });
    </script>

</body>

</html>