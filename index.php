<!doctype html>
<html class="no-js" lang="zxx">

<?php include('data/data.php') ?>

<head>  
    <?php include 'partials/meta.php'; ?>
</head>

<body>

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
    Sidemenu
============================== -->
    
    <!--==============================
    Sidemenu
============================== -->
    
    <?php include('includes/cart.php') ?>
    <?php include('includes/sidebar.php') ?>
    <?php include('includes/search.php') ?>
    <?php include('includes/appointment.php') ?>
    <!--==============================
    Mobile Menu
  ============================== -->
    <?php include('includes/mobile-menu.php') ?>
    <!--==============================
	Header Area
==============================-->
    <?php include('includes/header.php') ?>
    <!--==============================
Hero Area
==============================-->
    <div class="th-hero-wrapper hero-2" id="hero" data-bg-src="assets/img/hero/hero_bg_2_1.jpg">
        <div class="hero-inner">
            <div class="container">
                <div class="hero-style2">
                    <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">24/7 Medical Service</span>
                    <h1 class="hero-title2">
                        <span class="title1">Caring for <span class="line-text">Health</span></span>
                        <span class="title2">Caring for You</span>
                    </h1>
                    <p class="hero-text">Qmed was established on the 15th of September 2001-Inspired by a desire to create an efficient and community relevant synergy between clinical and laboratory medicine.</p>
                    <div class="btn-group justify-content-center">
                        <!-- <a href="about" class="th-btn">Discover More</a> -->
                        <a href="services" class="th-btn style4">See All Services</a>
                    </div>
                </div>
            </div>
            <div class="hero-img">
                <img src="assets/img/hero/hero_2_1.png" alt="Image">
            </div>
            <div class="hero-shape1">
                <img src="assets/img/hero/hero_shape_2_1.svg" alt="shape">
            </div>
            <div class="hero-shape2">
                <img src="assets/img/hero/hero_shape_2_2.svg" alt="shape">
            </div>
            <div class="hero-shape3">
                <img src="assets/img/hero/hero_shape_2_3.svg" alt="shape">
            </div>
            <div class="hero-shape4">
                <img src="assets/img/hero/hero_shape_2_4.svg" alt="shape">
            </div>
            <div class="hero-shape5">
                <img src="assets/img/hero/hero_shape_2_5.svg" alt="shape">
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
About Area  
==============================-->
    <div class="space" id="about-sec">
        <div class="shape-mockup" data-top="0" data-right="0"><img src="assets/img/shape/pattern_shape_1.png" alt="shape"></div>
        <div class="shape-mockup jump" data-bottom="10%" data-right="3%"><img src="assets/img/drug.png" style="width: 80%; height: auto" alt="shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="assets/img/about-img.png" alt="About">
                        </div>
                        <div class="about-info">
                            <h3 class="box-title">Dr. E. Ogbechie</h3>
                            <p class="box-text">We have grown and <br> expanded our services.</p>
                            <div class="box-review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <a href="tel:+02014540554" class="box-link"><i class="fa-solid fa-phone"></i> +0 201 454 0554</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-4 ms-xl-2 text-center text-xl-start">
                        <div class="title-area mb-32">
                            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">About Us Company</span>
                            <h2 class="sec-title">Affordable Health Care Solutions</h2>
                            <p class="sec-text">Qmed was established on the 15th of September 2001-Inspired by a desire to create an efficient and community relevant synergy between clinical and laboratory medicine.</p>
                        </div>
                        <div class="mb-30 mt-n1">
                            <div class="checklist style2 list-two-column">
                                <ul>
                                    <li><i class="fas fa-heart-pulse"></i> Medical Checkup</li>
                                    <li><i class="fas fa-heart-pulse"></i> Routine Lab Test</li>
                                    <li><i class="fas fa-heart-pulse"></i> Home Service</li>
                                    <li><i class="fas fa-heart-pulse"></i> DNA Paternity Test</li>
                                    <li><i class="fas fa-heart-pulse"></i> Blood Banking</li>
                                    <li><i class="fas fa-heart-pulse"></i> STI Testing</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="about" class="th-btn">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Service Area  
==============================-->
<section class="overflow-hidden bg-smoke space" id="service-sec" data-bg-src="assets/img/bg/service_bg_1.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="title-area text-center">
                    <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Our Services</span>
                    <h2 class="sec-title">Q-Med special services</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <?php 
            $counter = 0; // Initialize the counter
            foreach ($services as $service): 
                if ($counter >= 8) {
                    break; // Exit the loop if 8 services have been displayed
                }
            ?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card" data-bs-toggle="modal" data-bs-target="#serviceModal" 
                         data-service-title="<?php echo $service['title']; ?>"
                         data-service-description="<?php echo $service['description']; ?>"
                         data-service-icon-src="<?php echo $service['icon_src']; ?>"
                         data-service-bg-src="<?php echo $service['bg_src']; ?>">
                        <div class="box-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="<?php echo $service['icon_src']; ?>" alt="Icon">
                        </div>
                        <h3 class="box-title"><a data-bs-target="#serviceModal" ><?php echo $service['title']; ?></a></h3>
                        <a data-bs-target="#serviceModal" class=""><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            <?php 
                $counter++; // Increment the counter
            endforeach; 
            ?>
        </div>
        <div class="mt-5 pt-2 space-extra-bottom">
            <p class="round-text"><span class="text">Check out our 20+ More services... <a href="services" class="line-btn">Explore All Services</a></span></p>
        </div>
    </div>
