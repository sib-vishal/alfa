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

$steps = [
    [
        'step' => 'Registration',
        'title' => 'Registration',
        'description' => 'Complete registration for services.'
    ],
    [
        'step' => 'Counseling on Call',
        'title' => 'Counseling on Call',
        'description' => 'Receive expert counseling via call.'
    ],
    [
        'step' => 'Course Selection Assistance',
        'title' => 'Course Selection Assistance',
        'description' => 'Get help choosing the right course.'
    ],
    [
        'step' => 'Fee Submission',
        'title' => 'Fee Submission',
        'description' => 'Submit fees to confirm registration.'
    ],
    [
        'step' => 'Document Verification',
        'title' => 'Document Verification',
        'description' => 'Verify documents for application approval.'
    ],
    [
        'step' => 'Admission Done',
        'title' => 'Admission Done',
        'description' => 'Admission successfully completed and confirmed.'
    ]
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
        <!--  -->

        <!--  -->

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
                        <a class=" fontHeading" href="tel:+91 8097044229"> <button class="btn_3"><i
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

                <!-- <div>
                    <img class="w-100" src="images/admission-process.jpg" alt="">
                </div> -->


                <div class="process_grid ">
                    <?php foreach ($steps as $index => $step): ?>
                        <div class="process_item">
                            <div class="steps">
                                <?php echo $index + 1; ?>
                            </div>
                            <h4>
                                <?php echo $step['title']; ?>
                            </h4>
                            <p>
                                <?php echo $step['description']; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>
        <!--  -->
        <section class="payment" style="background: #f9f9f9;">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="heading fontHeading fontWeight600 h_underline">
                            Payment Gateway
                        </h4>
                        <p class="mt-4">
                            At Alfa Education, we prioritize your security and convenience when it comes to online
                            payments. Our platform is designed to offer a seamless and secure payment experience,
                            ensuring your information is protected at all times. Here are the trusted and secure payment
                            options available for our students and clients:
                        </p>

                        <ul>
                            <li>
                                <div class="img_box">
                                    <img src="images/icons/credit-card.png" alt="Credit and Debit Cards">
                                </div>
                                <p>Credit and Debit Cards</p>
                            </li>
                            <li>
                                <div class="img_box">
                                    <img src="images/icons/cashless-payment.png" alt="UPI (Unified Payments Interface)">
                                </div>
                                <p>UPI (Unified Payments Interface)</p>
                            </li>
                            <li>
                                <div class="img_box">
                                    <img src="images/icons/online-payment.png" alt="Net Banking">
                                </div>
                                <p>Net Banking</p>
                            </li>
                            <li>
                                <div class="img_box">
                                    <img src="images/icons/secure-payment.png" alt="Payment Gateways">
                                </div>
                                <p>Payment Gateways</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 ps-5 ">
                        <div class="img_box1">
                            <img src="images/close-up-student-online-class.jpg" alt="Payment Gateway" />

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <section class="why-choose-us">

            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img_box">
                            <img src="images/whychoose.jpg" alt="Why Choose Us" />
                        </div>

                    </div>
                    <div class="col-lg-6 ps-5 ">
                        <h4 class="heading fontHeading fontWeight600 h_underline">
                            Why Choose Us?
                        </h4>
                        <p class="mt-4">
                            Alfa Education is a leading educational consultancy in Mumbai, India. We provide
                            comprehensive educational services to students who wish to study in India and abroad. Our
                            services include career counseling, admission guidance, visa assistance, and more. We have
                            helped thousands of students achieve their academic goals and secure admissions in top
                            universities around the world.
                        </p>

                        <ul>
                            <li>Expert counseling by experienced professionals.</li>
                            <li>Personalized course selection assistance tailored to your career goals.</li>
                            <li>Seamless and efficient registration and fee submission process.</li>
                            <li>Quick document verification for smooth admissions.</li>
                            <li>Comprehensive support throughout your educational journey.</li>
                            <li>Guaranteed admission once all requirements are met.</li>
                        </ul>


                    </div>

                </div>

            </div>
        </section>

        <section class="cta2">
            <div class="containerFull">
                <h4 class="heading text-white fontHeading fontWeight600 h_underline text-center">
                    Don't Wait! Start Your Career Path Today!

                </h4>
                <p class="text-white mt-5 text-center">Take the first step towards achieving your dreams.<br>
                    Enroll now and start your journey<br>
                    with expert guidance.</p>


                <div class="d-flex justify-content-center gap-4 mt-5">

                    <a class="fontHeading " href="" data-bs-toggle="modal" data-bs-target="#exampleModal"> <button
                            class="btn_4"><i class="fa-regular fa-envelope me-2"></i>
                            Request Call Back</button></a>
                    <a class="fontHeading " href="tel:+91 8097044229"> <button class="btn_3"><i
                                class="fa-solid fa-phone me-1"></i>
                            +91 8097044229</button></a>
                </div>



            </div>

        </section>

        <section>

            <div class="containerFull">
                <h4 class="heading fontHeading fontWeight600 h_underline text-center">

                    Awards & Achievements
                </h4>
                <div class="">

                    <div class="swiper awards_slider mt-5 ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img_box">
                                    <img src="images/award1.jpg" alt="Award 1">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img_box">
                                    <img src="images/award2.jpg" alt="Award 2">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img_box">
                                    <img src="images/award3.jpg" alt="Award 3">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img_box">
                                    <img src="images/award4.jpg" alt="Award 4">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img_box">
                                    <img src="images/award5.jpeg" alt="Award 5">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img_box">
                                    <img src="images/award6.jpg" alt="Award 6">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img_box">
                                    <img src="images/award7.jpg" alt="Award 7">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img_box">
                                    <img src="images/award8.jpg" alt="Award 8">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="img_box">
                                    <img src="images/award.jpg" alt="Award 9">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next  next_1"></div>
                        <div class="swiper-button-prev prev_1"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

            </div>
        </section>

        <section class="faq">
            <div class="containerFull">
                <h4 class="heading fontHeading fontWeight600 h_underline text-center">
                    Frequently Asked Questions
                </h4>
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="accordion" id="accordion1">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                        1. What courses does Alpha Education offer?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        Alpha Education offers a wide range of professional and academic courses,
                                        including business management, engineering, digital marketing, data science, and
                                        many more.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        2. How do I enroll in a course at Alpha Education?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        You can easily enroll in any of our courses by visiting our website, selecting
                                        your desired course, and completing the registration process. Our team will
                                        assist you with the enrollment steps.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        3. What are the fees for courses at Alpha Education?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        Fees for courses at Alpha Education vary based on the course type and duration.
                                        You can find detailed information on our website or contact our support team for
                                        specific queries.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        4. Are there any scholarships available for Alpha Education students?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        Yes, Alpha Education offers various scholarship programs based on merit and
                                        financial need. Visit our scholarship page for more information and how to
                                        apply.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        5. Can I study online with Alpha Education?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        Yes, Alpha Education offers flexible online courses that can be accessed from
                                        anywhere in the world. Our online learning platform provides interactive
                                        sessions, recorded lectures, and support.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        6. How can I get more information about Alpha Education?
                                    </button>
                                </h2>
                                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        For more information, you can visit our website, reach out to our support team
                                        via email or phone, or connect with us on social media platforms like Facebook,
                                        Instagram, and LinkedIn.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 ps-5">
                        <div class="img_box">
                            <img src="images/faq.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial" style="background: #f9f9f9;">
            <div class="containerFull">
                <h4 class="heading fontHeading fontWeight600 h_underline text-center">
                    Testimonials
                </h4>

                <!-- <iframe src="https://search.google.com/local/reviews?placeid=YOUR_PLACE_ID" width="600" height="450"
                    style="border:0;" allowfullscreen="" loading="lazy">
                </iframe> -->



            </div>
        </section>
        <section class="contact-details">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-5 bg_primary p-5">
                        <h4 class="heading fontHeading text-white fontWeight600 h_underline">
                            Contact Details
                        </h4>

                        <ul class="contact_list mt-5">
                            <li>
                                <a href="tel:+91 8097044229">

                                    <div class="img_box">
                                        <i class="fa-solid fa-location-dot"></i>

                                    </div>
                                    <div class="content">
                                        <h5>
                                            Address
                                        </h5>

                                        <p>Innovative Info Park 7th Floor
                                            Gumpha Road Off Western Express Highway Jogeshwari East Mumbai 400060.</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+91 8097044229">

                                    <div class="img_box">
                                        <i class="fa-solid fa-phone"></i>

                                    </div>
                                    <div class="content">
                                        <h5>
                                            Phone
                                        </h5>

                                        <p>+91 8097044229</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@alfaeducation.in">

                                    <div class="img_box">
                                        <i class="fa-solid fa-envelope"></i>

                                    </div>
                                    <div class="content">
                                        <h5>
                                            Email
                                        </h5>
                                        <p>info@alfaeducation.in</p>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-7">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3768.6883157584944!2d72.850434!3d19.165116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7ca3c1a6757%3A0xdccf93e2c3d9ff60!2sAlfa%20Education%20Consultancy!5e0!3m2!1sen!2sin!4v1735206783501!5m2!1sen!2sin"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

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
        var swiper = new Swiper(".awards_slider", {
            spaceBetween: 20,
            centeredSlides: true,
            slidesPerView: 1.5,
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