</section>

<!-- Modal Structure -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="mb-3">
                    <img id="serviceIcon" src="" alt="Service Icon" class="img-fluid">
                </div>
                <div>
                    <h4 id="serviceModalLabel">Service Name</h4>
                    <p id="serviceDescription">Service Description</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var serviceModal = document.getElementById('serviceModal');
        serviceModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var title = button.getAttribute('data-service-title');
            var description = button.getAttribute('data-service-description');
            var iconSrc = button.getAttribute('data-service-icon-src');

            var modalTitle = serviceModal.querySelector('#serviceModalLabel');
            var modalDescription = serviceModal.querySelector('#serviceDescription');
            var modalIcon = serviceModal.querySelector('#serviceIcon');

            modalTitle.textContent = title;
            modalDescription.textContent = description;
            modalIcon.src = iconSrc;
        });
    });
</script>



    <!--==============================
Cta Area  
==============================-->
    <section class="overflow-hidden cta-sec4" data-bg-src="assets/img/bg/cta_bg_4.jpg">
        <div class="container z-index-common">
            <div class="row align-items-end justify-content-center text-center text-xl-start">
                <div class="col-xl-7 col-lg-9 space-extra">
                    <div class="title-area mb-32">
                        <h2 class="sec-title text-white">We’re welcoming new patients and can’t wait to meet you!</h2>
                        <p class="sec-text text-white">Since those early days we have grown and expanded our services and locations. The only thing that has remained immutable is our commitment to deliver best service always.
                        </p>
                    </div>
                    <div class="btn-group justify-content-center">
                        <a href="#" class="th-btn style4 appointmentInfo shadow-1">Book Appointment</a>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="img-box2">
                        <img src="assets/img/office.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Feature Area  
==============================-->
    <div class="overflow-hidden space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="pe-xxl-5 mb-40 mb-xl-0">
                        <div class="title-area mb-32">
                            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">Why Choose Us</span>
                            <h2 class="sec-title">We Are Always Open For Your Health Services</h2>
                        </div>
                        <div class="choose-feature-wrap">
                            <div class="choose-feature">
                                <div class="box-number">01</div>
                                <div class="media-body">
                                    <h3 class="box-title">Compassionate & Expert Care</h3>
                                    <p class="box-text">Our team of dedicated healthcare professionals combines years of experience with a genuine commitment to providing.</p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-number">02</div>
                                <div class="media-body">
                                    <h3 class="box-title">Patient-Centered Approach</h3>
                                    <p class="box-text">Your health and well-being are our top priorities. We take the time to listen to your concerns, answer your questions.</p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-number">03</div>
                                <div class="media-body">
                                    <h3 class="box-title">Personalized Treatment Plans</h3>
                                    <p class="box-text">We understand that every patient is unique, and their healthcare needs may vary. That's why we create individualized treatment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="img-box3">
                        <img src="assets/img/why-choose-us.png" alt="Why">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Counter Area  
==============================-->
    <div class="z-index-common" data-pos-for="#team-sec" data-sec-pos="bottom-half">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">19</span>k</span><span class="plus">+</span>
                    </h2>
                    <p class="box-text">Satisfied Patients</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">25</span></span><span class="plus">+</span>
                    </h2>
                    <p class="box-text">Professional Doctors</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">1</span>k</span><span class="plus">+</span>
                    </h2>
                    <p class="box-text">Operations Successful</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">20</span></span><span class="plus">+</span>
                    </h2>
                    <p class="box-text">National Awards Win</p>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    <!--==============================
Team Area  
==============================-->
    <!--==============================
Appointment Area   
==============================-->
    <div class="overflow-hidden space">
        <div class="container">
            <div class="appointment-row">
                <div class="schedule-box">
                    <div class="shape"></div>
                    <h3 class="box-title">Working Hours</h3>
                    <p class="box-text">We are always available to attend to your health needs.</p>
                    <p class="box-timing">Monday - Tuesday: <span>9am - 6pm</span></p>
                    <p class="box-timing">Wednesday - Thursday: <span>8am - 5pm </span></p>
                    <p class="box-timing">Friday: <span>7am - 10pm</span></p>
                    <p class="box-timing">Saturday: <span>10am - 7pm </span></p>
                    <p class="box-timing">Sunday: <span>12pm - 7pm</span></p>
                </div>
                <div class="form-wrap">
                    <div class="img-box4">
                        <div class="img1">
                            <img src="assets/img/appointment-1.png" alt="Image">
                        </div>
                        <div class="img2">
                            <img src="assets/img/appointment-2.png" alt="Image">
                        </div>
                    </div>
                    <form action="mail.php" method="POST" class="appointment-form">
                        <h4 class="form-title">Make An Appointment</h4>
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                            </div>
                            <div class="form-group col-12">
                                <select name="subject" id="subject" class="form-select">
                                    <option value="" disabled selected hidden>Choose Department</option>
                                    <option value="Make Appointment">Make Appointment</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Medicine Help">Medicine Help</option>
                                    <option value="Consultation">Consultation</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="date-pick form-control" name="date" id="date-pick" placeholder="Date">
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="time-pick form-control" name="time" id="time-pick" placeholder="Time">
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn style4 btn-fw">BOOK AN APPOINTMENT</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
Process Area  
==============================-->
    <section class="space" data-bg-src="assets/img/bg/process_bg_1.jpg">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Work Process</span>
                <h2 class="sec-title">Let’s See How We Work Process</h2>
            </div>
            <div class="process-card-wrap">
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="assets/img/registration.png" alt="icon">
                        </div>
                        <p class="box-number">01</p>
                    </div>
                    <h3 class="box-title">Patient Registration</h3>
                    <p class="box-text">The first step in our process is to welcome our patients and ensure they have a experience.</p>
                </div>
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="assets/img/checkup.png" alt="icon">
                        </div>
                        <p class="box-number">02</p>
                    </div>
                    <h3 class="box-title">Check-Ups</h3>
                    <p class="box-text">Once the patient is checked in, healthcare professional conduct a thorough evaluation.</p>
                </div>
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="assets/img/reports.png" alt="icon">
                        </div>
                        <p class="box-number">03</p>
                    </div>
                    <h3 class="box-title">Get Report</h3>
                    <p class="box-text">Analyzing the result of diagnostic tests & incorporating them into the diagnosis.</p>
                </div>
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="assets/img/ongoing-care.png" alt="icon">
                        </div>
                        <p class="box-number">04</p>
                    </div>
                    <h3 class="box-title">Ongoing Care</h3>
                    <p class="box-text">Our commitment to our patient extend beyond the initial visit. we ensure continuity of care.</p>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Faq Area
==============================-->
<div class="overflow-hidden" id="faq-sec" data-bg-src="assets/img/faq-bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 text-center text-xl-start align-self-center">
                <div class="pe-xl-4 space-top pt-xl-0 pb-40 pb-xl-0">
                    <div class="title-area text-center text-xl-start">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon_2.svg" alt="Icon">Faqs</span>
                        <h2 class="sec-title text-white">Frequently Asked Have <br> Any Question?</h2>
                    </div>
                    <div class="accordion" id="faqAccordion">
                        <?php foreach ($faqs as $faq): ?>
                            <div class="accordion-card">
                                <div class="accordion-header" id="<?php echo $faq['parent_id']; ?>">
                                    <button class="accordion-button <?php echo $faq['show'] ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $faq['id']; ?>" aria-expanded="<?php echo $faq['show'] ? 'true' : 'false'; ?>" aria-controls="<?php echo $faq['id']; ?>">
                                        <?php echo $faq['question']; ?>
                                    </button>
                                </div>
                                <div id="<?php echo $faq['id']; ?>" class="accordion-collapse collapse <?php echo $faq['show'] ? 'show' : ''; ?>" aria-labelledby="<?php echo $faq['parent_id']; ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text"><?php echo $faq['answer']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ps-xxl-4">
                    <div class="faq-img1">
                        <img src="assets/img/faq-doc.png" alt="faq">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!--==============================
Testimonial Area  
==============================-->
<section class="space" id="testi-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">Testimonials</span>
            <h2 class="sec-title">What Our Clients Says?</h2>
        </div>
        <div class="swiper th-slider" id="testiSlide1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
            <div class="swiper-wrapper">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="swiper-slide">
                        <div class="testi-card bg-smoke">
                            <div class="box-review">
                                <?php for ($i = 0; $i < $testimonial['review']; $i++): ?>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                <?php endfor; ?>
                            </div>
                            <div class="box-quote">
                                <img src="<?php echo $testimonial['quote_icon']; ?>" alt="Icon">
                            </div>
                            <p class="box-text"><?php echo $testimonial['text']; ?></p>
                            <div class="box-profile">
                                <div class="box-img">
                                    <img src="<?php echo $testimonial['image']; ?>" alt="Avatar">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><?php echo $testimonial['name']; ?></h3>
                                    <span class="box-desig"><?php echo $testimonial['designation']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="slider-pagination"></div>
        </div>
    </div>
</section>

    <!--==============================
	Footer Area
==============================-->
    <?php include('includes/footer.php') ?>

    <!--********************************
			Code End  Here 
	******************************** -->    

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <?php include('partials/scripts.php') ?>
</body>

</html>
